<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<section class=banner style="background:url('/wp-content/uploads/2019/06/how-we-are-banner@2x.png')no-repeat center;background-size:cover;height:264px;"></section>
<div class="container">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
	</div><!-- #breadcrumbs -->
	<h3>Sorry Page not found</h3>
    <hr>
	</div>
<?php
get_footer();
