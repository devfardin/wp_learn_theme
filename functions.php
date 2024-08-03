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
    wp_register_style('wp_learn_main_style', WPLEARN_ASSETS_URI . 'css/main.css', array(), filemtime(WPLEARN_DIR. '/assets/css/main.css' ), 'all');
}
add_action('wp_enqueue_scripts', 'wp_learn_style');


function wp_learn_script(){
    wp_register_script('wp_learn_main_script', WPLEARN_ASSETS_URI.'js/main.js', array(), filemtime( WPLEARN_DIR. '/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'wp_learn_script' );

// Link Boostrap 5

function wp_boostrap_libary(){
    
    // Boostrap Style Link Here
    wp_enqueue_style("boostrap_style", WPLEARN_ASSETS_URI . 'libary/css/bootstrap.css', array(), filemtime( get_template_directory() . '/assets/libary/css/bootstrap.css' ), 'all' );

    // wp_enqueue_style("farol_style", WPLEARN_ASSETS_URI . 'libary/css/style.css', array(), filemtime(get_template_directory() . '/assets/libary/css/style.css'), 'all' );

    // Boostrap script link Here
    wp_enqueue_script('boostrap_js', get_template_directory_uri() . '/assets/libary/js/boostrap.js', array(), filemtime(get_template_directory() . '/assets/libary/js/boostrap.js'), true);
}
add_action('wp_enqueue_scripts', 'wp_boostrap_libary' );

