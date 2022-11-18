<?php 
/**
 * Theme functions
 * 
 * @package Pinaka
 */
    // echo '<pre>';
    // print_r(filemtime(get_template_directory() . '/theme.css'));
    // wp_die();
 function pinaka_enqueue_scripts() {
   /**
    * add dynamic css
    */
    wp_register_style( 'main-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all'  );
    wp_register_style( 'theme-css', get_template_directory_uri() . '/assets/css/pinaka-theme.css', [], false, 'all'  );
    /**
     * add dynamic js
     */
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true  );
 /**
  * enqueue stylesheet
  */
      wp_enqueue_style('theme-css');
      wp_enqueue_style('main-css');
    
    /**
     * enqueue javascript
     */
    wp_enqueue_script('main-js');
 }

 add_action('wp_enqueue_scripts', 'pinaka_enqueue_scripts');

?>