<?php
/*
Template Name: Home page template
*/ 
?>

<?php get_header(); ?>

<section class="banner-section" style="background:url('<?php echo get_field('banner-img'); ?>')no-repeat center;">
    <div class="container">
       <div class="banner-content">
           <div class="banner-content__text">
                <?php echo get_field('banner-text'); ?>
           </div>
            <a href="#" class="yellow-btn">
                <span class="text-with-arrow"><?php echo get_field('banner-btn-text'); ?></span>
            </a>
       </div>
    </div>
</section>
<section class="find">
    <div class="container">
        <div class="find-content">
            <div class="find-content__icon">
               <img src="<?php echo get_field('franchise-icon'); ?>" alt=""> 
            </div>
            <div class="find-content__text">
                <h4><?php echo get_field('franchise-title'); ?></h4>
                <?php echo get_field('franchise-desc'); ?>
            </div>
            <form action="#" >
                <p><input  class="find-input" type="text" placeholder="<?php echo get_field('franchise-input-placeholder'); ?>" required></p>
                <p><input  class="find-submit" style="background-color:<?php  echo get_field('franchise-btn-color'); ?>" type="submit" value="<?php echo get_field('franchise-btn-text');  ?>"></p>
            </form>

        </div>
    </div>
</section>
<section class="offers">
    <div class="container">
        <div class="offers-content">
            <div class="heading">
                <h4><?php echo get_field('offres-title'); ?></h4>
                <?php echo get_field('offres-desc'); ?>
            </div>
            <div class="offers-box">
            <?php
            global $post;

            $query = new WP_Query( [
                'post_type'      =>'servicess',
                'posts_per_page' => 6,
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
                    <a href="<?php echo get_permalink() ?>">
                        <div class="offers-box-item"> 
                            <div class='offers-box-item__circle' >
                                <img src="<?php echo $url ?>" /> 
                            </div>
                            <h3><?php echo get_the_title();?></h3>
                            <?php the_excerpt(); ?>
                        </div><!-- #offers-item -->
                    </a>
                    <?php 
                }
            } else {
                ?>
                <p>You have no posts to display </p>
                <?php
            }
            wp_reset_postdata();
            ?>
            </div><!-- #offers-box -->
            <a href="#" class="yellow-btn">View All Services</a>
        </div>
    </div>
</section>
<section class="get-start">
    <div class="container">
        <div class="get-start-content">
            <div class="heading">
                <h5 class="red-title"><?php echo get_field('get-start-title');?></h5>
               <?php  echo get_field('get-start-desc'); ?>
            </div>
            <div class="get-start-box">
                <a href="#">
                    <div class="get-start-box-item" style="background:url('<?php echo the_field('first-item-img'); ?>')no-repeat center;">
                        <div class="get-start-box-item__img">
                            <img src="" alt="">
                        </div>
                        <p  class="text-with-arrow">
                        <?php echo the_field('first-item-title'); ?></p>
                    </div>
                </a>
                <!-- #first item -->
                <a href="#">
                    <div class="get-start-box-item" style="background:url('<?php echo the_field('second-item-img'); ?>')no-repeat center;">
                        <div class="get-start-box-item__img">
                            <img src="" alt="">
                        </div>
                        <p  class="text-with-arrow"><?php echo the_field('second-item-title'); ?></p>
                    </div>
                </a>
                <!-- #first second -->
                <a href="#">
                    <div class="get-start-box-item" style="background:url('<?php echo the_field('third-item-img'); ?>')no-repeat center;">
                        <div class="get-start-box-item__img">
                            <img src="" alt="">
                        </div>
                        <p  class="text-with-arrow"><?php echo the_field('third-item-title'); ?></p>
                    </div>
                </a>
                <!-- #third item -->
            </div>
        </div>
    </div>
