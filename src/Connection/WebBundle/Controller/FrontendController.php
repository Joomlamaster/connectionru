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
     */
    public function indexAction()
    {
        return $this->render('ConnectionWebBundle:Frontend:index.html.twig');
    }

    /**
     * @Route("/about-us", name="connection_about")
     */
    public function aboutAction()
    {
        return $this->render('ConnectionWebBundle:Frontend:about.html.twig');
    }

    /**
     * @Route("/privacy", name="connection_privacy")
     */
    public function privacyAction()
    {
        return $this->render('ConnectionWebBundle:Frontend:privacy.html.twig');
    }

    public function topNavbarAction()
    {
        return $this->render('ConnectionWebBundle:Frontend/Parts:_topNavbar.html.twig');
    }

}
