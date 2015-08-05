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
	 * @return string
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function getRedirectUrl(){
		return $this->©url->to_wp_site_uri($this->redirect_uri);
	}


	/**
	 * @return string
	 * @throws \xd_v141226_dev\exception
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function getAuthorizationUrl() {
		$query     = http_build_query( array(
			'client_id'     => $this->©option->get( 'client_id' ),
			'redirect_uri'  => $this->getRedirectUrl(),
			'response_type' => 'code',
			'scope'         => 'easy',
		) );
		return $this->©request->baseUrl . $this->©request->authorizationUri . '?' . $query;
	}
}