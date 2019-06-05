<?php
/*
Template Name: Windows
*/
?>
<?php get_header(); ?>
<?php /* <div class="window-wrap">
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
                <img src="/wp-content/uploads/2019/06/window_worker.png" alt="">
            </div>
            <div class="window-article__text">
                    <h5 class="red-title">Windows</h5>
                    <p>The right windows can make your home – helping frame your home’s
                     overall look and determine your level of energy efficiency. 
                      no-obligation damage inspection will determine if your windows are damaged or
                       leaky and in need of replacement.</p>

                    <p>Our team of professionals handles and installs quality products from America’s most 
                    trusted window and glass companies, such as Simonton Windows. Offering a lifetime manufacturer’s 
                    warranty, Simonton Windows are available in a variety of styles and sizes, and are made from the highest 
                    quality materials available today, including Low Emissivity (Low E) and Argon gas.</p>

                    <p>Whether you choose windows that are wood or vinyl, single or double hung, our 
                    Storm Guard team will install your new or replacement windows right the first time.
                     You can always count on quality construction, premium aesthetics, and energy efficiency,
                      all with the finish options and hardware you need for your application.</p>
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
            </div><!-- # offers-content -->
        </section><!-- #offers -->
        <hr>
        <section class="get-start">
            <div class="container">
                <div class="get-start-content">
                    <div class="heading">
                        <h5 class="red-title">Ready To Get Started?</h4>
                       <p>Damage to your home or business from a storm? 
                        Looking to replace your old roof or siding? Get Started below!</p>
                    </div>
                    <div class="get-start-box">
                        <a href="#">
                            <div class="get-start-box-item">
                                <div class="get-start-box-item__img">
                                    <img src="/wp-content/uploads/2019/06/get-start-first.png" alt="">
                                </div>
                                <p  class="text-with-arrow">Residential</p>
                            </div>
                        </a>
                        <!-- #first item -->
                        <a href="#">
                            <div class="get-start-box-item">
                                <div class="get-start-box-item__img">
                                    <img src="/wp-content/uploads/2019/06/get-start-second.png" alt="">
                                </div>
                                <p  class="text-with-arrow">Commercial </p>
                            </div>
                        </a>
                        <!-- #first second -->
                        <a href="#">
                            <div class="get-start-box-item">
                                <div class="get-start-box-item__img">
                                    <img src="/wp-content/uploads/2019/06/get-start-third.png" alt="">
                                </div>
                                <p  class="text-with-arrow">Insurance </p>
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
                    <img src="/wp-content/uploads/2019/06/find-icon.png" alt=""> 
                    </div>
                    <div class="find-content__text">
                        <h4>Find A Franchise Near You</h4>
                        <p>Want to speak to us in person? Enter your zip code to find the nearest franchise.</p>
                    </div>
                    <form action="#" >
                        <p><input  class="find-input" type="text" placeholder="Zip code" required></p>
                        <p><input  class="find-submit" style="background-color:#db302c;" type="submit" value="Submit"></p>
                    </form>
                   </div>
                </div>
        </section><!-- #find -->
        <section class="contact-gallery">
          <div class="container">
            <div class="contact-gallery-content">
                <div class="contact-box">
                    <h5>Contact Us Today</h5>
                    <p>Need more information about our services or insurance claims? Fill out the form below and representitive will be in touch!</p>
                    <div class="btn-area">
                        <a href="#">Contact Your Local Storm Guard Franchise</a>
                        <a href="#">Contact the Storm Guard Corporate Office</a>
                    </div>
                </div>
                <div class="contact-gallery-wrap">

                    <h5>Check Out Our Past Projects</h5>
                    <p>Want to see examples of our past work? Check out the gallery below to see projects we have completed in the past.</p>
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
                            ?>
                            
                </div><!--  #gallery list -->
              </div><!-- #gallery-content -->
            </div>
        </section><!-- #contact-gallery -->
</div><!-- #windows-wrap -->
                    */ ?>
                    <div style="height:80vh"></div>
<?php get_footer(); ?>