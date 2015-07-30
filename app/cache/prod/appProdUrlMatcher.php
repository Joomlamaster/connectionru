<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_index');
                }

                return array (  '_controller' => 'Connection\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_index',);
            }

            // admin_contact_us
            if ($pathinfo === '/admin/contact-us') {
                return array (  '_controller' => 'Connection\\AdminBundle\\Controller\\DefaultController::contactAction',  '_route' => 'admin_contact_us',);
            }

            if (0 === strpos($pathinfo, '/admin/event')) {
                // admin_event_index
                if ($pathinfo === '/admin/events') {
                    return array (  '_controller' => 'Connection\\AdminBundle\\Controller\\EventController::indexAction',  '_route' => 'admin_event_index',);
                }

                // admin_event_delete
                if (0 === strpos($pathinfo, '/admin/event/delete') && preg_match('#^/admin/event/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_delete')), array (  '_controller' => 'Connection\\AdminBundle\\Controller\\EventController::deleteAction',));
                }

                if (0 === strpos($pathinfo, '/admin/event/comment')) {
                    // admin_event_comments_view
                    if (0 === strpos($pathinfo, '/admin/event/comments') && preg_match('#^/admin/event/comments/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_comments_view')), array (  '_controller' => 'Connection\\AdminBundle\\Controller\\EventController::commentsViewAction',));
                    }

                    // admin_event_comment_delete
                    if (0 === strpos($pathinfo, '/admin/event/comment/delete') && preg_match('#^/admin/event/comment/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_comment_delete')), array (  '_controller' => 'Connection\\AdminBundle\\Controller\\EventController::deleteCommentAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/settings/background')) {
                // admin_settings_background
                if ($pathinfo === '/admin/settings/background') {
                    return array (  '_controller' => 'Connection\\AdminBundle\\Controller\\SettingsController::backgroundAction',  '_route' => 'admin_settings_background',);
                }

                // admin_settings_background_set
                if (0 === strpos($pathinfo, '/admin/settings/background/set') && preg_match('#^/admin/settings/background/set/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_settings_background_set')), array (  '_controller' => 'Connection\\AdminBundle\\Controller\\SettingsController::backgroundSetAction',));
                }

                // admin_settings_background_delete
                if (0 === strpos($pathinfo, '/admin/settings/background/delete') && preg_match('#^/admin/settings/background/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_settings_background_delete')), array (  '_controller' => 'Connection\\AdminBundle\\Controller\\SettingsController::backgroundDeleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user_index
                if ($pathinfo === '/admin/users') {
                    return array (  '_controller' => 'Connection\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user_index',);
                }

                // admin_user_ban
                if (0 === strpos($pathinfo, '/admin/user/ban') && preg_match('#^/admin/user/ban/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_ban')), array (  '_controller' => 'Connection\\AdminBundle\\Controller\\UserController::banAction',));
                }

                // admin_user_unban
                if (0 === strpos($pathinfo, '/admin/user/unban') && preg_match('#^/admin/user/unban/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_unban')), array (  '_controller' => 'Connection\\AdminBundle\\Controller\\UserController::unBanAction',));
                }

                // admin_user_delete
                if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'Connection\\AdminBundle\\Controller\\UserController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/message')) {
            // message_inbox
            if (rtrim($pathinfo, '/') === '/message') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'message_inbox');
                }

                return array (  '_controller' => 'Connection\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'message_inbox',);
            }

            // message_sent
            if ($pathinfo === '/message/sent') {
                return array (  '_controller' => 'Connection\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'message_sent',);
            }

            // message_deleted
            if ($pathinfo === '/message/deleted') {
                return array (  '_controller' => 'Connection\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'message_deleted',);
            }

            // message_view
            if (preg_match('#^/message/(?P<threadId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_view')), array (  '_controller' => 'Connection\\MessageBundle\\Controller\\MessageController::threadAction',));
            }

            // message_new
            if (0 === strpos($pathinfo, '/message/new') && preg_match('#^/message/new/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_new')), array (  '_controller' => 'Connection\\MessageBundle\\Controller\\MessageController::newThreadUserAction',));
            }

            // ajax_message_new
            if (0 === strpos($pathinfo, '/message/ajax/new') && preg_match('#^/message/ajax/new/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_message_new')), array (  '_controller' => 'Connection\\MessageBundle\\Controller\\MessageController::newThreadUserAjaxAction',));
            }

        }

        // connection_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'connection_homepage');
            }

            return array (  '_controller' => 'Connection\\WebBundle\\Controller\\FrontendController::indexAction',  '_route' => 'connection_homepage',);
        }

        // connection_about
        if ($pathinfo === '/about-us') {
            return array (  '_controller' => 'Connection\\WebBundle\\Controller\\FrontendController::aboutAction',  '_route' => 'connection_about',);
        }

        // connection_privacy
        if ($pathinfo === '/privacy') {
            return array (  '_controller' => 'Connection\\WebBundle\\Controller\\FrontendController::privacyAction',  '_route' => 'connection_privacy',);
        }

        // connection_contact
        if ($pathinfo === '/contact-us') {
            return array (  '_controller' => 'Connection\\WebBundle\\Controller\\FrontendController::contactAction',  '_route' => 'connection_contact',);
        }

        // connection_tell_a_friend
        if ($pathinfo === '/tell-a-friend') {
            return array (  'link' => false,  '_controller' => 'Connection\\WebBundle\\Controller\\FrontendController::tellAFriendEndPointAction',  '_route' => 'connection_tell_a_friend',);
        }

        if (0 === strpos($pathinfo, '/event')) {
            if (0 === strpos($pathinfo, '/event/c')) {
                if (0 === strpos($pathinfo, '/event/category')) {
                    // event_category
                    if (rtrim($pathinfo, '/') === '/event/category') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_event_category;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'event_category');
                        }

                        return array (  '_controller' => 'Connection\\EventBundle\\Controller\\CategoryController::indexAction',  '_route' => 'event_category',);
                    }
                    not_event_category:

                    // event_category_create
                    if ($pathinfo === '/event/category/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_event_category_create;
                        }

                        return array (  '_controller' => 'Connection\\EventBundle\\Controller\\CategoryController::createAction',  '_route' => 'event_category_create',);
                    }
                    not_event_category_create:

                    // event_category_new
                    if ($pathinfo === '/event/category/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_event_category_new;
                        }

                        return array (  '_controller' => 'Connection\\EventBundle\\Controller\\CategoryController::newAction',  '_route' => 'event_category_new',);
                    }
                    not_event_category_new:

                    // event_category_show
                    if (preg_match('#^/event/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_event_category_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_category_show')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\CategoryController::showAction',));
                    }
                    not_event_category_show:

                    // event_category_edit
                    if (preg_match('#^/event/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_event_category_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_category_edit')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\CategoryController::editAction',));
                    }
                    not_event_category_edit:

                    // event_category_update
                    if (preg_match('#^/event/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_event_category_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_category_update')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\CategoryController::updateAction',));
                    }
                    not_event_category_update:

                    // event_category_delete
                    if (preg_match('#^/event/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_event_category_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_category_delete')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\CategoryController::deleteAction',));
                    }
                    not_event_category_delete:

                }

                // add_event_comment
                if ($pathinfo === '/event/comment/add') {
                    return array (  '_controller' => 'Connection\\EventBundle\\Controller\\CommentController::viewAction',  '_route' => 'add_event_comment',);
                }

            }

            // view_event
            if (preg_match('#^/event/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_event')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::viewAction',));
            }

            // view_upcoming_events
            if (0 === strpos($pathinfo, '/event/upcoming') && preg_match('#^/event/upcoming/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_upcoming_events')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::viewUpcomingAction',));
            }

            // event_manage
            if (0 === strpos($pathinfo, '/event/manage') && preg_match('#^/event/manage(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_manage')), array (  'id' => NULL,  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::manageAction',));
            }

            // event_subscribe
            if (0 === strpos($pathinfo, '/event/subscribe') && preg_match('#^/event/subscribe/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_subscribe')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::subscribeAction',));
            }

            // event_unsubscribe
            if (0 === strpos($pathinfo, '/event/unsubscribe') && preg_match('#^/event/unsubscribe/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_unsubscribe')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::unSubscribeAction',));
            }

            // event_interested
            if (0 === strpos($pathinfo, '/event/interested') && preg_match('#^/event/interested/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_interested')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::interestedAction',));
            }

            // event_not_interested
            if (0 === strpos($pathinfo, '/event/not-interested') && preg_match('#^/event/not\\-interested/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_not_interested')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::notInterestedAction',));
            }

            if (0 === strpos($pathinfo, '/event/ajax-')) {
                // event_ajax_going
                if (0 === strpos($pathinfo, '/event/ajax-going') && preg_match('#^/event/ajax\\-going/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_ajax_going')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::goingAjaxAction',));
                }

                // event_ajax_interested
                if (0 === strpos($pathinfo, '/event/ajax-interested') && preg_match('#^/event/ajax\\-interested/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_ajax_interested')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::interestedAjaxAction',));
                }

            }

            // remove_profile_event
            if (0 === strpos($pathinfo, '/event/remove') && preg_match('#^/event/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_profile_event')), array (  '_controller' => 'Connection\\EventBundle\\Controller\\EventController::removeAction',));
            }

            // event_search
            if (0 === strpos($pathinfo, '/event/search') && preg_match('#^/event/search(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_search')), array (  'page' => 1,  '_controller' => 'Connection\\EventBundle\\Controller\\SearchController::searchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // facebook_login
            if ($pathinfo === '/user/facebook/login') {
                return array (  '_controller' => 'Connection\\UserBundle\\Controller\\FacebookController::facebookLoginAction',  '_route' => 'facebook_login',);
            }

            if (0 === strpos($pathinfo, '/user/image')) {
                // profile_image
                if ($pathinfo === '/user/image/profile') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\ImageController::viewAction',  '_route' => 'profile_image',);
                }

                // jcrop_form
                if ($pathinfo === '/user/image/jcrop/from') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\ImageController::jcropFormAction',  '_route' => 'jcrop_form',);
                }

                // remove_profile_image
                if (preg_match('#^/user/image/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_profile_image')), array (  '_controller' => 'Connection\\UserBundle\\Controller\\ImageController::removeAction',));
                }

                // update_profile_image
                if ($pathinfo === '/user/image/profile/update-image') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\ImageController::updateProfileImageAction',  '_route' => 'update_profile_image',);
                }

            }

            // user_message_hi
            if (0 === strpos($pathinfo, '/user/message/hi') && preg_match('#^/user/message/hi/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_message_hi')), array (  '_controller' => 'Connection\\UserBundle\\Controller\\MessageController::removeFavoriteUserAction',));
            }

            if (0 === strpos($pathinfo, '/user/profile')) {
                // view_profile
                if (preg_match('#^/user/profile/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_profile')), array (  '_controller' => 'Connection\\UserBundle\\Controller\\ProfileController::viewAction',));
                }

                // edit_user_profile
                if (rtrim($pathinfo, '/') === '/user/profile') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'edit_user_profile');
                    }

                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'edit_user_profile',);
                }

                // edit_user_profile_edit
                if ($pathinfo === '/user/profile/edit') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'edit_user_profile_edit',);
                }

                // link_profile
                if ($pathinfo === '/user/profile/link-profile') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\ProfileController::linkProfileAction',  '_route' => 'link_profile',);
                }

            }

            // fos_user_extended_register
            if ($pathinfo === '/user/extended-register') {
                return array (  '_controller' => 'Connection\\UserBundle\\Controller\\RegistrationController::registerExtendedAction',  '_route' => 'fos_user_extended_register',);
            }

            // fos_user_quick_register
            if ($pathinfo === '/user/quick-register') {
                return array (  '_controller' => 'Connection\\UserBundle\\Controller\\RegistrationController::registerQuickAction',  '_route' => 'fos_user_quick_register',);
            }

            if (0 === strpos($pathinfo, '/user/search')) {
                // user_search_quick_form
                if ($pathinfo === '/user/search/quick-form') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\SearchController::quickAction',  '_route' => 'user_search_quick_form',);
                }

                // user_search
                if (preg_match('#^/user/search(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_search')), array (  'page' => 1,  '_controller' => 'Connection\\UserBundle\\Controller\\SearchController::searchResultAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user/twitter')) {
                // twitter_login
                if ($pathinfo === '/user/twitter/login') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\TwitterController::twitterLoginAction',  '_route' => 'twitter_login',);
                }

                // twitter_add_email
                if ($pathinfo === '/user/twitter/add-email') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\TwitterController::addEmailAction',  '_route' => 'twitter_add_email',);
                }

            }

            if (0 === strpos($pathinfo, '/user/favorite')) {
                // favorite_user_add
                if (0 === strpos($pathinfo, '/user/favorite/add') && preg_match('#^/user/favorite/add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'favorite_user_add')), array (  '_controller' => 'Connection\\UserBundle\\Controller\\UserController::addFavoriteUserAction',));
                }

                if (0 === strpos($pathinfo, '/user/favorite/remove')) {
                    // favorite_user_remove
                    if (preg_match('#^/user/favorite/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'favorite_user_remove')), array (  '_controller' => 'Connection\\UserBundle\\Controller\\UserController::removeFavoriteUserAction',));
                    }

                    // profile_favorite_user_remove
                    if (0 === strpos($pathinfo, '/user/favorite/remove2') && preg_match('#^/user/favorite/remove2/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_favorite_user_remove')), array (  '_controller' => 'Connection\\UserBundle\\Controller\\UserController::removeProfileFavoriteUserAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/user/visibility')) {
                // profile_visibility_hide
                if ($pathinfo === '/user/visibility/hide') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\UserController::hideAction',  '_route' => 'profile_visibility_hide',);
                }

                // profile_visibility_show
                if ($pathinfo === '/user/visibility/show') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\UserController::showAction',  '_route' => 'profile_visibility_show',);
                }

            }

            // user_delete
            if ($pathinfo === '/user/delete') {
                return array (  '_controller' => 'Connection\\UserBundle\\Controller\\UserController::deleteAction',  '_route' => 'user_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Connection\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Connection\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'Connection\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Connection\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Connection\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Connection\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Connection\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/_uploader')) {
            // _uploader_upload_user
            if ($pathinfo === '/_uploader/user/upload') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__uploader_upload_user;
                }

                return array (  '_controller' => 'oneup_uploader.controller.user:upload',  '_format' => 'json',  '_route' => '_uploader_upload_user',);
            }
            not__uploader_upload_user:

            // _uploader_upload_event
            if ($pathinfo === '/_uploader/event/upload') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__uploader_upload_event;
                }

                return array (  '_controller' => 'oneup_uploader.controller.event:upload',  '_format' => 'json',  '_route' => '_uploader_upload_event',);
            }
            not__uploader_upload_event:

            // _uploader_upload_admin
            if ($pathinfo === '/_uploader/admin/upload') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__uploader_upload_admin;
                }

                return array (  '_controller' => 'oneup_uploader.controller.admin:upload',  '_format' => 'json',  '_route' => '_uploader_upload_admin',);
            }
            not__uploader_upload_admin:

        }

        if (0 === strpos($pathinfo, '/message')) {
            // fos_message_inbox
            if (rtrim($pathinfo, '/') === '/message') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_message_inbox');
                }

                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
            }

            // fos_message_sent
            if ($pathinfo === '/message/sent') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
            }

            // fos_message_deleted
            if ($pathinfo === '/message/deleted') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
            }

            // fos_message_search
            if ($pathinfo === '/message/search') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
            }

            // fos_message_thread_new
            if ($pathinfo === '/message/new') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
            }

            // fos_message_thread_delete
            if (preg_match('#^/message/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fos_message_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_delete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',));
            }
            not_fos_message_thread_delete:

            // fos_message_thread_undelete
            if (preg_match('#^/message/(?P<threadId>[^/]++)/undelete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_message_thread_undelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_undelete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',));
            }
            not_fos_message_thread_undelete:

            // fos_message_thread_view
            if (preg_match('#^/message/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_view')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',));
            }

        }

        // gregwar_captcha.generate_captcha
        if (0 === strpos($pathinfo, '/generate-captcha') && preg_match('#^/generate\\-captcha/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gregwar_captcha.generate_captcha')), array (  '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
