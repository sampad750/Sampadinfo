<?php

require_once get_template_directory() . "/lib/carbon-fields/vendor/autoload.php";

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// carbon field boot
function carbon_boot() {
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'after_setup_theme', 'carbon_boot' );
// add meta fields
function carbon_demo_metabox() {
	Container::make( "post_meta", __( 'Add social name/link', 'sampadinfo' ) )
	         ->where( 'post_type', '=', 'post' )
			//->set_context('side')
			//->set_priority( 'high' )
	         ->add_fields( [
				Field::make( 'complex', 'social_links', __( 'Slider' ) )
				     ->add_fields( array(
					     Field::make( 'text', 'social_name', __( 'Social Name' ) ),
					     Field::make( 'text', 'social_url', __( 'Social URL' ) ),
				     ) )
			] );
}
add_action( 'carbon_fields_register_fields', 'carbon_demo_metabox' );