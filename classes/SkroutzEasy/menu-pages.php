<?php
/**
 * Project: skroutz-easy-for-wordpress
 * File: menu_pages.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 5/8/2015
 * Time: 12:31 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace SkroutzEasy;

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class menu_pages
 * @package SkroutzEasy
 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
 * @since TODO ${VERSION}
 */
class menu_pages extends \xd_v141226_dev\menu_pages {
	/**
	 * Handles WordPress® `admin_menu` hook.
	 *
	 * @extenders Should be overridden by class extenders, if a plugin has menu pages.
	 *
	 * @attaches-to WordPress® `admin_menu` hook.
	 * @hook-priority Default is fine.
	 *
	 * @return null Nothing.
	 */
	public function admin_menu() {
		$this->add_options_page(
			$this->©menu_pages__settings
		);
	}

	/**
	 * Handles WordPress® `network_admin_menu` hook.
	 *
	 * @extenders Should be overridden by class extenders, if a plugin has menu pages.
	 *
	 * @attaches-to WordPress® `network_admin_menu` hook.
	 * @hook-priority Default is fine.
	 *
	 * @return null Nothing.
	 */
	public function network_admin_menu() {
		/**
		 * No global preferences so display admin menu
		 */
		$this->admin_menu();
	}

	/**
	 * Default (core-driven) menu pages.
	 *
	 * @return array Default (core-driven) menu pages.
	 *
	 * @see add() for further details about how to add menu pages.
	 */
	public function default_menu_pages() {
		return array();
	}
}