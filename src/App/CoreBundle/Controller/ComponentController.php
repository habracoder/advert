<?php

namespace App\CoreBundle\Controller;

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
     * @Route("/assets/js/translations.{_format}", name="sample_sitemaps_sitemap", Requirements={"_format" = "js"})
     */
    public function searchPanelAction()
    {
        $translator = $this->get('translator');
        $res = $translator->trans('Category of advert');
        $messages = $translator->getMessages('ru');


        $form = $this->createFormBuilder(null, [
            'csrf_protection' => false
        ]);
        $form->add('search', 'search');
        $form->setMethod('GET');
        $form = $form->getForm();


        return new Response($this->get('templating')->render('@Core/Widget/searchPanel.html.twig', [
            'form' => $form->createView()
        ]));

    }
}
