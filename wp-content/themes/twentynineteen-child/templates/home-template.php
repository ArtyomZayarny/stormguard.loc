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
<section class="slider-rewies" style="background-color:#f7f8f8;">
   <div class="container">
   <div class="heading">
                <h4>See What Clients Have To Say</h4>
            </div>
       <div class="slider-rewies-content">
             <div id="slider-box">
                 <div class="slider-box__item">
                    <div class="slider-box__item__text">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus gravida neque. Morbi tincidunt quam vel ligula dapibus, quis accumsan dolor consequat. Quisque quis nibh posuere, lobortis odio ut, auctor erat. Morbi et felis id mi rutrum egestas. Etiam tempus justo tellus, quis congue mi convallis dapibus. Maecenas vitae pharetra eros. Praesent placerat dapibus laoreet. Nunc eu semper magna, et aliquet elit. Pellentesque nisl sapien, gravida vitae ipsum eu, scelerisque elementum massa. Cras venenatis vitae odio in pretium. Quisque lacinia eros blandit velit congue, id tincidunt quam ullamcorper.
                        </p>
                    </div>
                    <div class="slider-box__item__author-area">
                        <div class="slider-box__item__author-area__name">
                            <p>John Smith</p>
                            <p> Homeowner</p>
                        </div>
                    </div>
                </div>
                <div class="slider-box__item">
                    <div class="slider-box__item__text">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus gravida neque. Morbi tincidunt quam vel ligula dapibus, quis accumsan dolor consequat. Quisque quis nibh posuere, lobortis odio ut, auctor erat. Morbi et felis id mi rutrum egestas. Etiam tempus justo tellus, quis congue mi convallis dapibus. Maecenas vitae pharetra eros. Praesent placerat dapibus laoreet. Nunc eu semper magna, et aliquet elit. Pellentesque nisl sapien, gravida vitae ipsum eu, scelerisque elementum massa. Cras venenatis vitae odio in pretium. Quisque lacinia eros blandit velit congue, id tincidunt quam ullamcorper.
                        </p>
                    </div>
                    <div class="slider-box__item__author-area">
                        <div class="slider-box__item__author-area__name">
                            <p>John Smith</p>
                            <p> Homeowner</p>
                        </div>
                    </div>
                </div>
                <div class="slider-box__item">
                    <div class="slider-box__item__text">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus gravida neque. Morbi tincidunt quam vel ligula dapibus, quis accumsan dolor consequat. Quisque quis nibh posuere, lobortis odio ut, auctor erat. Morbi et felis id mi rutrum egestas. Etiam tempus justo tellus, quis congue mi convallis dapibus. Maecenas vitae pharetra eros. Praesent placerat dapibus laoreet. Nunc eu semper magna, et aliquet elit. Pellentesque nisl sapien, gravida vitae ipsum eu, scelerisque elementum massa. Cras venenatis vitae odio in pretium. Quisque lacinia eros blandit velit congue, id tincidunt quam ullamcorper.
                        </p>
                    </div>
                    <div class="slider-box__item__author-area">
                        <div class="slider-box__item__author-area__name">
                            <p>John Smith</p>
                            <p> Homeowner</p>
                        </div>
                    </div>
                </div>
                <div class="slider-box__item">
                    <div class="slider-box__item__text">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus gravida neque. Morbi tincidunt quam vel ligula dapibus, quis accumsan dolor consequat. Quisque quis nibh posuere, lobortis odio ut, auctor erat. Morbi et felis id mi rutrum egestas. Etiam tempus justo tellus, quis congue mi convallis dapibus. Maecenas vitae pharetra eros. Praesent placerat dapibus laoreet. Nunc eu semper magna, et aliquet elit. Pellentesque nisl sapien, gravida vitae ipsum eu, scelerisque elementum massa. Cras venenatis vitae odio in pretium. Quisque lacinia eros blandit velit congue, id tincidunt quam ullamcorper.
                        </p>
                    </div>
                    <div class="slider-box__item__author-area">
                        <div class="slider-box__item__author-area__name">
                            <p>John Smith</p>
                            <p> Homeowner</p>
                        </div>
                    </div>
                </div>
             </div>
       </div>
   </div>
</section>
<section class="latest-news">
    <div class="container">
    <div class="heading">
                <h4>SLatest News</h4>
            </div>
        <div class="latest-news-content">
      <?php
            $query = new WP_Query( [
                'post_type'      =>'post',
                'posts_per_page' => 3,
                'orderby'        => 'comment_count',
            ] );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
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

            ?>
        </div><!-- #latest-news-content-->
        <div class="btn-area"><a href="#" class="yellow-btn">View More News</a></div>
    </div>
</section>



<?php  get_footer();  ?>