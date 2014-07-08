<?php

namespace Connection\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;


class FrontendController extends Controller
{
    public function indexAction()
    {
        return $this->render('ConnectionWebBundle:Frontend:index.html.twig');
    }

    public function topNavbarAction()
    {
        return $this->render('ConnectionWebBundle:Frontend/Parts:_topNavbar.html.twig');
    }

}