</section><!-- #get-start -->
<section class="slider-rewies">
   <div class="container">
   <div class="heading">
                <h4><?php echo get_field('what-client-say-title');?></h4>
            </div>
       <div class="slider-rewies-content">
             <div id="slider-box">
                 <div class="slider-box__item">
                    <div class="slider-box__item__text">
                        <?php echo get_field('first-rewie-content');?>
                    </div>
                    <div class="slider-box__item__author-area">
                        <div class="slider-box__item__author-area__name">
                        <p><?php echo get_field('first-rewie-author'); ?></p>
                           <p><?php echo get_field('first-rewie-author-comp'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="slider-box__item">
                    <div class="slider-box__item__text">
                        <?php echo get_field('first-rewie-content');?>
                    </div>
                    <div class="slider-box__item__author-area">
                        <div class="slider-box__item__author-area__name">
                        <p><?php echo get_field('first-rewie-author'); ?></p>
                           <p><?php echo get_field('first-rewie-author-comp'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="slider-box__item">
                    <div class="slider-box__item__text">
                        <?php echo get_field('first-rewie-content');?>
                    </div>
                    <div class="slider-box__item__author-area">
                        <div class="slider-box__item__author-area__name">
                        <p><?php echo get_field('first-rewie-author'); ?></p>
                           <p><?php echo get_field('first-rewie-author-comp'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="slider-box__item">
                    <div class="slider-box__item__text">
                        <?php echo get_field('first-rewie-content');?>
                    </div>
                    <div class="slider-box__item__author-area">
                        <div class="slider-box__item__author-area__name">
                           <p><?php echo get_field('first-rewie-author'); ?></p>
                           <p><?php echo get_field('first-rewie-author-comp'); ?></p>
                        </div>
                    </div>
                </div>
             </div>
       </div>
   </div>
</section><!-- #slider section -->
<section class="latest-news">
    <div class="container">
    <div class="heading">
                <h4>Latest News</h4>
            </div>
        <div class="latest-news-content"> 
      <?php
            $query = new WP_Query( [
                'post_type'      =>'post',
                'posts_per_page' => 3,
                'orderby' => 'publish_date',
                'order' => 'DESC'
            ] );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                    if (!$url) {
                        $url = '/wp-content/themes/twentynineteen-child/images/no-image.png';
                    }
                    ?>
                    <div class='news-item'>
                        <div class="news-item__img">
                            <div class='news-item__img__date'>
                                <span class="month"><?php echo get_the_date('F'); ?></span>
                                <span class="day"><?php echo get_the_date('d'); ?></span>
                            </div>
                            <img src="<?php echo $url ?>" />
                        </div>
                        <div class="news-item__title"><h5><?php echo get_the_title(); ?></h5></div>
                        <div class="news-item__text"><?php   the_content("Read More..."); ?></div>
                        <div class="author"><p><span>By Author</span></div>
                    </div>
                        <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div><!-- #latest-news-content-->
        <div class="btn-area"><a href="#" class="yellow-btn">View More News</a></div>
    </div>
</section>

<section class="contact-gallery">
  <div class="container">
    <div class="contact-gallery-content">
            <div class="contact-box">
                <h5> <?php echo get_field('contact-title'); ?></h5>
               <?php echo get_field('contact-desc');?>
                <?php echo do_shortcode('[contact-form-7 id="158" title="Home-contact"]');  ?>
            </div><!-- contact-box -->
            <div class="contact-gallery-wrap">
                    <h5><?php echo get_field('gallery-title'); ?></h5>
                    <?php echo get_field('gallery-desc');?>
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
                            <?php }
                                } 
                                wp_reset_postdata();
                                ?>
                        
                </div><!--  #gallery list -->
                <div class="btn-area"><a href="#" class="morePhotos"><?php echo get_field('gallery-btn-text');?></a></div>
            </div><!-- #gallery-content-wrap -->
        </div><!--contact-gallery-content -->
  </div><!-- #content -->
</section>
<?php get_footer();  ?>
