<?php
/**
 * Project: skroutz-easy-for-wordpress
 * File: options.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 5/8/2015
 * Time: 12:52 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace skroutz_easy;

if ( ! defined( 'WPINC' ) ) {
	die;
}

class options extends \xd_v141226_dev\options {
	/**
	 * Sets up default options and validators.
	 *
	 * @extenders Can be overridden by class extenders (i.e. to override the defaults/validators);
	 *    or to add additional default options and their associated validators.
	 *
	 * @param array $defaults An associative array of default options.
	 * @param array $validators An array of validators (can be a combination of numeric/associative keys).
	 *
	 * @return array The current array of options.
	 * @throws exception If invalid types are passed through arguments list.
	 * @throws exception If `count($defaults) !== count($validators)`.
	 */
	public function setup( $defaults, $validators ) {
		$skroutzDefaults = array(
			'encryption.key'                             => 'jkiabOKBNJO89347KJBKJBasfd',
			'support.url'                                => 'https://github.com/panvagenas/skroutz-xml-feed/issues',
			'styles.front_side.theme'                    => 'yeti',
			'crons.config'                               => array(),
			'menu_pages.theme'                           => 'yeti',
			'captchas.google.public_key'                 => '6LeCANsSAAAAAIIrlB3FrXe42mr0OSSZpT0pkpFK',
			'captchas.google.private_key'                => '6LeCANsSAAAAAGBXMIKAirv6G4PmaGa-ORxdD-oZ',
			'url_shortener.default_built_in_api'         => 'goo_gl',
			'url_shortener.custom_url_api'               => '',
			'url_shortener.api_keys.goo_gl'              => '',
			'menu_pages.panels.email_updates.action_url' => '',
			'menu_pages.panels.community_forum.feed_url' => '',
			'menu_pages.panels.news_kb.feed_url'         => '',
			'menu_pages.panels.videos.yt_playlist'       => '',
			'client_id'                                  => '',
			'client_secret'                              => '',
			'redirect_uri'                               => 'auth/skroutz',
			'login_string'                               => $this->__('Login With Skroutz Account'),
		);

		$skroutzDefaultsValidators = array(
			'client_id'     => array( 'string:!empty' ),
			'client_secret' => array( 'string:!empty' ),
			'redirect_uri'  => array( 'string:!empty' ),
			'login_string'  => array( 'string:!empty' ),
		);

		$defaults   = array_merge( $defaults, $skroutzDefaults );
		$validators = array_merge( $validators, $skroutzDefaultsValidators );

		$this->_setup( $defaults, $validators );
	}
}