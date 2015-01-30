<?php

namespace App\UserBundle\Controller;

use App\CoreBundle\Controller\BaseController;
use App\StorageBundle\Entity\Image;
use App\UserBundle\Form\ImageType;
use App\UserBundle\Form\UserType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\UserBundle\Entity\User;

/**
 * Profile controller.
 *
 * @Route("/")
 */
class ProfileController extends BaseController
{
    /**
     * Finds and displays a User entity.
     *
     * @Route("/pk{id}", name="profile.show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Request $request, $id)
    {
        if (null == $entity = $this->getDoctrine()->getManager()->getRepository('UserBundle:User')->find($id)) {
            return $this->redirect($this->generateUrl('profile.show', ['id'=>$this->getUser()->getId()]));
        }

        return array(
            'user' => $entity
        );
    }

    /**
     * Creates a form to edit a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(User $entity)
    {
//        $image = new Image();
        $form = $this->createForm(
            new UserType(),
            $entity,
            array(
                'action' => $this->generateUrl('profile.edit'),
                'method' => 'PUT',
            )
        );

        $form->add('submit', 'submit', array('label' => 'action.edit'));

        return $form;
    }

    /**
     * Edits an existing User entity.
     *
     * @Route("/settings", name="profile.edit")
     * @Method({"GET", "POST", "PUT"})
     * @Template("UserBundle:Profile:edit.html.twig")
     */
    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if (null == $entity = $this->getUser()) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);


        try {
            if (true == $request->isMethod("PUT")) {
                if (true == $editForm->isValid()) {

                    $this->getDoctrine()->getManager()->persist($entity);
                    $this->getDoctrine()->getManager()->flush();

                    $this->get('session')->getFlashBag()->add('success', 'form.save.success');

                    return $this->redirect($this->generateUrl('profile.edit', array('id' => $entity->getId())));
                } else {
                    $this->get('session')->getFlashBag()->set('warning', 'form.validate.error');
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->set('danger', 'form.save.error');
        }

        return array (
            'entity' => $entity,
            'form' => $editForm->createView()
        );
    }

    /**
     *
     * @var Request $request
     * @Route("/profile_upload_image", name="profile_upload_image", options={"expose"=true})
     * @return Response
     */
    public function uploadImageAction(Request $request)
    {
        if (null == $image = $this->getUser()->getImage()) {
            $image = new Image();
            $image->setUser($this->getUser());
        }

        $em = $this->getDoctrine()->getManager();
        $imageForm = $this->createForm(new ImageType(), $image);

        if (true === $request->isXmlHttpRequest()) {
            $imageForm->handleRequest($request);
            $json = [];
            if ($imageForm->isValid()) {
                $em->persist($image);
                $em->flush();

                $json['status'] = 'success';
                $json['image'] = $this->container->get('templating.helper.assets')->getUrl($image->getWebPath());
            } else {

            }


            return new JsonResponse($json);
        }

        return new Response($this->get('templating')->render('@User/Profile/uploadImage.html.twig', [
            'form' => $imageForm->createView(),
            'image' => $image
        ]));
    }
}

