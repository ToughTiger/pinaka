<?php

/**
 * Enqueue theme assets
 * 
 * @package Pinaka
 */

namespace PINAKA_THEME\Inc;
use PINAKA_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    public function __construct(){
        // load classes
        $this->pinaka_setup_hooks();
      

    }
    
    protected function pinaka_setup_hooks()
    {
        // actions
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);

    }
    public function register_styles()
    {
        wp_register_style('main-css', PINAKA_STYLESHEET_URI, [], filemtime(PINAKA_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', PINAKA_DIR_URI . '/assets/css/bootstrap.min.css', [], false, 'all');
        // enqueue stylesheet  
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('main-css');
    }

    public function register_scripts()
    {
        wp_register_script('main-js', PINAKA_DIR_URI . '/assets/js/main.js', [], false, true);
        wp_register_script('bootstrap-bundle', PINAKA_DIR_URI . '/assets/js/bootstrap.bundle.min.js', [], false, true);
        //  enqueue Scripts       
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-bundle');
    }
}