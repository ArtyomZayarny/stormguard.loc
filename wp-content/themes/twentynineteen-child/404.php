<?php
/*
 * Template Name: 404 - page
 */

get_header();
?>

<section class=banner style="background:url('<?php echo get_field('banner-img'); ?>')no-repeat center;"></section>
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
<?php get_footer(); ?>
