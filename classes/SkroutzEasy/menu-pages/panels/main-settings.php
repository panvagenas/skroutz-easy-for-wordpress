<?php
/**
 * Project: skroutz-easy-for-wordpress
 * File: main-settings.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 5/8/2015
 * Time: 12:45 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace SkroutzEasy\menu_pages\panels;

if ( ! defined( 'WPINC' ) ) {
	die;
}


use xd_v141226_dev\menu_pages\panels\panel;

class main_settings extends panel{
	/**
	 * @var string Heading/title for this panel.
	 * @extenders Should be overridden by class extenders.
	 */
	public $heading_title = 'Main settings';
	/**
	 * @var string Content/body for this panel.
	 * @extenders Should be overridden by class extenders.
	 */
	public $content_body = '';
	/**
	 * @var string Additional documentation for this panel.
	 * @extenders Can be overridden by class extenders.
	 */
	public $documentation = '';
	public function __construct( $instance, $menu_page ) {
		parent::__construct( $instance, $menu_page );
		/**
		 * Add the content
		 */
		$this->content_body = $this->©views->view($this, 'main_settings_panel.php');
	}
}