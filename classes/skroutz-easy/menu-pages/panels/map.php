<?php
/**
 * Created by PhpStorm.
 * User: vagenas
 * Date: 21/8/2015
 * Time: 5:15 μμ
 */

namespace skroutz_easy\menu_pages\panels;

use xd_v141226_dev\menu_pages\panels\panel;

if ( ! defined( 'WPINC' ) ) {
	die;
}

class map extends panel{
	/**
	 * @var string Heading/title for this panel.
	 * @extenders Should be overridden by class extenders.
	 */
	public $heading_title = 'Map Fields';
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
		$this->content_body = $this->©views->view($this, 'map_panel.php');
	}
}