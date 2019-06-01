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
