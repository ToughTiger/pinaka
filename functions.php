<?php
/**
 * Theme functions
 *
 * @package Pinaka
 */

if (!defined('PINAKA_DIR_PATH')) {
    define('PINAKA_DIR_PATH', untrailingslashit(get_template_directory()));
}
if(!defined('PINAKA_DIR_URI')){
    define('PINAKA_DIR_URI', untrailingslashit( get_template_directory_uri()));
}
if(!defined('PINAKA_STYLESHEET_URI')){
    define('PINAKA_STYLESHEET_URI', untrailingslashit( get_stylesheet_uri() ));
}

require_once PINAKA_DIR_PATH . '/inc/helper/autoloader.php';

// Get the classes instance


function pinaka_enqueue_scripts()
{
    
function get_pinaka_theme_instance() {
   \PINAKA_THEME\Inc\PINAKA_THEME::get_instance();
}
get_pinaka_theme_instance();
   
}

add_action('wp_enqueue_scripts', 'pinaka_enqueue_scripts');
