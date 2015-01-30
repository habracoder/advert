<?php

namespace App\CoreBundle\Controller;

use App\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    /**
     * @var array $parameters
     */
    protected $parameters = array();

    /**
     *   * Set parameter for template
     *
     * @param $param - parameter key or array parrameters witth keys
     * @param null $value - value of parameter
     * @return $this
     */
    protected function setValue($param, $value = null)
    {
        if (is_array($param)) {
            $this->parameters = array_merge($this->parameters, $param);
        } else {
            $this->parameters[$param] = $value;
        }

        return $this;
    }

    /**
     * Set title for layout of template
     *
     * @param $title
     * @return $this
     */
    protected function setTitle($title)
    {
        $this->setValue('page_title', $title);
        return $this;
    }

    /**
     * Renders a view.
     *
     * @param string $view The view name
     * @param array $parameters An array of parameters to pass to the view
     * @param Response $response A response instance
     *
     * @return Response A Response instance
     */
    public function render($view, array $parameters = array(), Response $response = null)
    {
        $this->setValue($parameters);

        if (false === isset($this->parameters['page_title'])) {
            if (false != isset($this->parameters['page_heading'])) {
                $this->setTitle($this->parameters['page_heading'] . " :: " . $this->container->getParameter('frontend.default_title'));
            } else {
                $this->setTitle($this->container->getParameter('frontend.default_title'));
            }
        }

        $request = new Request();
        $this->setValue('isAjax', $request->isXmlHttpRequest());

        return $this->container->get('templating')->renderResponse($view, $this->parameters, $response);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    public function getSession()
    {
        return $this->get('session');
    }

    /**
     * @return User|null
     */
    public function getUser()
    {
        return parent::getUser();
    }

    /**
     * @param $key
     * @param $message
     */
    public function addMessage($key, $message)
    {
        $this->get('session')->getFlashBag()->set($key, $message);
    }
}
