<?php

namespace RedRudeBoy\HowManyBundle\Controller\ApiController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\View\View;

/**
 * @see
 * 	wikipedia
 * 		http://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol#Request_methods
 */
class UserRestController extends Controller {
	
	// "get_users"    [GET] /users
	public function getUsersAction() {
		
	}



	public function newUsersAction() {
		
	}

// "new_users"    [GET] /users/new

	public function postUsersAction() {
		
	}

// "post_users"   [POST] /users

	public function patchUsersAction() {
		
	}

// "patch_users"   [PATCH] /users

	public function getUserAction($slug) {
		
	}

// "get_user"     [GET] /users/{slug}

	public function editUserAction($slug) {
		
	}

// "edit_user"    [GET] /users/{slug}/edit

	public function putUserAction($slug) {
		
	}

// "put_user"     [PUT] /users/{slug}

	public function patchUserAction($slug) {
		
	}

// "patch_user"   [PATCH] /users/{slug}

	public function lockUserAction($slug) {
		
	}

// "lock_user"    [PATCH] /users/{slug}/lock

	public function banUserAction($slug, $id) {
		
	}

// "ban_user"     [PATCH] /users/{slug}/ban

	public function removeUserAction($slug) {
		
	}

// "remove_user"  [GET] /users/{slug}/remove

	public function deleteUserAction($slug) {
		
	}

// "delete_user"  [DELETE] /users/{slug}

	/**
	 * HEAD /users/{userId}
	 * 
	 * @tutorial wikipedia
	 * 	Asks for the response identical to the one that would correspond to a GET request,
	 * 	but without the response body.
	 * 
	 * 	This is useful for retrieving meta-information written in response headers,
	 * 	without having to transport the entire content.
	 * 
	 * 
	 * @param string $userId
	 * @return Response
	 */
	public function headUserAction($userid) {
		$user = $this->get('security.context')->getToken()->getUser();

		if ($userId == $user->getId()) {
			
		}

		$view = View::create()
				->setStatusCode(200);
//				->setData($user);

		return $this->get('fos_rest.view_handler')->handle($view);
	}

	/**
	 * GET /users/{userId}
	 * 
	 * @tutorial wikipedia
	 * 	Requests a representation of the specified resource. Requests using GET should only retrieve data and should have no other effect. (This is also true of some other HTTP methods.)[1] The W3C has published guidance principles on this distinction, saying, "Web application design should be informed by the above principles, but also by the relevant limitations."[10] See safe methods below.
	 * 
	 * 
	 * @param string $userId
	 * @return Response
	 */
	public function getUserAction($userId) {
		$user = $this->get('security.context')->getToken()->getUser();

		if ($userId == $user->getId()) {
			
		}

		$view = View::create()
				->setStatusCode(200)
				->setData($user);

		return $this->get('fos_rest.view_handler')->handle($view);
	}

	/**
	 * POST /users/{userId}
	 * 
	 * @tutorial wikipedia
	 * 	Submits data to be processed (e.g., from an HTML form) to the identified resource. The data is included in the body of the request. This may result in the creation of a new resource or the updates of existing resources or both.
	 * 
	 * 
	 * @param string $userId
	 * @return Response
	 */
	public function postUserAction($userid) {
		$user = $this->get('security.context')->getToken()->getUser();

		if ($userId == $user->getId()) {
			
		}

		$view = View::create()
				->setStatusCode(200);
//				->setData($user);

		return $this->get('fos_rest.view_handler')->handle($view);
	}

	/**
	 * PUT /users/{userId}
	 * @tutorial wikipedia
	 * 	Uploads a representation of the specified resource.
	 * 
	 * @param string $userId
	 * @return Response
	 */
	/**
	 * POST /users/{userId}
	 * 
	 * @tutorial wikipedia
	 * 	Submits data to be processed (e.g., from an HTML form) to the identified resource. The data is included in the body of the request. This may result in the creation of a new resource or the updates of existing resources or both.
	 * 
	 * 
	 * @param string $userId
	 * @return Response
	 */
	/**
	 * DELETE /users/{userId}
	 * 
	 * @tutorial wikipedia
	 * 	Deletes the specified resource.
	 * 
	 * 
	 * @param string $userId
	 * @return Response
	 */
	/**
	 * TRACE /users/{userId}
	 * 
	 * @tutorial wikipedia
	 * 	Echoes back the received request, so that a client can see what (if any) changes or additions have been made by intermediate servers.
	 * 
	 * 
	 * @param string $userId
	 * @return Response
	 */
	/**
	 * OPTIONS /users/{userId}
	 * 
	 * @tutorial wikipedia
	 * Returns the HTTP methods that the server supports for specified URL. This can be used to check the functionality of a web server by requesting '*' instead of a specific resource.
	 * 
	 * 
	 * @param string $userId
	 * @return Response
	 */
	/**
	 * CONNECT /users/{userId}
	 * 	@tutorial wikipedia
	 * 		Converts the request connection to a transparent TCP/IP tunnel, usually to facilitate SSL-encrypted communication (HTTPS) through an unencrypted HTTP proxy.[11]
	 * 
	 * 
	 * @param string $userId
	 * @return Response
	 */
	/**
	 * PATCH /users/{userId}
	 * 
	 * @tutorial wikipedia
	 * 	Is used to apply partial modifications to a resource.
	 * 
	 * 
	 * @param string $userId
	 * @return Response
	 */
}