<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'login' => true,
       '_login_check' => true,
       '_logout' => true,
       'welcome' => true,
       'checkUpdates' => true,
       'sendData' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\DefaultController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function get_login_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\DefaultController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function get_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\DefaultController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getwelcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getcheckUpdatesRouteInfo()
    {
        return array(array (  0 => 'last_mod',), array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\AjaxController::checkUpdatesAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'last_mod',  ),  1 =>   array (    0 => 'text',    1 => '/checkUpdates',  ),));
    }

    private function getsendDataRouteInfo()
    {
        return array(array (), array (  '_controller' => 'RedRudeBoy\\HowManyBundle\\Controller\\AjaxController::sendDataAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sendData/*',  ),));
    }
}
