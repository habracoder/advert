<?php

namespace App\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        $form = $this->createFormBuilder();
        $form->setAction($this->generateUrl('advert'));
        $form->add('search', 'text');
        $form = $form->getForm();


        $categories = $this->getDoctrine()
            ->getRepository('AdvertBundle:Category')
            ->findBy(['parent'=> null]);

        return [
            'categories' => $categories,
            'form' => $form->createView()
        ];
    }
}
