<?php
/**
 * Project: skroutz-easy-for-wordpress
 * File: initializer.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 5/8/2015
 * Time: 12:30 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace skroutz_easy;


class initializer extends \xd_v141226_dev\initializer {
	/**
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since TODO ${VERSION}
	 */
	public function after_setup_theme_hooks() {
		//
		$this->add_action('login_form', '©skroutz_easy.loginForm');
		$this->add_action('register_form', '©skroutz_easy.loginForm');
		$this->add_action('woocommerce_login_form', '©skroutz_easy.loginForm');
	}
}