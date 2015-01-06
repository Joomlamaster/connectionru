<?php

namespace Connection\EventBundle\Controller;

use Connection\EventBundle\Entity\Event;
use Connection\EventBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Connection\EventBundle\Entity\EventComment;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * @Route("/comment")
 */
class CommentController extends Controller
{
    public function addCommentFormAction( Event $event )
    {
        if ( (!$user = $this->getUser()) || !$event) {
            throw new AccessDeniedException();
        }

        $comment = new EventComment();
        $form    = $this->createForm( new CommentType(), $comment );
        $form->get('author')->setData($user);
        $form->get('event')->setData($event);
        return $this->render('ConnectionEventBundle:Comment:form.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/add", name="add_event_comment")
     */
    public function viewAction( Request $request )
    {
        if ( !$user = $this->getUser() || !$event ) {
            throw new AccessDeniedException();
        }

        $comment = new EventComment();
        $form    = $this->createForm( new CommentType(), $comment );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->render('ConnectionEventBundle:Comment:comment.html.twig', array('comment' => $comment));
        }

        return new Response('Validation Fail', 400);
    }
}
