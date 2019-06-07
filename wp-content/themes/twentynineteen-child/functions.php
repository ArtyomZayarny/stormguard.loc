<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */

 /*
 Enqueue  slick styles
 */
function twentynineteen_child_styles() {
  wp_enqueue_style( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

}
add_action( 'wp_enqueue_scripts', 'twentynineteen_child_styles' );

 /*
 Enqueue  slick js scripts
 */
function twentynineteen_child_scripts() {
  wp_enqueue_script( 'slick-js', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'custom', get_stylesheet_directory_uri().'/js/scripts.js', array('jquery'), null, true );
}

add_action( 'wp_footer', 'twentynineteen_child_scripts' );

/*
 Registered the menus
 */
function register_my_menus() {
    register_nav_menus(
      array(
        'top-bar' => __( 'top-bar' ),
        'main-nav' => __( 'main-nav' ),
        'footer-menu' =>__('footer-menu')
      )
    );
  }
  add_action( 'init', 'register_my_menus' );


  //ACF options
  if( function_exists('acf_add_options_page') ) {
  
    acf_add_options_page(array(
      'page_title'  => 'Theme General Settings',
      'menu_title'  => 'Theme Options',
      'menu_slug'   => 'theme-general-settings',
      'capability'  => 'edit_posts',
      'redirect'    => false,
      'position'    => 22,
      'icon_url' => 'dashicons-admin-appearance', 
    ));
    
    acf_add_options_sub_page(array(
      'page_title'  => 'Theme Header Settings',
      'menu_title'  => 'Header',
      'parent_slug' => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
      'page_title'  => 'Theme Footer Settings',
      'menu_title'  => 'Footer',
      'parent_slug' => 'theme-general-settings',
    ));

  
    
  }