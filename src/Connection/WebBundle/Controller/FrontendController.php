<?php

namespace Connection\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class FrontendController extends Controller
{
    /**
     * @Route("/", name="connection_homepage")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('ConnectionWebBundle:Frontend:index.html.twig');
    }

    public function topNavbarAction()
    {
        return $this->render('ConnectionWebBundle:Frontend/Parts:_topNavbar.html.twig');
    }

}
