<?php
/**
 * Main Theme function file
 */

// if ( ! defined( 'ABSPATH' ) ) {
//     die('Please not accessed directly');
//     exit; 
// }

/**
 * Define constants
 */
define('WPLEARN_VERSION', '0.01');
define('WPLEARN_DIR', get_stylesheet_directory());
define('WPLEARN_URI', get_stylesheet_directory_uri());
define('WPLEARN_ASSETS_URI', get_stylesheet_directory_uri() .'/assets/');

function wp_learn_style()
{
    wp_register_style('wp_learn_main_style', WPLEARN_ASSETS_URI . 'css/main.css', array(), filemtime(WPLEARN_DIR. '/assets/css/main.css' ));
}
add_action('wp_enqueue_scripts', 'wp_learn_style');

