<?php
/**
 * Plugin Name: Unyson import
 * Plugin URI: #
 * Description: This is an example WP plugin that unyson big json file import
 * Version: 1.0.0
 * Author: Rayhan Uddin
 * Author URI: #
 * License: GPL
 */
define( 'RUI', '1.0.0' );
define( 'RUI_PATH', plugin_dir_url( __FILE__ ) );
define( 'RUI_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );   
require_once  'vendor/autoload.php';

add_action('admin_menu', 'rui_plugin_setup_menu');
 
function rui_plugin_setup_menu(){
        add_menu_page( 'Redeye Unyson Import', 'redeye Import', 'manage_options', 'redeye-import-plugin', 'redeye_init' );
}
 
function redeye_init() {
   include( RUI_DIR . '/src/importview.php');  
}

$do_import =  new rui_do_import();

add_action('admin_init',[$do_import,'init']);
add_action('admin_init',[$do_import,'upload']);


