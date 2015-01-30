<?php

namespace App\AdvertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ComponentController extends Controller
{
    /**
     *
     * @var Request $request
     * @Route("/advert/filters", name="advert_component_filters", options={"expose"=true})
     * @Template()
     * @return Response
     */
    public function filtersAction(Request $request)
    {
        return [];
    }

    /**
     * @return array
     * @Template()
     */
    public function newAdvertModalAction()
    {
        $form = $this->get('form.factory')->create('form');
        $form->add('name', 'text');

        return [
            'form' => $form->createView()
        ];
    }

    /**
     *
     * @var Request $request
     * @Route("/advert/add_to_bookmark", name="add_advert_to_bookmark", options={"expose"=true})
     * @return Response
     */
    public function addAdvertToBookmarkAction(Request $request)
    {
        $json = [];
        $id = $request->query->get('id');
        $em = $this->getDoctrine()->getManager();
        $er = $em->getRepository('AdvertBundle:Advert');
        $user = $this->getUser();

        if (null === $advert = $er->findOneBy(['id' => $id])) {
            throw new Exception('Advert not found!', 404);
        }

        if (true == $user->getAdvertBookmarks()->contains($advert)) {
            $user->removeAdvertBookmark($advert);
            $json['status'] = 'remove';
        } else {
            $user->addAdvertBookmark($advert);
            $json['status'] = 'add';
        }

        $em->persist($user);
        $em->flush();

        return new JsonResponse($json);
    }
}
