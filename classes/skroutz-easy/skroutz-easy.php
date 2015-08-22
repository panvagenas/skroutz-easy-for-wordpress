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
			if($userInfo && isset($userInfo->email)){
				$user = $this->©user(null, 'email', $userInfo->email);

				if(!$user->has_id()) {
					// new user
					$password = wp_generate_password();

					$user_id = wp_create_user( $userInfo->email, $password, $userInfo->email );

					$updateUserParams = array(
						'ID'          =>    $user_id,
						'nickname'    =>    $userInfo->email,
					);

					if(isset($userInfo->first_name, $userInfo->last_name)){
						$updateUserParams['display_name'] = $userInfo->first_name . ' ' . $userInfo->last_name;
						$updateUserParams['first_name'] = $userInfo->first_name;
						$updateUserParams['last_name'] = $userInfo->last_name;
					}

					wp_update_user($updateUserParams);

					// Set the role
					$user = $this->©user( $user_id );
					$user->wp->set_role( 'customer' );

					// TODO Email the user (username and pass)
				}

				$user->updateCustomerMeta($this->©array->ify_deep($userInfo));

				// login user
				wp_set_current_user( $user->ID, $user->wp->user_login );
				wp_set_auth_cookie( $user->ID );
				do_action( 'wp_login', $user->wp->user_login );
			} else {
				// fail to get address
				// TODO do some error reporting before redirection ???
			}
		}

		// need to redirect now
		// FIXME not properly redirect if $to is wp-login
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