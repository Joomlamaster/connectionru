<?php

namespace Connection\WebBundle\Controller;

use Connection\WebBundle\Form\Type\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Connection\WebBundle\Entity\ContactUs;


class FrontendController extends Controller
{
    /**
     * @Route("/", name="connection_homepage")
     */
    public function indexAction()
    {
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        $form = $formFactory->createForm();
        return $this->render('ConnectionWebBundle:Frontend:index.html.twig', array(
            'form' => $form->createView()
        ));
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

    public function backgroundAction()
    {
        $background = $this->getDoctrine()
            ->getRepository('ConnectionAdminBundle:Background')
            ->findOneBy(array('isDefault' => 1));
        return $this->render('ConnectionWebBundle:Frontend/Parts:background.html.twig', array(
            'background' => $background
        ));

    }

    /**
     * @Route("/contact-us", name="connection_contact")
     */
    public function contactAction( Request $request )
    {
        $contact    = new ContactUs();
        $form       = $this->createForm( new ContactType(), $contact );
        $saved      = false;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            $saved = true;
        }
        return $this->render('ConnectionWebBundle:Frontend:contact.html.twig', array(
            'form' => $form->createView(),
            'saved' => $saved
        ));
    }

}
