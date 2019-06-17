<?php
/*
Template Name: Franchise
*/

?>
<?php get_header(); ?>
<section class=banner style="background:url('<?php echo get_field('banner-img'); ?>')no-repeat center;"></section>
<div class="container">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div><!-- #breadcrumbs -->
    <hr>
    <section class="franchise">
            <article class="franchise-content">
                <div class="text-img">
                        <div class="text-img__text">
                            <h5  class="red-title"><?php echo get_field('own-title'); ?></h5>
                            <?php echo get_field('own-desc'); ?>

                            <h5 class="red-title"><?php echo get_field('who-we-are'); ?></h5>
                            <?php echo get_field('who-we-are-desc'); ?>
                        </div> 
                        <div class="text-img__img">
                            <img src="<?php echo get_field('franchise-img'); ?>" alt="">
                        </div>
                </div>
                <?php echo get_field('franchise-text'); ?>
            </article>
            </div>
    </section>
    <section class="find" >
        <div class="container">
            <div class="find-content with-btn">
                <div class="find-content__text">
                    <h4><?php echo get_field('become-title'); ?></h4>
                    <?php echo get_field('become-desc'); ?>
                </div>
                    <a href="#" class="fill-form"><?php echo get_field('become-btn-text'); ?></a>
            </div>
    </section>

    <section class="contact-gallery">
    <div class="container">
    <div class="contact-gallery-content">
            <div class="contact-box">
                <h5><?php echo get_field('contact-title'); ?></h5>
                <?php echo get_field('contact-desc'); ?>
                <div class="btn-area two">
                    <a href="#"><?php echo get_field('contact-local-btn-text'); ?></a>
                    <a href="#"><?php echo get_field('contact-office-btn-text'); ?></a>
                </div>
            </div>
            <div class="contact-gallery-wrap">
                <h5><?php echo get_field('gallery-title'); ?></h5>
                <?php echo get_field('gallery-desc'); ?>
                <div class="contact-gallery-list">
                <?php
                    $query = new WP_Query( [
                        'post_type'      =>'gallery',
                        'posts_per_page' => 8,
                        'orderby'        => 'comment_count',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            if (!$url) {
                                $url = '/wp-content/themes/twentynineteen-child/images/no-image.png';
                            }
                            ?>
                            <a href="<?php  echo get_permalink(); ?>">
                                <div class="contact-gallery-content__item">
                                    <img src="<?php echo $url; ?>" alt="">
                                </div>
                            </a>
                            <?php
                        }
                    }
                        ?>
                        
            </div><!--  #gallery list -->
        </div><!-- #gallery-content -->
        </div>
    </section>
</div>
<?php  get_footer(); ?>