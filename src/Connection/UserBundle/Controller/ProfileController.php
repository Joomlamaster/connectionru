<?php

namespace Connection\UserBundle\Controller;

use Symfony\Component\Form\FormError;
use Connection\UserBundle\Entity\Profile;
use Symfony\Component\HttpFoundation\Request;
use Connection\UserBundle\Form\Type\EditProfileType;
use Connection\UserBundle\Form\Type\LinkAccountType;
use Connection\UserBundle\Form\Type\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


/**
 * @Route("/profile")
 */
class ProfileController extends Controller
{

    /**
     * @Route("/{id}", name="view_profile", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Profile", class="ConnectionUserBundle:Profile")
     */
    public function viewAction( Profile $profile )
    {
        $user = $profile->getUser();
        if($this->getUser() == $user){
            return new RedirectResponse($this->get('router')->generate('edit_user_profile'));
        }
        $userPhotos = $this->getDoctrine()->getRepository('ConnectionUserBundle:Profile\Image')->getGroupedByGalleryImages($user->getId());
        return array(
            'user'       => $user,
            'userPhotos' => $userPhotos,
            'events'     => $user->getEvents()
        );
    }

    /**
     * @Route("/", name="edit_user_profile")
     * @Template()
     */
    public function editAction( Request $request )
    {
        if ( !$user = $this->getUser() ) {
            return $this->redirect( $this->generateUrl('connection_homepage') );
        }
        $ivyLeagueAfirmativeId = $this->container->getParameter('ivy_league_afirmative_id');
        $form = $this->createForm( new EditProfileType(), $user);

        $ivyLeagueEducationId = $form->get('profile')->get('educationIvyLeague')->getData()->getId();
        if($ivyLeagueEducationId)

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();

            $this->container->get('session')->getFlashBag()->add('notice', 'Your profile information was successfully updated.');
            return $this->redirect( $this->generateUrl('edit_user_profile') );
        }

        $userPhotos = $this->getDoctrine()->getRepository('ConnectionUserBundle:Profile\Image')->getGroupedByGalleryImages($user->getId());

        return array(
            'form'       => $form->createView(),
            'user'       => $user,
            'userPhotos' => $userPhotos,
            'favourites' => $user->getFavoriteUsers(),
            'events'     => $user->getEvents(),
            'ivyLeagueAfirmativeId' => $ivyLeagueAfirmativeId
        );
    }

    /**
     * @Route("/link-profile", name="link_profile")
     * @Template()
     */
    public function linkProfileAction( Request $request )
    {
        $session           = $request->getSession();
        $linkInfo          = $session->get('link_account');
        $em                = $this->getDoctrine()->getManager();
        $socialUserService = $this->get('connection_user.social.user');

        if ( empty($linkInfo) || empty($linkInfo['email']) || empty($linkInfo['profile']) ) {
            return $this->redirect( $this->generateUrl('connection_homepage') );
        }

        $user = $em->getRepository('ConnectionUserBundle:User')->findOneBy(array( 'email' => $linkInfo['email'] ));

        if (!$user) {
            return $this->redirect( $this->generateUrl('connection_homepage') );
        }

        $form = $this->createForm( new LinkAccountType() );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();
            $encodedPassword = $socialUserService->generatePassword($password, $user);

            if ( $user->getPassword() == $encodedPassword ) {
                $user->getProfile()->setSocialId($linkInfo['type'], $linkInfo['profile']['id']);
                $em->persist($user);
                $em->flush();

                $socialUserService->loginUser($user);
                $session->remove('link_account');
                return $this->redirect( $this->generateUrl('user_search') );
            }

            $form->get('password')->addError(new FormError('Invalid Password'));
        }

        return $this->render('ConnectionUserBundle:Profile:link_profile.html.twig', array(
            'user' => $user,
            'form' => $form->createView()
        ));
    }
}
