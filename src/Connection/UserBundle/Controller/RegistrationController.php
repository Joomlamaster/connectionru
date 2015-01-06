<?php

namespace Connection\UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Connection\UserBundle\Entity\User;

class RegistrationController extends BaseController
{

    public function registerAction(Request $request)
    {
        //if authenticated redirect to homepage
        if ($request->isMethod('GET')) {
            $authenticated = $this->_isUserAuthenticated($request);
            if ($authenticated) {
                $url = $this->container->get('router')->generate('connection_homepage');
                return new RedirectResponse($url);
            }
        }
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm();
        $form->setData($user);

        if ('POST' === $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('edit_user_profile');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }
        }

        $registrationType = $form->get('registrationType')->getData();
        if (empty($registrationType) || $registrationType == 'quick') {
            return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.twig', array(
                        'form' => $form->createView(),
            ));
        } else {
            return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:extended_register.html.twig', array(
                        'form' => $form->createView(),
            ));
        }
    }

    /**
     * @Route("/extended-register", name="fos_user_extended_register")
     */
    public function registerExtendedAction(Request $request)
    {
        //if authenticated redirect to homepage
        if ($request->isMethod('GET')) {
            $authenticated = $this->_isUserAuthenticated($request);
            if ($authenticated) {
                $url = $this->container->get('router')->generate('connection_homepage');
                return new RedirectResponse($url);
            }
        }
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        $form = $formFactory->createForm();
        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:extended_register.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/quick-register", name="fos_user_quick_register")
     */
    public function registerQuickAction()
    {
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        $ethnicityId = $this->container->getParameter('quick_registration_ethnicity_id');
        $em = $this->container->get('doctrine')->getManager();
        $ethnicity = $em->getRepository('ConnectionUserBundle:Profile\Ethnicity')->findOneById($ethnicityId);
        $form = $formFactory->createForm();

        if($ethnicity){
            $form->get('profile')->get('ethnicity')->setData($ethnicity);
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:quick_register.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Receive the confirmation token from user email provider, login the user
     */
    public function confirmAction(Request $request, $token)
    {
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');

        $user = $userManager->findUserByConfirmationToken($token);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token "%s" does not exist', $token));
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $user->setConfirmationToken(null);
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, $event);

        $userManager->updateUser($user);

        if (null === $response = $event->getResponse()) {
            $url = $this->container->get('router')->generate('edit_user_profile_edit');
            $request->getSession()->getFlashBag()->add(
                'notice',
                'Registration Complete, Please fill out your profile information.'
            );
            $response = new RedirectResponse($url);
        }

        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRMED, new FilterUserResponseEvent($user, $request, $response));

        return $response;
    }

    function _isUserAuthenticated(Request $request){

        /* @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user instanceof User){
            return true;
        }

        return false;
    }

}
