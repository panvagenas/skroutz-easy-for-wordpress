<?php
/**
 * Project: skroutz-easy-for-wordpress
 * File: main_settings_panel.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 5/8/2015
 * Time: 12:47 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/* @var \skroutz_easy\menu_pages\panels\main_settings $callee */
/* @var \xd_v141226_dev\views $this */

?>
<div class="form-horizontal main-settings-form-wrapper" role="form">
	<div class="form-group row">
		<label for="xml-generate-var" class="col-md-3 control-label">
			<?php echo $this->__( 'Client ID' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[client_id]',
				'title'       => $this->__( 'Client ID' ),
				'placeholder' => $this->__( 'Enter your client ID' ),
				'required'    => true,
				'id'          => 'client-id',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'client_id' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="xml-generate-var" class="col-md-3 control-label">
			<?php echo $this->__( 'Client Secret' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[client_secret]',
				'title'       => $this->__( 'Client Secret' ),
				'placeholder' => $this->__( 'Enter your client secret' ),
				'required'    => true,
				'id'          => 'client-secret',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'client_secret' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="xml-generate-var" class="col-md-3 control-label">
			<?php echo $this->__( 'Redirect URI' ); ?>
		</label>
		<div class="col-sm-7 input-group" style="padding-left: 15px; padding-right: 15px;">
			<span class="input-group-addon"><?php echo $this->©url->to_wp_home_uri(); ?></span>
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[redirect_uri]',
				'title'       => $this->__( 'Redirect URI' ),
				'placeholder' => $this->__( 'Enter your redirect URI' ),
				'required'    => true,
				'id'          => 'redirect-uri',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'redirect_uri' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="xml-generate-var" class="col-md-3 control-label">
			<?php echo $this->__( 'Login Button Label' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[login_string]',
				'title'       => $this->__( 'Login Button Label' ),
				'placeholder' => $this->__( 'Enter your client secret' ),
				'required'    => false,
				'id'          => 'login-string',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'login_string' ), $inputOptions );
			?>
		</div>
	</div>
</div>
