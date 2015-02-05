<?php

namespace App\AdvertBundle\Controller;

use App\CoreBundle\Controller\BaseController;
use App\StorageBundle\Entity\Image;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\AdvertBundle\Entity\Advert;
use App\AdvertBundle\Form\AdvertType;
use App\AdvertBundle\Form\NewAdvertType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Advert controller.
 *
 * @Route("/advert")
 */
class AdvertController extends BaseController
{
    /**
     * Finds and displays a Advert entity.
     *
     * @Route("/{id}/show", name="advert_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $er = $em->getRepository('AdvertBundle:Advert');
        $ad = $er->find($id);

        if (!$ad) {
            throw $this->createNotFoundException('Unable to find Advert entity.');
        }

        $ad->countOfViewsAddOne();
        $em->persist($ad);
        $em->flush();

        return [
            'entity' => $ad,
        ];
    }

    /**
     * Lists all Advert entities.
     *
     * @Route("/list/{alias}", name="advert", defaults={"alias":null})
     * @Method("GET")
     * @Template()
     */
    public function listAction(Request $request, $alias)
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

        return [
            'entities' => $entities,
        ];
    }

    /**
     * Creates a new Advert entity.
     *
     * @Route("/create", name="advert_create")
     * @Method({"GET", "POST"})
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ad = new Advert();

        $form = $this->createCreateForm($ad);

        if (true === $request->isXmlHttpRequest()) {
            $json = [];

            try {
                $form->handleRequest($request);

                if (true === $form->isValid()) {
                    $ad->setUser($this->getUser());
                    $em->persist($ad);
                    $em->flush();
                    $json = [
                        'status' => 'success',
                        'redirect_href' => $this->generateUrl('advert_edit', ['id' => $ad->getId()])
                    ];
                } else {
                    $json['errors'] = [];
                    foreach ($form->getErrors() as $error) {
                        $json['errors'][$error->getOrigin()->getConfig()->getName()] = $error->getMessage();
                    }
                }
            } catch (\Exception $e) {
                $json['message'] = $e->getMessage();
                return new JsonResponse($json, 500);
            }

            return new JsonResponse($json);
        }

        return new Response(
            $this->get('templating')->render('AdvertBundle:Advert:create.html.twig', [
                'entity' => $ad,
                'form' => $form->createView(),
        ]));
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
            new NewAdvertType(),
            $entity,
            [
                'action' => $this->generateUrl('advert_create'),
                'method' => 'POST',
            ]
        );

        return $form;
    }

    /**
     * Displays a form to edit an existing Advert entity.
     *
     * @Route("/{id}/edit", name="advert_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $er = $em->getRepository('AdvertBundle:Advert');
        $ad = $er->find($id);

        if (null === $ad) {
            throw $this->createNotFoundException('Unable to find Advert');
        }

        $editForm = $this->createEditForm($ad);
        $deleteForm = $this->createDeleteForm($id);

        if (true === $request->isXmlHttpRequest()) {
            try {
                $json = [];
                $editForm->handleRequest($request);
                if (true === $editForm->isValid()) {
                    $em->persist($ad);
                    $em->flush();
                    $json = [
                        'status' => 'success',
                        'redirect_href' => $this->generateUrl('advert_show', ['id' => $ad->getId()])
                    ];
                } else {
                    $json['errors'] = [];
                    foreach ($editForm->getErrors() as $error) {
                        $json['errors'][$error->getOrigin()->getConfig()->getName()] = $error->getMessage();
                    }
                }
            } catch (\Exception $e) {
                return new JsonResponse(['message' => $e->getMessage()], 500);
            }

            return new JsonResponse($json);
        }

        $uploadImageForm = $this->createUploadForm($ad);

        return [
            'entity' => $ad,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'imageUploadForm' => $uploadImageForm->createView()
        ];
    }

    /**
     * Displays a form to edit an existing Advert entity.
     *
     * @Route("advert{id}/upload/image", name="advert_image_apload")
     * @Method({"GET", "POST"})
     */
    public function uploadImageAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $er = $em->getRepository('AdvertBundle:Advert');

        if (null === $ad = $er->findOneBy(['id'=>$id])) {
            throw $this->createNotFoundException('Advert is not found!');
        }

        $json = [];
        $form = $this->createUploadForm($ad);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            $files = $data['file'];

            foreach($files as $file) {
                $image = new Image();
                $image->setFile($file);
                $em->persist($image);
                $em->flush();
            }

        } else {
            $errors = $form->getErrors();
        }

        return new JsonResponse($json);
    }



    /**
     * Creates a form to edit a Advert entity.
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createUploadForm(Advert $ad)
    {
        $form = $this->createFormBuilder();
        $form->add('file', 'file', [
            'multiple' => true,
            'label' => 'Изображения',
            'attr' => [
                'id' => 'fileupload',
                'data-url' => $this->generateUrl('advert_image_apload', ['id' => $ad->getId()])
            ]
        ]);
        $form = $form->getForm();

        return $form;
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
            [
                'action' => $this->generateUrl('advert_edit', ['id' => $entity->getId()]),
            ]
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

        return [
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ];
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
            ->setAction($this->generateUrl('advert_delete', ['id' => $id]))
            ->setMethod('DELETE')
            ->add('submit', 'submit', ['label' => 'Delete'])
            ->getForm();
    }
}
