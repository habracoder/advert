<?php

namespace App\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WidgetController extends Controller
{
    /**
     * @Template()
     */
    public function navigationAction()
    {
        $menu = [
            'left' => [
                [
                    'name' => 'Главная',
                    'url' => $this->generateUrl('homepage')
                ]
            ],
            'right' => [
                [
                    'name' => 'Олександр',
                    'url' => '#',
                    'children' => [
                        [
                            'name' => 'Профиль',
                            'url' => '#',
                        ],
                        [
                            'name' => 'Выйти',
                            'url' => '#',
                        ]
                    ]
                ]
            ]
        ];

        return array(
            'menu' => $menu
        );
    }

    /**
     * @Template()
     */
    public function breadcrumbsAction()
    {
        return array();
    }

    /**
     *
     * @var Request $request
     * @Route("/autocompetePanel", name="widget_autocomplete_panel", options={"expose"=true})
     */
    public function searchPanelAction(Request $request)
    {
        $form = $this->createFormBuilder(null, [
            'csrf_protection' => false
        ]);
        $form->add('search', 'search');
        $form->setMethod('GET');
        $form = $form->getForm();
//        $form->handleRequest($request);
        $form->submit($request->query->get($form->getName()));

        if ($form->isValid() && $request->isXmlHttpRequest()){
            $data = $form->getData();
            $searchQuery = '%' . $data['search'] . '%';
            $json = ['success' => true];
            $em = $this->getDoctrine()->getManager();
            $er = $em->getRepository('AdvertBundle:Advert');
            $qb = $er->createQueryBuilder('a');
            $qb->select('a');
            $qb->where('a.title like :title');
            $qb->orderBy('a.createdAt', 'desc');
            $qb->setParameter('title', $searchQuery);

            foreach ($qb->getQuery()->getResult() as $advert) {
                $json['adverts'][] = [
                    'id' => $advert->getId(),
                    'title' => $advert->getTitle(),
                    'content' => $advert->getContent()
                ];
            }
            return new JsonResponse($json, 200);
        }

        return new Response($this->get('templating')->render('@Core/Widget/searchPanel.html.twig', [
            'form' => $form->createView()
        ]));

    }

    /**
     *
     * @var Request $request
     * @Route("/loginModal", name="widget_login_modal", options={"expose"=true})
     */
    public function loginModalAction(Request $request)
    {
        $form = $this->createFormBuilder(null, [
            'csrf_protection' => false
        ]);
        $form->add('search', 'search');
        $form->setMethod('GET');
        $form = $form->getForm();
        $form->submit($request->query->get($form->getName()));



        return new Response($this->get('templating')->render('@Core/Widget/searchPanel.html.twig', [
            'form' => $form->createView()
        ]));

    }

//    /**
//     * @Route("/autocompetePanel", name="widget_autocomplete_panel", options={"expose"=true})
//     */
//    public function searchPanelAutocomplete()
//    {
//        $form = $this->createFormBuilder();
//    }

    private function createSearchForm()
    {
        $form = $this->createFormBuilder('search');
        $form->add('search', 'text');

        return $form->getForm();
    }
}
