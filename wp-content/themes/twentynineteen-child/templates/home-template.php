<?php
/*
Template Name: Home page template
*/ 
?>

<?php get_header(); ?>

<section class="banner-section" style="background:url('<?php echo get_field('banner-img'); ?>')no-repeat center; background-size:cover">
    <div class="container">
       <div class="banner-content">
           <div class="banner-content__text">
                <?php echo get_field('banner-text'); ?>
           </div>
            <a href="#" class="yellow-btn">
                <span class="text-with-arrow">Contact Us Today</span>
            </a>
       </div>
    </div>
</section>
<section class="find" style="background-color:#ffdd00;">
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
                <h4><?php echo get_field('services-title'); ?></h4>
                <?php echo get_field('services-desc'); ?>
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
                    ?>
                    <div class="offers-box-item"> 
                        <div class='offers-box-item__circle' style="background-color:#db302c;">
                            <img src="<?php echo $url ?>" /> 
                        </div>
                        <h3><?php echo get_the_title();?></h3>
                        <?php the_excerpt(); ?>
                    </div><!-- #offers-item -->
                    <?php 
                }
            } else {
                // Постов не найдено
            }
            
            wp_reset_postdata(); // Сбрасываем $post
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
                <h4><?php echo get_field('get-start-title'); ?></h4>
                <?php echo get_field('get-start-desc'); ?>
            </div>
            <div class="get-start-box">
                <a href="#">
                    <div class="get-start-box-item">
                        <div class="get-start-box-item__img">
                            <img src="<?php  echo get_field('get-start-first-item-img'); ?>" alt="">
                        </div>
                        <p href="#" class="text-with-arrow"><?php  echo get_field('get-start-first-item-desc'); ?></p>
                    </div>
                 </a>
                 <!-- #first item -->
                 <a href="#">
                    <div class="get-start-box-item">
                        <div class="get-start-box-item__img">
                            <img src="<?php  echo get_field('get-start-second-item-img'); ?>" alt="">
                        </div>
                        <p href="#" class="text-with-arrow"><?php  echo get_field('get-start-second-item-desc'); ?></p>
                    </div>
                 </a>
                 <!-- #first second -->
                 <a href="#">
                    <div class="get-start-box-item">
                        <div class="get-start-box-item__img">
                            <img src="<?php  echo get_field('get-start-third-item-img'); ?>" alt="">
                        </div>
                        <p href="#" class="text-with-arrow"><?php  echo get_field('get-start-third-item-desc'); ?></p>
                    </div>
                 </a>
                 <!-- #third item -->
                 
            
            </div>
        </div>
    </div>
</section>



<?php  get_footer();  ?>