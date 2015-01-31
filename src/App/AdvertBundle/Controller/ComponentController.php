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
     * @Route("/advert/toggle_bookmark", name="toggle_bookmark", options={"expose"=true})
     * @return Response
     */
    public function toggleBookmarkAction(Request $request)
    {
        $json['status'] = 'success';

        try {
            $em = $this->getDoctrine()->getManager();
            $er = $em->getRepository('AdvertBundle:Advert');

            // Checking authorization
            if (false == $this->get('security.context')->isGranted('ROLE_USER')) {
                throw new Exception('you are not logged in', 401);
            }

            // Checking existing ad
            if (null === $advert = $er->findOneBy(['id' => $request->query->get('advert_id')])) {
                throw new Exception('Advert not found!', 404);
            }

            if (true == $this->getUser()->getAdvertBookmarks()->contains($advert)) {
                $this->getUser()->removeAdvertBookmark($advert);
                $json['bookmark']   = 'removed';
                $json['message']    = 'Ad has been deleted from the bookmark list';
            } else {
                $this->getUser()->addAdvertBookmark($advert);
                $json['bookmark']   = 'added';
                $json['message']    = 'Ad has been added to the bookmark list';
            }

            $em->persist($this->getUser());
            $em->flush();
        } catch (Exception $e) {
            $json['status']     = 'fail';
            $json['message']    = $e->getMessage();
            return new JsonResponse($json, $e->getCode());
        }

        return new JsonResponse($json);
    }
}
