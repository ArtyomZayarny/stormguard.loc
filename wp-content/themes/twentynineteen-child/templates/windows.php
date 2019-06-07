<?php
/*
Template Name: Windows
*/
?>
<?php get_header(); ?>
 <div class="window-wrap">
<section class="banner" style="background:url('/wp-content/uploads/2019/06/window_banner.png')no-repeat center;background-size:cover;height:264px"></section>
  
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
        <hr>
        <article class="window-article">
            <div class="window-article__img">
                <img src="<?php echo get_field('article-img'); ?>" alt="">
            </div>
            <div class="window-article__text">
                    <h5 class="red-title"><?php echo get_field('article-title'); ?></h5>
                    <?php echo get_field('article-desc'); ?>
            </div>
        
        </article>
        <hr>
        <section class="offers">
          <div class="offers-content">
            <div class="heading">
                <h5 class="red-title">View Our Other Services</h4>
                <p>From home upgrades to storm restoration, Storm Guard offers 
                a range of services to help you with your home.</p>
            </div><!-- #heading -->
            <div class="offers-box">
                    <?php
                    global $post;

                    $query = new WP_Query( [
                        'post_type'      =>'servicess',
                        'posts_per_page' => 5,
                        'orderby'        => 'comment_count',
                    ] );
                    
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            ?>
                            <a href="<?php echo get_permalink(); ?>">
                                <div class="offers-box-item"> 
                                    <div class='offers-box-item__circle' style="background-color:#db302c;">
                                        <img src="<?php echo $url ?>" /> 
                                    </div>
                                    <h3><?php echo get_the_title();?></h3>
                                    <?php the_excerpt(); ?>
                                </div><!-- #offers-item -->
                            </a>
                            <?php 
                        }
                    } else {
                        // Постов не найдено
                    }
                    
                    wp_reset_postdata(); 
                    ?>
                </div><!-- #offers-box -->   
            </div><!-- # offers-content -->
        </section><!-- #offers -->
        <hr>
        <section class="get-start">
            <div class="container">
                <div class="get-start-content">
                    <div class="heading">
                        <h5 class="red-title"><?php echo get_field('ready-title') ?></h4>
                        <?php echo get_field('ready-desc') ?>
                    </div>
                    <div class="get-start-box">
                        <a href="#">
                            <div class="get-start-box-item" style="background:url('<?php echo get_field('first-item-img') ?>')no-repeat center;background-size:cover;">
                                <div class="get-start-box-item__img">
                                    <img src="" alt="">
                                </div>
                                <p  class="text-with-arrow"><?php echo get_field('first-item-title') ?></p>
                            </div>
                        </a>
                        <!-- #first item -->
                        <a href="#">
                            <div class="get-start-box-item" style="background:url('<?php echo get_field('second-item-img') ?>')no-repeat center;background-size:cover;">
                                <div class="get-start-box-item__img">
                                    <img src="" alt="">
                                </div>
                                <p  class="text-with-arrow"><?php echo get_field('second-item-title') ?></p>
                            </div>
                        </a>
                        <!-- #first second -->
                        <a href="#">
                            <div class="get-start-box-item" style="background:url('<?php echo get_field('third-item-img') ?>')no-repeat center;background-size:cover;">
                                <div class="get-start-box-item__img">
                                    <img src="" alt="">
                                </div>
                                <p  class="text-with-arrow"><?php echo get_field('third-item-title') ?></p>
                            </div>
                        </a>
                        <!-- #third item -->
                        
                    
                    </div>
                </div>
            </div>
        </section><!-- #get-start -->
    </div><!-- #container -->
        <section class="find" style="background-color:#ffdd00;">
            <div class="container">
                <div class="find-content">
                    <div class="find-content__icon">
                    <img src="<?php echo get_field('franchise-icon') ?>g" alt=""> 
                    </div>
                    <div class="find-content__text">
                        <h4><?php echo get_field('franchise-title') ?></h4>
                        <?php echo get_field('franchise-desc') ?>
                    </div>
                    <form action="#" >
                        <p><input  class="find-input" type="text" placeholder="<?php echo get_field('franchise-form-placeholder') ?>" required></p>
                        <p><input  class="find-submit" style="background-color:#db302c;" type="submit" value="<?php echo get_field('franchise-btn-text') ?>"></p>
                    </form>
                   </div>
                </div>
        </section><!-- #find -->
        <section class="contact-gallery">
          <div class="container">
            <div class="contact-gallery-content">
                <div class="contact-box">
                    <h5><?php echo get_field('contact-title') ?></h5>
                    <?php echo get_field('contact-desc') ?>
                    <div class="btn-area">
                        <a href="#"><?php echo get_field('contact-local-btn-text') ?></a>
                        <a href="#"><?php echo get_field('contact-office-btn-text') ?></a>
                    </div>
                </div>
                <div class="contact-gallery-wrap">

                    <h5><?php echo get_field('gallery-desc') ?>
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
                                ?>
                                <a href="<?php  echo get_permalink(); ?>">
                                    <div class="contact-gallery-content__item">
                                        <img src="<?php echo $url; ?>" alt="">
                                    </div>
                            </a>
                                <?php
                            }
                        }
                        wp_reset_postdata(); 
                            ?>
                            
                </div><!--  #gallery list -->
              </div><!-- #gallery-content -->
            </div>
        </section><!-- #contact-gallery -->
</div><!-- #windows-wrap -->
<?php get_footer(); ?>