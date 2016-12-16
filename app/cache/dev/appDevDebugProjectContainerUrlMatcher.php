<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/address')) {
            // address_index
            if (rtrim($pathinfo, '/') === '/address') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_address_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'address_index');
                }

                return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\AddressController::indexAction',  '_route' => 'address_index',);
            }
            not_address_index:

            // address_new
            if ($pathinfo === '/address/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_address_new;
                }

                return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\AddressController::newAction',  '_route' => 'address_new',);
            }
            not_address_new:

            // address_show
            if (preg_match('#^/address/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_address_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'address_show')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\AddressController::showAction',));
            }
            not_address_show:

            // address_edit
            if (preg_match('#^/address/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_address_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'address_edit')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\AddressController::editAction',));
            }
            not_address_edit:

            // address_delete
            if (preg_match('#^/address/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_address_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'address_delete')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\AddressController::deleteAction',));
            }
            not_address_delete:

        }

        // address_book_addressbook_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'address_book_addressbook_default_index');
            }

            return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\DefaultController::indexAction',  '_route' => 'address_book_addressbook_default_index',);
        }

        if (0 === strpos($pathinfo, '/email')) {
            // email_index
            if (rtrim($pathinfo, '/') === '/email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_email_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'email_index');
                }

                return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\EmailController::indexAction',  '_route' => 'email_index',);
            }
            not_email_index:

            // email_new
            if ($pathinfo === '/email/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_email_new;
                }

                return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\EmailController::newAction',  '_route' => 'email_new',);
            }
            not_email_new:

            // email_show
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_email_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_show')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\EmailController::showAction',));
            }
            not_email_show:

            // email_edit
            if (preg_match('#^/email/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_email_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_edit')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\EmailController::editAction',));
            }
            not_email_edit:

            // email_delete
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_email_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_delete')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\EmailController::deleteAction',));
            }
            not_email_delete:

        }

        if (0 === strpos($pathinfo, '/groups')) {
            // groups_index
            if (rtrim($pathinfo, '/') === '/groups') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groups_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'groups_index');
                }

                return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\GroupsController::indexAction',  '_route' => 'groups_index',);
            }
            not_groups_index:

            // groups_new
            if ($pathinfo === '/groups/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_groups_new;
                }

                return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\GroupsController::newAction',  '_route' => 'groups_new',);
            }
            not_groups_new:

            // groups_show
            if (preg_match('#^/groups/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groups_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_show')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\GroupsController::showAction',));
            }
            not_groups_show:

            // groups_edit
            if (preg_match('#^/groups/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_groups_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_edit')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\GroupsController::editAction',));
            }
            not_groups_edit:

            // groups_delete
            if (preg_match('#^/groups/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_groups_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_delete')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\GroupsController::deleteAction',));
            }
            not_groups_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/person')) {
                // person_index
                if (rtrim($pathinfo, '/') === '/person') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_person_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'person_index');
                    }

                    return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PersonController::indexAction',  '_route' => 'person_index',);
                }
                not_person_index:

                // person_new
                if ($pathinfo === '/person/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_person_new;
                    }

                    return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PersonController::newAction',  '_route' => 'person_new',);
                }
                not_person_new:

                // person_show
                if (preg_match('#^/person/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_person_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_show')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PersonController::showAction',));
                }
                not_person_show:

                // person_edit
                if (preg_match('#^/person/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_person_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_edit')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PersonController::editAction',));
                }
                not_person_edit:

                // person_delete
                if (preg_match('#^/person/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_person_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_delete')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PersonController::deleteAction',));
                }
                not_person_delete:

            }

            if (0 === strpos($pathinfo, '/phone')) {
                // phone_index
                if (rtrim($pathinfo, '/') === '/phone') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phone_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'phone_index');
                    }

                    return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PhoneController::indexAction',  '_route' => 'phone_index',);
                }
                not_phone_index:

                // phone_new
                if ($pathinfo === '/phone/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_phone_new;
                    }

                    return array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PhoneController::newAction',  '_route' => 'phone_new',);
                }
                not_phone_new:

                // phone_show
                if (preg_match('#^/phone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phone_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phone_show')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PhoneController::showAction',));
                }
                not_phone_show:

                // phone_edit
                if (preg_match('#^/phone/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_phone_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phone_edit')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PhoneController::editAction',));
                }
                not_phone_edit:

                // phone_delete
                if (preg_match('#^/phone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_phone_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phone_delete')), array (  '_controller' => 'Address_Book\\AddressBookBundle\\Controller\\PhoneController::deleteAction',));
                }
                not_phone_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
