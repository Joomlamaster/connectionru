<?php

namespace Connection\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


/**
 * @Route("/user")
 */
class UserController extends Controller
{
    public function latestAction()
    {
        $users = $this->getDoctrine()->getRepository('ConnectionUserBundle:User')->getLatest(6);
        return $this->render('ConnectionUserBundle:User:latest_block.html.twig', array(
            'users' => $users
        ));
    }
}
