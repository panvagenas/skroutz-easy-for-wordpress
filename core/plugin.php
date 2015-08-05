<?php
/**
 * XDaRk Core (WP plugin).
 *
 * Copyright: © 2012 (coded in the USA)
 * {@link http://www.websharks-inc.com XDaRk}
 *
 * @author JasWSInc
 * @package XDaRk\Core
 * @since 130310
 */

if(!defined('WPINC'))
	exit('Do NOT access this file directly: '.basename(__FILE__));

/*
 * Load dependency utilities.
 */
$GLOBALS['autoload_xd_v141226_dev'] = FALSE;
require_once dirname(__FILE__).'/stub.php';
require_once xd_v141226_dev::deps();

/*
 * Check dependencies (and load framework; if possible).
 */
if(deps_xd_v141226_dev::check(xd_v141226_dev::$core_name, dirname(__FILE__)) === TRUE)
	require_once xd_v141226_dev::framework();