<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer class="footer" style="background-color:<?php echo the_field('footer-bg-color', 'option')?>">
	     <div class="container">
			<div class="footer-content">
				<div class="footer-content__copy">
					<p>Copyright 2017. Storm Guard. All Rights Reserved. Website Produced by: <a href="#">Inverse Paradox</a></p>
				</div>
				<!-- footer  menu -->
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu','container' => 'ul' ) );  ?>
			     <!-- #footer menu -->
			</div>
		 </div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
