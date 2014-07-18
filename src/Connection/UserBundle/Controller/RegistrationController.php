<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Connection\UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Connection\CoreBundle\Util\Location;
use FOS\UserBundle\Controller\RegistrationController as BaseController;



/**
 * Controller managing the registration
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class RegistrationController extends BaseController
{
    /**
     * Tell the user to check his email provider
     */
    public function checkEmailAction()
    {
        $email = $this->container->get('session')->get('fos_user_send_confirmation_email/email');
        $this->container->get('session')->remove('fos_user_send_confirmation_email/email');
        $user = $this->container->get('fos_user.user_manager')->findUserByEmail($email);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with email "%s" does not exist', $email));
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:checkEmail.html.'.$this->getEngine(), array(
            'user' => $user,
        ));
    }

    public function locationAjaxCallAction(Request $request){
        $location = $request->get('country');
        if(isset($location)){
            $childType = Location::$typeRegion;
        } else {
            $location = $request->get('region');
            $childType = Location::$typeCity;
        }
        if(!isset($location)){
            return new JsonResponse();
        }
        $em = $this->container->get('doctrine')->getManager();
        /* @var $countryRepo \Connection\CoreBundle\Repository\CountryRepository */
        $countryRepo = $em->getRepository('Connection\CoreBundle\Entity\Country');
        $countryEntity = $countryRepo->find($location);
        $children = $countryRepo->getLocationChildren($countryEntity, $childType);
        return new JsonResponse($children);
    }

}
