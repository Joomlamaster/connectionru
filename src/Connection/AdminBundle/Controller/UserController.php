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

class UserController extends Controller
{
    /**
     * @Route("/users", name="admin_user_index")
     * @Template()
     */
    public function indexAction()
    {
        $users = $this->getDoctrine()->getRepository("ConnectionUserBundle:User")->findAll();
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
        $em->remove($user);
        $em->flush();
        $this->container->get('session')->getFlashBag()->add('notice', 'User was successfully deleted.');
        return $this->redirect( $this->generateUrl('admin_user_index') );
    }
}
