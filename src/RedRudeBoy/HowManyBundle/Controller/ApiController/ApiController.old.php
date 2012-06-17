<?php

namespace RedRudeBoy\HowManyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\View\View;

//For redirect the routes
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

class ApiController extends Controller {
	
	/**
	 * * /users/{userId}
	 * 
	 * @param string $userId
	 * @return Response
	 */
	public function UserController($userId) {
		//Call UserRestCOntroller
	/*With forward?
	 * 
	 * @param string $controller The controller name (a string like BlogBundle:Post:index)
     * @param array  $path       An array of path parameters
     * @param array  $query      An array of query parameters
     *
     * @return Response A Response instance
     */
    //public function forward($controller, array $path = array(), array $query = array())
//		return $this->forward('RedRudeBoyHowManyBundle:UserRestController', $path, $query);
		
	/**
	 * With collection
	 */
		$collection = new RouteCollection();
		$loader
		$collection->addCollection($loader->import("RedRudeBoyHowManyBundle/Controller/config/routing.php"));

		return $collection;
	}
	
	/**
	 * * /calendar/{calId}
	 * 
	 * @param string $userId
	 * @return Response
	 */
	public function CalendarController($calId) {
		//Call UserRestCOntroller
		return $this->;
	}
	
}