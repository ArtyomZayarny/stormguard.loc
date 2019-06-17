<?php
/* 
The template for displaying gallery single posts
*/
?>

<?php get_header(); //banner window ?>
<div class="banner" style="background:url('<?php echo get_field('banner-img'); ?>')no-repeat center;"></div>
<main class="servicess-post">
    <div class="container">

        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
	</div><!-- #breadcrumbs -->
    <div class="servicess-wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
           <h1 class="red-title"><?php  echo get_the_title();  ?></h1>
           <?php echo get_the_post_thumbnail(); ?>
    <?php
    the_content();
    endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    </div><!-- #container -->
</main>



<?php  get_footer(); ?>