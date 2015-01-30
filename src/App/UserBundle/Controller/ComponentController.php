<?php

namespace App\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ComponentController extends Controller
{
    /**
     *
     * @var Request $request
     * @Route("/advert/filters", name="advert_component_filters", options={"expose"=true})
     * @return Response
     */
    public function recentAdvertsAction(Request $request)
    {
        $data = [];
        $data['heading_title'] = 'Последние добавленные';
        $data['heading_descr'] = 'Некоторые из последних обявлений автора';
        $data['entities'] = $this->getDoctrine()->getRepository('AdvertBundle:Advert')->findBy([], [], 0);

        return $this->render('@User/Component/shortAdvertsList.html.twig', $data);
    }

    /**
     *
     * @var Request $request
     * @Route("/advert/bookmarks", name="advert_component_bookmarks", options={"expose"=true})
     * @return Response
     */
    public function bookmarksAdvertsAction(Request $request)
    {
        if (null == $this->getUser()) {
            return $this->redirect($this->generateUrl('homepage'));
        }
        $data = [];
        $data['heading_title'] = 'Сохраненные обявления';
        $data['heading_descr'] = 'Обявления которые вы добавили в закладки';
        $data['entities'] = $this->getUser()->getAdvertBookmarks();

        return $this->render('@User/Component/shortAdvertsList.html.twig', $data);
    }

    /**
     *
     * @var Request $request
     * @Route("/advert/filters", name="advert_component_filters", options={"expose"=true})
     * @return Response
     */
    public function viewedAdvertsAction(Request $request)
    {
        $data = [];
        $data['heading_title'] = 'Пользователь смотрел';
        $data['heading_descr'] = 'Некоторые обявления которые смотрел пользователь';
        $data['entities'] = $this->getDoctrine()->getRepository('AdvertBundle:Advert')->findBy([], [], 0);

        return $this->render('@User/Component/shortAdvertsList.html.twig', $data);
    }

    /**
     * @param Request $request
     * @return array
     * @Template()
     */
    public function sidebarProfileAction(Request $request)
    {
        return [
            'user' => $this->getUser()
        ];
    }
}
