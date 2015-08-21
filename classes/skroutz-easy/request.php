<?php
/**
 * Project: skroutz-easy-for-wordpress
 * File: request.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 5/8/2015
 * Time: 9:53 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace skroutz_easy;


class request extends framework {
	protected $client_id;
	protected $client_secret;
	protected $postData = null;

	protected $baseUrl = 'https://www.skroutz.gr/';
	protected $authorizationUri = 'oauth2/authorizations/new';
	protected $tokenUri = 'oauth2/token';
	protected $addressUri = 'oauth2/address';

	protected $apiURL = 'https://api.skroutz.gr/';

	public $url = '';
	public $grant_type = 'client_credentials';
	public $scope = 'easy';
	public $headers = array();

	/**
	 * @param array|\xd_v141226_dev\framework $instance
	 *
	 * @throws \exception
	 * @throws \xd_v141226_dev\exception
	 */
	public function __construct( $instance ) {
		parent::__construct( $instance );
		$this->client_id     = $this->©option->get( 'client_id' );
		$this->client_secret = $this->©option->get( 'client_secret' );
	}

	/**
	 * @param array $data
	 *
	 * @return array|mixed
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function makeOAuthCall( $data = array() ) {
		$this->reset();
		$this->postData = array_merge( $this->getOAuthPostDataArray(), $data );
		$this->headers  = array();
		$this->url      = $this->baseUrl . $this->tokenUri;

		return $this->makeCall();
	}

	/**
	 * @param $code
	 *
	 * @return array|mixed
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function getAccessToken( $code ) {
		$this->reset();
		$this->postData = array(
			'client_id'     => $this->client_id,
			'client_secret' => $this->client_secret,
			'redirect_uri'  => $this->getRedirectUrl(),
			'grant_type'    => 'authorization_code',
			'code'          => $code,
		);

		$this->url = $this->baseUrl . $this->tokenUri;

		return $this->makeCall();
	}

	/**
	 * @param $accessToken
	 *
	 * @return array|mixed
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	protected function _getAddress( $accessToken ) {
		$this->reset();
		$this->url = $this->baseUrl . $this->addressUri . '?oauth_token=' . urlencode( $accessToken );

		$res = $this->makeCall();
		return isset($res->email) ? $res : null;
	}

	/**
	 * @param $code
	 *
	 * @return array|mixed
	 */
	public function getAddress($code){
		$accessToken = $this->getAccessToken($code);
		return isset($accessToken->access_token) ? $this->_getAddress($accessToken->access_token) : null;
	}

	/**
	 * @return array|mixed
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	protected function makeCall() {
		$args = array( 'headers' => $this->headers, 'return_array' => true );

		$res = $this->©url->remote( $this->url, $this->postData, $args );

		$header = wp_remote_retrieve_headers( $res );
		$json   = json_decode( wp_remote_retrieve_body( $res ) );

		return $json;
	}

	/**
	 * @param $accessToken
	 *
	 * @return $this
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	protected function setAPIRequestHeaders( $accessToken ) {
		$this->headers = array(
			'Accept'        => 'application/vnd.skroutz+json; version=3',
			'Authorization' => 'Bearer ' . $accessToken
		);

		return $this;
	}

	/**
	 * @return array
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	protected function getOAuthPostDataArray() {
		return array(
			'client_id'     => $this->client_id,
			'client_secret' => $this->client_secret,
			'redirect_uri'  => $this->getRedirectUrl(),
			'grant_type'    => $this->grant_type,
			'scope'         => $this->scope,
		);
	}

	/**
	 * @return string
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function getRedirectUrl() {
		return $this->©url->getRedirectUrl();
	}

	/**
	 * @return $this
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function reset() {
		$this->headers    = array();
		$this->postData   = null;
		$this->scope      = 'easy';
		$this->url        = '';
		$this->grant_type = 'client_credentials';

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBaseUrl() {
		return $this->baseUrl;
	}

	/**
	 * @return string
	 */
	public function getAuthorizationUri() {
		return $this->authorizationUri;
	}
}