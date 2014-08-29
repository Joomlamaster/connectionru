<?php

namespace Connection\WebBundle\Controller;

use Connection\WebBundle\Form\Type\ContactType;
use Connection\UserBundle\Form\Type\SearchType;
use Connection\WebBundle\Form\Type\TellAFriendType;
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
        $registrationForm = $formFactory->createForm();

        //check if form was forwarded
        $searchForm = $this->getRequest()->get('searchForm');
        if(!isset($searchForm)){
            $searchForm       = $this->createForm('connection_search');
            //remove captcha from quick search
            $searchForm->remove('captcha');
        }


        return $this->render('ConnectionWebBundle:Frontend:index.html.twig', array(
            'registrationForm' => $registrationForm->createView(),
            'searchForm' => $searchForm->createView()
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

    /**
     * @Route("/tell-a-friend", name="connection_tell_a_friend")
     */
    public function tellAFriendEndPointAction( Request $request, $link = false )
    {
        $form = $this->createForm( new TellAFriendType() );
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $sender   = $this->container->getParameter('mailer_user');
                $sendTo   = array($form->get('email')->getData());
                $message  = \Swift_Message::newInstance()
                    ->setSubject('ConnectionRu, share link')
                    ->setContentType('text/html')
                    ->setFrom($sender)
                    ->setTo($sendTo)
                    ->setBody($this->container->get('templating')->render('ConnectionWebBundle:Frontend/Mail:tell-a-friend.html.twig', array(
                        'link' => $form->get('link')->getData(),
                        'message' => $form->get('message')->getData()
                    )));

                $mailer = $this->container->get('mailer');
                $mailer->send($message);

                return $this->redirect($form->get('link')->getData());
            }
        } else {
            if (!$link) {
                throw new \Exception('Link should be specified');
            }
            $form->get('link')->setData($link);
        }
        return $this->render('ConnectionWebBundle:Frontend:tell_a_friend.html.twig', array(
            'form' => $form->createView()
        ));
    }
}