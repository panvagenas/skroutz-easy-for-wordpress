<?php
/**
 * Project: skroutz-easy-for-wordpress
 * File: framework.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 5/8/2015
 * Time: 12:27 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace skroutz_easy;

if ( ! defined( 'WPINC' ) ) {
	die;
}
require_once dirname( dirname( dirname( __FILE__ ) ) ) . '/core/stub.php';

/**
 * Class framework
 * @package skroutz_easy
 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
 * @since TODO ${VERSION}
 *
 * @property skroutz_easy $©skroutz_easy
 * @method skroutz_easy ©skroutz_easy()
 *
 * @property request $©request
 * @method request ©request()
 *
 * @property urls                                     $©urls
 * @property urls                                     $©url
 * @method urls                                       ©urls()
 * @method urls                                       ©url()
 */
class framework extends \xd__framework {
}

$GLOBALS[ __NAMESPACE__ ] = new framework(
	array(
		'plugin_root_ns' => __NAMESPACE__, // The root namespace
		'plugin_var_ns'  => 'ske',
		'plugin_cap'     => 'manage_options',
		'plugin_name'    => 'Skroutz Easy',
		'plugin_version' => '150804',
		'plugin_site'    => 'https://github.com/panvagenas/skroutz-easy-for-wordpress',
		'plugin_dir'     => dirname( dirname( dirname( __FILE__ ) ) ) // Your plugin directory.
	)
);