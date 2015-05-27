<?php

/*
 * Plugin Name: Papi: Property Relationship Extended
 * Description: Select specific post types
 * Version: 1.0.0
 * Author: Ralev.com
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Include Property Terms
 *
 * @since 1.0.0
 */

function include_relationship_extended() {
  include_once('class-papi-property-relationship-extended.php');
}

add_action('papi_include_properties', 'include_relationship_extended');
