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
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" >&times;</a>
  <?php wp_nav_menu( array( 'theme_location' => 'top-bar','container' => 'ul' ) ); ?>
  <?php wp_nav_menu( array( 'theme_location' => 'main-nav','container' => 'ul' ) );  ?>
</div>

	<header class="header">
		<div class="header-top" style="background-color:#000">
			<div class="container">
					<div class="header-top header-top__content">
						<a href="#" class="header-top__content__button">Find Your Local Storm Guard! </a>
						<?php wp_nav_menu( array( 'theme_location' => 'top-bar','container' => 'ul' ) ); ?>
					</div>		
			</div>
		</div><!-- #header__top -->
		<div class="header-bottom" style="background-color:rgba(0,0,0,0.6);">
			<div class="container">
			<div class="header-bottom__content">
			    <div class="header-bottom__content header-bottom__content__img">
				   <a href="/"><img src="/wp-content/uploads/2019/06/logo.png" alt="logo"></a>
				</div>
				<!-- main-nav menu -->
				<?php wp_nav_menu( array( 'theme_location' => 'main-nav','container' => 'ul' ) );  ?>
				 <!-- #main-nav-menu -->
				 
				 <span class="burger" style="font-size:30px;cursor:pointer;color:#fff;">☰</span>
			</div>
			
			</div>
		</div>
		
	</header>
