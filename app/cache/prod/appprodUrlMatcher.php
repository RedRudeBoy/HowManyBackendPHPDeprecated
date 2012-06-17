<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // _login_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\DefaultController::securityCheckAction',  '_route' => '_login_check',);
        }

        // _logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\DefaultController::logoutAction',  '_route' => '_logout',);
        }

        // welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'welcome');
            }
            return array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\DefaultController::indexAction',  '_route' => 'welcome',);
        }

        // checkUpdates
        if (0 === strpos($pathinfo, '/checkUpdates') && preg_match('#^/checkUpdates/(?P<last_mod>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\AjaxController::checkUpdatesAction',)), array('_route' => 'checkUpdates'));
        }

        // sendData
        if ($pathinfo === '/sendData/*') {
            return array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\AjaxController::sendDataAction',  '_route' => 'sendData',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
