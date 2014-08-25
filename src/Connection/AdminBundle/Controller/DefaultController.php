<?php

namespace Connection\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="admin_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/contact-us", name="admin_contact_us")
     * @Template()
     */
    public function contactAction()
    {
        $contacts = $this->getDoctrine()->getRepository('ConnectionWebBundle:ContactUs')->findAll();
        return array('contacts'=> $contacts);
    }
}
