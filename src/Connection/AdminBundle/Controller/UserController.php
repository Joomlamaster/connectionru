<?php

namespace Connection\AdminBundle\Controller;

use Connection\AdminBundle\Entity\Background;
use Connection\EventBundle\Entity\Event;
use Connection\EventBundle\Entity\EventComment;
use Connection\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

class UserController extends Controller
{
    /**
     * @Route("/users", name="admin_user_index")
     * @Template()
     */
    public function indexAction()
    {
        if (!$user = $this->getUser()) {
            throw new AccessDeniedException("You have no permissions");
        }
        $users = $this->getDoctrine()->getRepository("ConnectionUserBundle:User")->getUsersList($user->getId());
        return array(
            'users' => $users,
            'headline' => "Users"
        );
    }

    /**
     * @Route("/user/ban/{id}", name="admin_user_ban", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionUserBundle:User")
     */
    public function banAction( User $user )
    {
        $em = $this->getDoctrine()->getManager();
        $user->setEnabled(0);
        $em->persist($user);
        $em->flush();

        return $this->redirect( $this->generateUrl('admin_user_index') );
    }

    /**
     * @Route("/user/unban/{id}", name="admin_user_unban", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionUserBundle:User")
     */
    public function unBanAction( User $user )
    {
        $em = $this->getDoctrine()->getManager();
        $user->setEnabled(1);
        $em->persist($user);
        $em->flush();

        return $this->redirect( $this->generateUrl('admin_user_index') );
    }

    /**
     * @Route("/user/delete/{id}", name="admin_user_delete", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionUserBundle:User")
     */
    public function deleteAction( User $user )
    {
        $em = $this->getDoctrine()->getManager();
        $threadsMetadataRepo = $em->getRepository('ConnectionMessageBundle:ThreadMetadata');
        $threadsRepo = $em->getRepository('ConnectionMessageBundle:Thread');
        $messagesMetadataRepo = $em->getRepository('ConnectionMessageBundle:MessageMetadata');
        $messagesRepo = $em->getRepository('ConnectionMessageBundle:Message');

        //delete all user messages/threads
        $threadsMeta = $threadsMetadataRepo->findBy(array('participant' => $user));
        foreach($threadsMeta as $thread){
            $em->remove($thread);
        }
        $threads = $threadsRepo->findBy(array('createdBy' => $user));
        foreach($threads as $thread){
            $em->remove($thread);
        }
        $messagesMeta = $messagesMetadataRepo->findBy(array('participant' => $user));
        foreach($messagesMeta as $message){
            $em->remove($message);
        }
        $messages = $messagesRepo->findBy(array('sender' => $user));
        foreach($messages as $message){
            $em->remove($message);
        }

        $em->flush();
        $em->remove($user);
        $em->flush();
        $this->container->get('session')->getFlashBag()->add('notice', 'User was successfully deleted.');
        return $this->redirect( $this->generateUrl('admin_user_index') );
    }
}
