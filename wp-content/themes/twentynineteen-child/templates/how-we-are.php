<?php
/*
Template Name: Who we Are
*/

?>
<?php get_header(); ?>
<section class="banner" style="background:url('/wp-content/uploads/2019/06/how-we-are.png')no-repeat center;background-size:cover;height:264px"></section>
<div class="container">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
</div><!-- #breadcrumbs -->
<hr>
<article class="window-article">
            <div class="window-article__img">
                <img src="/wp-content/uploads/2019/06/who-we-are-article.png" alt="">
            </div>
            <div class="window-article__text">
                    <h5 class="red-title">Who We Are</h5>
                    <p>Storm Guard Restoration is a trusted name in the insurance restoration industry.
                         For over a decade, Storm Guard has specialized in exterior insurance restoration
                          for roofing, siding, windows, gutters, and emergency tarping services.</p>

                    <p>The Storm Guard “Way” is the spirit running through the core of our entire organization.
                         Our team of professionals strives to provide our clients with the utmost in quality 
                         construction and insurance expertise. As a trusted advocate, we will always strive to help
                          ease our clients’ burden with the utmost in quality insurance and construction expertise.</p>
            </div>
        
        </article>
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
                            <div class="get-start-box-item" style="background:url('/wp-content/uploads/2019/06/get-start-first.png')no-repeat center;background-size:cover;">
                                <div class="get-start-box-item__img">
                                    <img src="" alt="">
                                </div>
                                <p  class="text-with-arrow">Residential</p>
                            </div>
                        </a>
                        <!-- #first item -->
                        <a href="#">
                            <div class="get-start-box-item" style="background:url('/wp-content/uploads/2019/06/get-start-second.png')no-repeat center;background-size:cover;">
                                <div class="get-start-box-item__img">
                                    <img src="" alt="">
                                </div>
                                <p  class="text-with-arrow">Commercial </p>
                            </div>
                        </a>
                        <!-- #first second -->
                        <a href="#">
                            <div class="get-start-box-item" style="background:url('/wp-content/uploads/2019/06/get-start-third.png')no-repeat center;background-size:cover;">
                                <div class="get-start-box-item__img">
                                    <img src="" alt="">
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


<?php get_footer(); ?>