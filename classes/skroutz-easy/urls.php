<?php
/**
 * Created by PhpStorm.
 * User: vagenas
 * Date: 21/8/2015
 * Time: 4:09 μμ
 */

namespace skroutz_easy;

/**
 * @property request ©request
 * @property skroutz_easy ©skroutz_easy
 */
class urls extends \xd_v141226_dev\urls{
	/**
	 * @var string This is the name of the var that is appended to skroutz authorization url
	 */
	protected $sourceUrlGETVarName = 'to';
	/**
	 * @param $name
	 * @param $value
	 * @param $url
	 * @param bool|true $urlEncodeValue
	 *
	 * @return string
	 */
	public function appendQueryToURL($name, $value, $url, $urlEncodeValue = true){
		$separator = (parse_url($url, PHP_URL_QUERY) == NULL) ? '?' : '&';
		return $url . $separator . $name . '=' . ($urlEncodeValue ? urlencode($value) : $value);
	}

	/**
	 * @param $uri
	 *
	 * @return bool
	 * @throws \xd_v141226_dev\exception
	 */
	public function isRedirectUri($uri){
		return strpos(trim($uri, '/'), trim($this->©option->get('redirect_uri'), '/')) === 0;
	}

	/**
	 * @return string
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function getRedirectUrl(){
		return $this->©url->to_wp_site_uri($this->©skroutz_easy->getRedirectUri());
	}


	/**
	 * @return string
	 * @throws \xd_v141226_dev\exception
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function getAuthorizationUrl() {
		$redUri = $this->appendQueryToURL($this->sourceUrlGETVarName, $this->current(), $this->getRedirectUrl(), false);

		$query     = http_build_query( array(
			'client_id'     => $this->©option->get( 'client_id' ),
			'redirect_uri'  => $redUri,
			'response_type' => 'code',
			'scope'         => 'easy',
		) );
		return $this->©request->getBaseUrl() . $this->©request->getAuthorizationUri() . '?' . $query;
	}

	/**
	 * @return array|mixed|null
	 */
	public function getCodeFromUrl(){
		return $this->©var->_GET('code');
	}

	/**
	 * @return array|mixed|null
	 */
	public function getSourceUrl(){
		return $this->©var->_GET($this->sourceUrlGETVarName);
	}

	public function getErrorFromUrl(){
		return $this->©var->_GET('error');
	}
}