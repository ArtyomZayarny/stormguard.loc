<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="header-top" style="background-color:#000">
			<div class="container">
					<div class="header-top header-top__content">
						<a href="#" class="header-top__content__button">Find Your Local Storm Guard! </a>
						<?php wp_nav_menu( array( 'theme_location' => 'top-bar','container' => 'ul' ) ); ?>
					</div>		
			</div>
		</div><!-- #header__top -->
		<div class="header__bottom">
			<div class="container"></div>
		</div><!--
		
	</header>