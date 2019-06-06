<?php
/* 
The template for displaying servicess single posts
*/
?>

<?php get_header(); ?>
<div class="banner" style="background:url('/wp-content/uploads/2019/06/window_banner.png')no-repeat center;background-size:cover; height:264px"></div>
<main class="servicess-post">
    <div class="container">
    <div class="servicess-wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?> <div class="offers-box">
                    <div class="offers-box-item"> 
                        <div class="offers-box-item__circle" style="background-color:#db302c;">
                            <img src="http://stormguard.loc/wp-content/uploads/2019/06/roofing_icon.png"> 
                        </div>
                        <h3><?php echo get_the_title(); ?></h3>
                        <?php echo get_the_excerpt(); ?>
                </div><!-- #offers-item -->
</div><!-- servicess-wrap -->
    <?php
    the_content();
    endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    </div><!-- #container -->
</main>



<?php  get_footer(); ?>