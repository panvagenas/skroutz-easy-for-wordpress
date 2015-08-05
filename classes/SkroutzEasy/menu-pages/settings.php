<?php
/**
 * Project: skroutz-easy-for-wordpress
 * File: settings.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 5/8/2015
 * Time: 12:41 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace SkroutzEasy\menu_pages;

if ( ! defined( 'WPINC' ) ) {
	die;
}

class settings extends menu_page {
	public $updates_options = true;

	/**
	 * Constructor.
	 *
	 * @param object|array $instance Required at all times.
	 *    A parent object instance, which contains the parent's ``$instance``,
	 *    or a new ``$instance`` array.
	 */
	public function __construct( $instance ) {
		parent::__construct( $instance );
		$this->heading_title           = $this->__( 'Main Settings' );
		$this->sub_heading_description = sprintf( $this->__( 'Configure main settings for %1$s' ),
			esc_html( $this->©plugin->instance->plugin_name ) );
	}

	/**
	 * Displays HTML markup producing content panels for this menu page.
	 */
	public function display_content_panels() {
		$this->add_content_panel( $this->©menu_pages__panels__main_settings( $this ), true );
		$this->display_content_panels_in_order();
	}

	/**
	 * Displays HTML markup for notices, for this menu page.
	 *
	 */
	public function display_notices() {
	}
}