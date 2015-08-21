<?php
/**
 * Created by PhpStorm.
 * User: vagenas
 * Date: 21/8/2015
 * Time: 5:17 μμ
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/* @var \skroutz_easy\menu_pages\panels\map $callee */
/* @var \xd_v141226_dev\views $this */
?>
<div class="form-horizontal map-form-wrapper" role="form">
	<div class="form-group row">
		<label for="map-first-name" class="col-md-3 control-label">
			<?php echo $this->__( 'First Name' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_first_name]',
				'title'       => $this->__( 'First Name' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-first-name',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_first_name' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-last-name" class="col-md-3 control-label">
			<?php echo $this->__( 'Last Name' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_last_name]',
				'title'       => $this->__( 'Last Name' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-last-name',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_last_name' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-email" class="col-md-3 control-label">
			<?php echo $this->__( 'email' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_email]',
				'title'       => $this->__( 'email' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-email',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_email' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-mobile" class="col-md-3 control-label">
			<?php echo $this->__( 'Mobile Phone' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_mobile]',
				'title'       => $this->__( 'Mobile Phone' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-mobile',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_mobile' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-phone" class="col-md-3 control-label">
			<?php echo $this->__( 'Phone' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_phone]',
				'title'       => $this->__( 'Phone' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-phone',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_phone' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-address" class="col-md-3 control-label">
			<?php echo $this->__( 'Address' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_address]',
				'title'       => $this->__( 'Address' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-address',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_address' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-zip" class="col-md-3 control-label">
			<?php echo $this->__( 'Zip Code' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_zip]',
				'title'       => $this->__( 'Zip Code' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-zip',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_zip' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-city" class="col-md-3 control-label">
			<?php echo $this->__( 'City' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_city]',
				'title'       => $this->__( 'City' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-city',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_city' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-region" class="col-md-3 control-label">
			<?php echo $this->__( 'Region' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_region]',
				'title'       => $this->__( 'Region' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-region',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_region' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-street-name" class="col-md-3 control-label">
			<?php echo $this->__( 'Street Name' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_street_name]',
				'title'       => $this->__( 'Street Name' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-street-name',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_street_name' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-street-number" class="col-md-3 control-label">
			<?php echo $this->__( 'Street Number' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_street_number]',
				'title'       => $this->__( 'Street Number' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-street-number',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_street_number' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-invoice" class="col-md-3 control-label">
			<?php echo $this->__( 'Invoice' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_invoice]',
				'title'       => $this->__( 'Invoice' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-invoice',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_invoice' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-company" class="col-md-3 control-label">
			<?php echo $this->__( 'Company' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_company]',
				'title'       => $this->__( 'Company' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-company',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_company' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-doy" class="col-md-3 control-label">
			<?php echo $this->__( 'DOY' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_doy]',
				'title'       => $this->__( 'DOY' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-doy',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_doy' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-afm" class="col-md-3 control-label">
			<?php echo $this->__( 'AFM' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_afm]',
				'title'       => $this->__( 'AFM' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-afm',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_afm' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-profession" class="col-md-3 control-label">
			<?php echo $this->__( 'Profession' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_profession]',
				'title'       => $this->__( 'Profession' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-profession',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_profession' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-company-phone" class="col-md-3 control-label">
			<?php echo $this->__( 'Company Phone' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_company_phone]',
				'title'       => $this->__( 'Company Phone' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-company-phone',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_company_phone' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-first-name" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address First Name' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_first_name]',
				'title'       => $this->__( 'Shipping Address First Name' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-first-name',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_first_name' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-last-name" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address Last Name' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_last_name]',
				'title'       => $this->__( 'Shipping Address Last Name' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-last-name',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_last_name' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-mobile" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address Mobile Phone' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_mobile]',
				'title'       => $this->__( 'Shipping Address Mobile Phone' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-mobile',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_mobile' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-phone" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address Phone' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_phone]',
				'title'       => $this->__( 'Shipping Address Phone' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-phone',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_phone' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-address" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_address]',
				'title'       => $this->__( 'Shipping Address' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-address',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_address' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-zip" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address Zip Code' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_zip]',
				'title'       => $this->__( 'Shipping Address Zip Code' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-zip',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_zip' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-city" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address City' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_city]',
				'title'       => $this->__( 'Shipping Address City' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-city',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_city' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-region" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address Region' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_region]',
				'title'       => $this->__( 'Shipping Address Region' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-region',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_region' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-street-name" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address Street Name' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_street_name]',
				'title'       => $this->__( 'Shipping Address Street Name' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-street-name',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_street_name' ), $inputOptions );
			?>
		</div>
	</div>

	<div class="form-group row">
		<label for="map-shipping-address-street-number" class="col-md-3 control-label">
			<?php echo $this->__( 'Shipping Address Street Number' ); ?>
		</label>

		<div class="col-sm-7">
			<?php
			$inputOptions = array(
				'type'        => 'text',
				'name'        => '[map_shipping_address_street_number]',
				'title'       => $this->__( 'Shipping Address Street Number' ),
				'placeholder' => $this->__( 'Comma separated user meta keys to update' ),
				'id'          => 'map-shipping-address-street-number',
				'attrs'       => '',
				'classes'     => 'form-control col-md-10'
			);
			echo $callee->menu_page->option_form_fields->markup( $this->©option->get( 'map_shipping_address_street_number' ), $inputOptions );
			?>
		</div>
	</div>
</div>