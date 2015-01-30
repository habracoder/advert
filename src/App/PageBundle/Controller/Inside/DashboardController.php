<?php

namespace App\PageBundle\Controller\Inside;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/inside")
 */
class DashboardController extends Controller
{
    /**
     * @Route("/", name="inside.dashboard")
     * @Template()
     */
    public function dashboardAction()
    {
        return array();
    }
}
