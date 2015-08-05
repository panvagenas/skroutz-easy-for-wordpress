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

namespace SkroutzEasy;


class request extends framework{
	protected $client_id;
	protected $client_secret;
	protected $redirect_uri;
	protected $postData = array();

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
	public function getAccessToken($code){
		$this->postData = array(
			'code'          => $code,
			'client_id'     => $this->client_id,
			'client_secret' => $this->client_secret,
			'redirect_uri'  => $this->getRedirectUrl(),
			'grant_type'    => 'authorization_code'
		);

		$this->url= $this->baseUrl . $this->tokenUri;
		$this->headers  = array();

		return $this->makeCall();
	}

	/**
	 * @return array|mixed
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function makeCall(){
		$args = array( 'headers' => $this->headers, 'return_array' => true );

		$res = $this->©url->remote( $this->url, $this->postData, $args );

		$header = wp_remote_retrieve_headers( $res );
		$json = json_decode( wp_remote_retrieve_body( $res ) );

		return $json;
	}

	/**
	 * @param $accessToken
	 *
	 * @return $this
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function setAPIRequestHeaders($accessToken) {
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
	public function getRedirectUrl(){
		return $this->©skroutz_easy->getRedirectUrl();
	}

	/**
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function getAuthorizationUrl(){
		$query = http_build_query(array(
			'client_id' => $this->client_id,
			'redirect_uri' => $this->getRedirectUrl(),
			'response_type' => 'code'
		));
		$this->url = $this->baseUrl . $this->authorizationUri . '?' . $query;
	}
}