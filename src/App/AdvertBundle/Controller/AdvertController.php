<?php

namespace App\AdvertBundle\Controller;

use App\CoreBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\AdvertBundle\Entity\Advert;
use App\AdvertBundle\Form\AdvertType;

/**
 * Advert controller.
 *
 * @Route("/advert")
 */
class AdvertController extends BaseController
{

    /**
     * Lists all Advert entities.
     *
     * @Route("/list/{alias}", name="advert", defaults={"alias":null})
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request, $alias)
    {
        $category = $this->getDoctrine()->getRepository('AdvertBundle:Category')->findOneBy(['alias'=>$alias]);
        if (null != $category){
            $criteria = ['category'=>$category, 'isEnabled' => true];
        } else {
            $criteria = ['isEnabled' => true];
        }

        $em = $this->getDoctrine()->getManager();
        $er = $this->getDoctrine()->getRepository('AdvertBundle:Advert');
        if (false !== $this->get('request')->query->has('search')) {
            $query = '%' . $this->get('request')->query->get('search') . '%';
            $qb = $er->createQueryBuilder('a');
            $qb->select('a');
            $qb->where('a.title like :title');
            $qb->orderBy('a.createdAt', 'desc');
            $qb->setParameter('title', $query);
            $entities = $qb->getQuery()->getResult();
        } else {
            $entities = $er->findBy($criteria);
        }

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Advert entity.
     *
     * @Route("/", name="advert_create")
     * @Method({"GET", "POST"})
     * @Template("AdvertBundle:Advert:create.html.twig")
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $er = $em->getRepository('AdvertBundle:Advert');

        if (true === $request->request->has('entity_id')) {
            $entity = $er->findOneBy(['id'=>$request->request->get('entity_id')]);
        } else {
            $entity = new Advert();
        }

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if (true === $request->isXmlHttpRequest() && true === $form->isValid()) {
            $entity->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $json = [
                'status' => 'success',
                'entity_id' => $entity->getId()
            ];

            return new JsonResponse($json);
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Advert entity.
     *
     * @param Advert $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Advert $entity)
    {
        $form = $this->createForm(
            new AdvertType(),
            $entity,
            array(
                'action' => $this->generateUrl('advert_create'),
                'method' => 'POST',
            )
        );

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Finds and displays a Advert entity.
     *
     * @Route("/show/{id}", name="advert_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdvertBundle:Advert')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Advert entity.');
        }

        $entity->countOfViewsAddOne();
        $em->persist($entity);
        $em->flush();

        return array(
            'entity' => $entity,
        );
    }

    /**
     * Displays a form to edit an existing Advert entity.
     *
     * @Route("/{id}/edit", name="advert_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdvertBundle:Advert')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Advert entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Advert entity.
     *
     * @param Advert $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Advert $entity)
    {
        $form = $this->createForm(
            new AdvertType(),
            $entity,
            array(
                'action' => $this->generateUrl('advert_update', array('id' => $entity->getId())),
                'method' => 'PUT',
            )
        );

        return $form;
    }

    /**
     * Edits an existing Advert entity.
     *
     * @Route("/{id}", name="advert_update")
     * @Method("PUT")
     * @Template("AdvertBundle:Advert:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdvertBundle:Advert')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Advert entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->addMessage('success', 'form.save.success');
            return $this->redirect($this->generateUrl('advert_show', ['id'=>$id]));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Advert entity.
     *
     * @Route("/{id}", name="advert_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdvertBundle:Advert')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Advert entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('advert'));
    }

    /**
     * Creates a form to delete a Advert entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('advert_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm();
    }
}
