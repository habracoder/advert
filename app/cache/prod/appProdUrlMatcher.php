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

        if (0 === strpos($pathinfo, '/advert')) {
            // advert
            if (0 === strpos($pathinfo, '/advert/list') && preg_match('#^/advert/list(?:/(?P<alias>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_advert;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'advert')), array (  'alias' => NULL,  '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::indexAction',));
            }
            not_advert:

            // advert_create
            if (rtrim($pathinfo, '/') === '/advert') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_advert_create;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'advert_create');
                }

                return array (  '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::createAction',  '_route' => 'advert_create',);
            }
            not_advert_create:

            // advert_show
            if (0 === strpos($pathinfo, '/advert/show') && preg_match('#^/advert/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_advert_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'advert_show')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::showAction',));
            }
            not_advert_show:

            // advert_edit
            if (preg_match('#^/advert/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_advert_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'advert_edit')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::editAction',));
            }
            not_advert_edit:

            // advert_update
            if (preg_match('#^/advert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_advert_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'advert_update')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::updateAction',));
            }
            not_advert_update:

            // advert_delete
            if (preg_match('#^/advert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_advert_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'advert_delete')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::deleteAction',));
            }
            not_advert_delete:

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category
            if (rtrim($pathinfo, '/') === '/category') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category');
                }

                return array (  '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::listAction',  '_route' => 'category',);
            }
            not_category:

            // category_create
            if ($pathinfo === '/category/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_category_create;
                }

                return array (  '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
            }
            not_category_create:

            // category_new
            if ($pathinfo === '/category/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_new;
                }

                return array (  '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }
            not_category_new:

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::showAction',));
            }
            not_category_show:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::editAction',));
            }
            not_category_edit:

            // category_update
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_category_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::updateAction',));
            }
            not_category_update:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        // toggle_bookmark
        if ($pathinfo === '/advert/toggle_bookmark') {
            return array (  '_controller' => 'App\\AdvertBundle\\Controller\\ComponentController::toggleBookmarkAction',  '_route' => 'toggle_bookmark',);
        }

        if (0 === strpos($pathinfo, '/inside/category')) {
            // inside.category
            if (rtrim($pathinfo, '/') === '/inside/category') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_insidecategory;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'inside.category');
                }

                return array (  '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::indexAction',  '_route' => 'inside.category',);
            }
            not_insidecategory:

            // inside.category.create
            if ($pathinfo === '/inside/category/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_insidecategorycreate;
                }

                return array (  '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::createAction',  '_route' => 'inside.category.create',);
            }
            not_insidecategorycreate:

            // inside.category.new
            if ($pathinfo === '/inside/category/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_insidecategorynew;
                }

                return array (  '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::newAction',  '_route' => 'inside.category.new',);
            }
            not_insidecategorynew:

            // inside.category.show
            if (preg_match('#^/inside/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_insidecategoryshow;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inside.category.show')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::showAction',));
            }
            not_insidecategoryshow:

            // inside.category.edit
            if (preg_match('#^/inside/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_insidecategoryedit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inside.category.edit')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::editAction',));
            }
            not_insidecategoryedit:

            // inside.category.update
            if (preg_match('#^/inside/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_insidecategoryupdate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inside.category.update')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::updateAction',));
            }
            not_insidecategoryupdate:

            // inside.category.delete
            if (preg_match('#^/inside/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_insidecategorydelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inside.category.delete')), array (  '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::deleteAction',));
            }
            not_insidecategorydelete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'App\\PageBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
        }

        // inside.dashboard
        if (rtrim($pathinfo, '/') === '/inside') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'inside.dashboard');
            }

            return array (  '_controller' => 'App\\PageBundle\\Controller\\Inside\\DashboardController::dashboardAction',  '_route' => 'inside.dashboard',);
        }

        if (0 === strpos($pathinfo, '/advert')) {
            // advert_component_bookmarks
            if ($pathinfo === '/advert/bookmarks') {
                return array (  '_controller' => 'App\\UserBundle\\Controller\\ComponentController::bookmarksAdvertsAction',  '_route' => 'advert_component_bookmarks',);
            }

            // advert_component_filters
            if ($pathinfo === '/advert/filters') {
                return array (  '_controller' => 'App\\UserBundle\\Controller\\ComponentController::viewedAdvertsAction',  '_route' => 'advert_component_filters',);
            }

        }

        // profile.show
        if (0 === strpos($pathinfo, '/pk') && preg_match('#^/pk(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_profileshow;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile.show')), array (  '_controller' => 'App\\UserBundle\\Controller\\ProfileController::showAction',));
        }
        not_profileshow:

        // profile.edit
        if ($pathinfo === '/settings') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'PUT', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'PUT', 'HEAD'));
                goto not_profileedit;
            }

            return array (  '_controller' => 'App\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'profile.edit',);
        }
        not_profileedit:

        // profile_upload_image
        if ($pathinfo === '/profile_upload_image') {
            return array (  '_controller' => 'App\\UserBundle\\Controller\\ProfileController::uploadImageAction',  '_route' => 'profile_upload_image',);
        }

        // security_register
        if ($pathinfo === '/registration') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_security_register;
            }

            return array (  '_controller' => 'App\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'security_register',);
        }
        not_security_register:

        if (0 === strpos($pathinfo, '/login')) {
            // security_login
            if ($pathinfo === '/login') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_security_login;
                }

                return array (  '_controller' => 'App\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
            }
            not_security_login:

            // security_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'App\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'security_check',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // sample_sitemaps_sitemap
            if (0 === strpos($pathinfo, '/assets/js/translations') && preg_match('#^/assets/js/translations\\.(?P<_format>js)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sample_sitemaps_sitemap')), array (  '_controller' => 'App\\CoreBundle\\Controller\\ComponentController::searchPanelAction',));
            }

            // widget_autocomplete_panel
            if ($pathinfo === '/autocompetePanel') {
                return array (  '_controller' => 'App\\CoreBundle\\Controller\\WidgetController::searchPanelAction',  '_route' => 'widget_autocomplete_panel',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // widget_login_modal
                if ($pathinfo === '/loginModal') {
                    return array (  '_controller' => 'App\\CoreBundle\\Controller\\WidgetController::loginModalAction',  '_route' => 'widget_login_modal',);
                }

                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        // bazinga_jstranslation_js
        if (0 === strpos($pathinfo, '/translations') && preg_match('#^/translations(?:/(?P<domain>[\\w]+)(?:\\.(?P<_format>js|json))?)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_bazinga_jstranslation_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bazinga_jstranslation_js')), array (  '_controller' => 'bazinga.jstranslation.controller:getTranslationsAction',  'domain' => 'messages',  '_format' => 'js',));
        }
        not_bazinga_jstranslation_js:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
