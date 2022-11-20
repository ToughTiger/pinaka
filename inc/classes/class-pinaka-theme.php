<?php
/**
 * This class bootstraps the theme
 *
 * @package Pinaka
 *
 */

namespace PINAKA_THEME\Inc;

use PINAKA_THEME\Inc\Traits\Singleton;
use PINAKA_THEME\Inc\Assets;

class PINAKA_THEME
{
    use Singleton;

    protected function __construct()
    {
        // load classes
        Assets::get_instance();
        $this->pinaka_setup_hooks();
    }

    protected function pinaka_setup_hooks()
    {
        // actions
        add_action( 'after_setup_theme', [$this, 'pinaka_theme_setup'] );
       
    }
    public function pinaka_theme_setup() {
       
        add_theme_support( 'title-tag' );
        add_theme_support('custom-logo', [
            'header-text'          => ['site-title', 'site-description'],
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,            
            // 'unlink-homepage-logo' => true, 
        ]);
        add_theme_support( 'custom-background', [
            'default-color' => '#fff',
            'default-image' => '',
            'default-position-x' => 'right',
            'default-position-y' => 'top',
            'default-repeat'     => 'no-repeat',
        ]);

        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widget');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5', [
            'comment-list', 
            'comment-form', 
            'search-form', 
            'gallery', 
            'caption', 
            'style', 
            'script'
        ]);
        add_editor_style('wp-block-styles');
        add_theme_support('align-wide');
        global $content_width;
        if(! isset($content_width)){
            $content_width = 1600;
        }
    }
   
}
