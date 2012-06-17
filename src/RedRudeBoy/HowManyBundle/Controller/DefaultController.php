<?php

namespace RedRudeBoy\HowManyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
//Sure?
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
		return $this->render('RedRudeBoyHowManyBundle::mobilePages.html.twig');
//		return $this->render('RedRudeBoyHowManyBundle:Security:hello.html.twig');
//		return $this->render('RedRudeBoyHowManyBundle:Default:index.html.twig');
    }
	
	public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }


		return $this->render('RedRudeBoyHowManyBundle:Login:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
		
		//Maybe
//		return array(
//			'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
//			'error'         => $error,
//		);
//		return $this->render('AcmeSecurityBundle:Security:login.html.twig', array(
    }
	

}
