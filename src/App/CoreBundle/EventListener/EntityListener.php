<?php
namespace App\CoreBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class EntityListener
 * @package App\CoreBundle\EventListener
 */
class EntityListener
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container    = $container;
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
        $this->doBeforeSaving($args);
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $this->doBeforeSaving($args);
    }

    /**
     * @param LifecycleEventArgs $args
     * @return void
     * @throws \Exception
     */
    private function doBeforeSaving(LifecycleEventArgs $args){

        try {
            // Set createdAt if method exist and value of parameter is empty
            if (true == method_exists($args->getEntity(), 'setCreatedAt')) {
                if (null == $args->getEntity()->getCreatedAt()) {
                    $args->getEntity()->setCreatedAt(new \DateTime());
                }
            }

            // Set updatedAt if method exist
            if (true == method_exists($args->getEntity(), 'setUpdatedAt')) {
                $args->getEntity()->setUpdatedAt(new \DateTime());
            }

            // Get user from token
            if (null !== $this->container->get('security.context')->getToken() &&
                null != ($user = $this->container->get('security.context')->getToken()->getUser())) {

                // Set createdBy if method exist and value of parameter is empty
                if (true == method_exists($args->getEntity(), 'setCreatedBy')) {
                    if (null == $args->getEntity()->getCreatedBy()) {
                        $args->getEntity()->setCreatedBy($user);
                    }
                }

                // Set updatedBy if method exist
                if (true == method_exists($args->getEntity(), 'setUpdatedBy')) {
                    $args->getEntity()->setUpdatedBy($user);
                }
            }
        } catch (\Exception $e) {
            throw new \Exception('unable to set timestampteble or createble', 500);
        }
    }
}