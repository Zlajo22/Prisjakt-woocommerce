<?php
/*
Plugin Name: Prisjakt module for WooCommerce
Plugin URI: http://
Description: Generates Prisjakt file from products in WooCommerce.
Author: Rendom
Author URI: https://github.com/rendom
Version: 0.1
*/

if( is_admin() ) {
    require_once plugin_dir_path( __FILE__ ).'admin/prisjaktAdmin.php';
    add_action( 'plugins_loaded', array( 'rendom\\prisjakt\\admin\\Prisjakt', 'getInstance' ) );
}
