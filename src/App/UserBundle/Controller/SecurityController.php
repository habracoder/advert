<?php

namespace App\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\UserBundle\Controller\SecurityController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * User controller.
 *
 * @Route("/")
 */
class SecurityController extends BaseController
{
    /**
     * @Route("/login", name="security_login")
     * @Method("GET")
     */
    public function loginAction(Request $request)
    {
        return parent::loginAction($request);
    }


    /**
     * @Route("/login_check", name="security_check")
     */
    public function checkAction()
    {

    }
}