<?php
/**
 * Created by PhpStorm.
 * User: vagenas
 * Date: 20/8/2015
 * Time: 6:46 μμ
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/* @var \skroutz_easy\skroutz_easy $callee */
/* @var \xd_v141226_dev\views $this */
?>

<p class="ske-btn-wrapper">
	<a href="<?php echo $callee->©url->getAuthorizationUrl(); ?>" class="btn-ske"><?php echo $this->©options->get('login_string'); ?></a>
</p>
