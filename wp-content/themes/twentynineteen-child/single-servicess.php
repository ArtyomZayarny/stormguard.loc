<?php
/* 
The template for displaying servicess single posts
*/
?>

<?php get_header(); //banner window  ?>
<div class="banner" style="background:url('<?php  echo get_field('banner-img') ?>')no-repeat center;"></div>
<main class="servicess-post">
    <div class="container">
        <div class="servicess-wrap">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
            if (!$url) {
                $url = '/wp-content/themes/twentynineteen-child/images/no-image.png';
            }
            ?>
                    <div class="offers-box">
                        <div class="offers-box-item">
                            <div class="offers-box-item__circle">
                                <img src="<?php echo $url ?>">
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