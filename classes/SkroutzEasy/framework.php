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

namespace SkroutzEasy;

if (!defined('WPINC')) {
	die;
}

/**
 * Class framework
 * @package SkroutzEasy
 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
 * @since TODO ${VERSION}
 *
 * @property skroutz_easy   $©skroutz_easy
 * @property skroutz_easy   ©skroutz_easy()
 */
class framework extends  \xd__framework{

}

$GLOBALS[__NAMESPACE__] = new framework(
	array(
		'plugin_root_ns' => __NAMESPACE__, // The root namespace
		'plugin_var_ns'  => 'ske',
		'plugin_cap'     => 'manage_options',
		'plugin_name'    => 'Skroutz Easy',
		'plugin_version' => '150804',
		'plugin_site'    => 'https://github.com/panvagenas/skroutz-easy-for-wordpress',
		'plugin_dir'     => dirname(dirname(dirname(__FILE__))) // Your plugin directory.
	)
);