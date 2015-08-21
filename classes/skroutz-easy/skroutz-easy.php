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

	public function callback(){
		var_dump(1);die;
	}

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