<?php

namespace Connection\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Connection\UserBundle\Entity\User;


class UserController extends Controller
{
    public function latestAction()
    {
        $currentUserId = ($user = $this->getUser()) ? $user->getId() : false;
        $users         = $this->getDoctrine()->getRepository('ConnectionUserBundle:User')->getLatest(6, $currentUserId);
        return $this->render('ConnectionUserBundle:User:latest_block.html.twig', array(
            'users' => $users
        ));
    }

    /**
     * @Route("/favorite/add/{id}", name="favorite_user_add", requirements={"id" = "\d+"})
     * @ParamConverter("User", class="ConnectionUserBundle:User")
     */
    public function addFavoriteUserAction(User $userToAdd){
        /* @var $user \Connection\UserBundle\Entity\User */
        $user = $this->getUser();
        if(!$user->hasFavoriteUser($userToAdd)){
            $em = $this->getDoctrine()->getManager();
            $user->addFavoriteUser($userToAdd);
            $em->persist($user);
            $em->flush();
            $this->container->get('session')->getFlashBag()->add('notice', 'User '.$userToAdd->getUsername().' added successfully to yor favorite users');
        }
        return $this->redirect( $this->generateUrl('view_profile', array('id' => $userToAdd->getProfile()->getId())) );
    }

    /**
     * @Route("/favorite/remove/{id}", name="favorite_user_remove", requirements={"id" = "\d+"})
     * @Template("ConnectionUserBundle:Profile:view.html.twig")
     * @ParamConverter("User", class="ConnectionUserBundle:User")
     */
    public function removeFavoriteUserAction(User $userToRemove){
        /* @var $user \Connection\UserBundle\Entity\User */
        $user = $this->getUser();
        if($user->hasFavoriteUser($userToRemove)){
            $em = $this->getDoctrine()->getManager();
            $user->removeFavoriteUser($userToRemove);
            $em->persist($user);
            $em->flush();
            $this->container->get('session')->getFlashBag()->add('notice', 'User '.$userToRemove->getUsername().' removed successfully from yor favorite users');
        }
        return $this->redirect( $this->generateUrl('view_profile', array(
            'id' => $userToRemove->getProfile()->getId()
        )) );

    }

    /**
     * @Route("/favorite/remove2/{id}", name="profile_favorite_user_remove", requirements={"id" = "\d+"})
     * @Template("ConnectionUserBundle:Profile:view.html.twig")
     * @ParamConverter("User", class="ConnectionUserBundle:User")
     */
    public function removeProfileFavoriteUserAction(User $userToRemove){
        /* @var $user \Connection\UserBundle\Entity\User */
        $user = $this->getUser();
        if($user->hasFavoriteUser($userToRemove)){
            $em = $this->getDoctrine()->getManager();
            $user->removeFavoriteUser($userToRemove);
            $em->persist($user);
            $em->flush();
            $this->container->get('session')->getFlashBag()->add('notice', 'User '.$userToRemove->getUsername().' removed successfully from yor favorite users');
        }
        return $this->redirect( $this->generateUrl('edit_user_profile', array(
            'tab' => 'favorites'
        )) );

    }

    /**
     * @Route("/visibility/hide", name="profile_visibility_hide")
     */
    public function hideAction() {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $user->setHide(true);
        $em->persist($user);
        $em->flush();

        return $this->redirect( $this->generateUrl('edit_user_profile_edit') );
    }

    /**
     * @Route("/visibility/show", name="profile_visibility_show")
     */
    public function showAction( ) {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $user->setHide(false);
        $em->persist($user);
        $em->flush();

        return $this->redirect( $this->generateUrl('edit_user_profile_edit') );
    }
}
