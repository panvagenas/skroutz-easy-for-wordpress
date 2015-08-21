<?php
/**
 * Project: skroutz-easy-for-wordpress
 * File: skroutz-easy.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 5/8/2015
 * Time: 12:51 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace skroutz_easy;

use xd_v141226_dev\users;

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class skroutz_easy
 * @package skroutz_easy
 */
class skroutz_easy extends framework{
	protected $redirect_uri;

	/**
	 * @param array|\xd_v141226_dev\framework $instance
	 *
	 * @throws \exception
	 * @throws \xd_v141226_dev\exception
	 */
	public function __construct( $instance ) {
		parent::__construct( $instance );
		$this->redirect_uri  = $this->©option->get( 'redirect_uri' );
	}

	/**
	 * Callback for skroutz easy flow
	 */
	public function callback(){
		$code = $this->©url->getCodeFromUrl();
		$to = $this->©url->getSourceUrl();
		if(empty($code)){
			// no code specified
			$error = $this->©url->getErrorFromUrl();
			if(!empty($error)){
				// TODO do some error reporting before redirection ???
			}
		} else {
			// we have a code
			$userInfo = $this->©request->getAddress($code);
			// TODO implement
			if($userInfo){
				// success
				$user = $this->©user(null, 'email', $userInfo->email);
				if($user->ID){
					// existing user
					wp_set_current_user( $user->ID, $user->user_login );
					wp_set_auth_cookie( $user->ID );
					do_action( 'wp_login', $user->user_login );
				} else {
					// new user
				}
			} else {
				// failure
				// TODO do some error reporting before redirection ???
			}
		}

		// need to redirect now
		if(!empty($to)){
			wp_safe_redirect($to);
		} else {
			wp_safe_redirect($this->©url->to_wp_home_uri());
		}
		die;
	}

	/**
	 * Displays login button
	 */
	public function loginForm(){
		echo $this->©views->view($this, 'login_form.php');
	}

	/**
	 * @return array|string
	 */
	public function getRedirectUri() {
		return $this->redirect_uri;
	}
}