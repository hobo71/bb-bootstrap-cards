<?php
/**
 * Plugin Name: Beaver Builder Bootstrap Card Modules
 * Plugin URI: http://www.ultimatebeaver.com/
 * Description: This is a plugin for creating Bootstrap Card builder modules.
 * Version: 1.0
 * Author: Bhushan Boabde
 * Author URI: http://www.ultimatebeaver.com/
 */
define( 'BSF_MODULE_CARDS_DIR', plugin_dir_path( __FILE__ ) );
define( 'BSF_MODULE_CARDS_URL', plugins_url( '/', __FILE__ ) );

/**
 * Custom modules
 */
function BSF_load_ultimate_bootstrapcard() {
	if ( class_exists( 'FLBuilder' ) ) {
	    require_once 'ultimate-bootstrapcard/ultimate-bootstrapcard.php';
	}
}
add_action( 'init', 'BSF_load_ultimate_bootstrapcard', 9999 );

