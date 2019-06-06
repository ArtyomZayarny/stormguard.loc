<?php

/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
<div class="banner" style="background:url('/wp-content/uploads/2019/06/how-we-are.png')no-repeat center;background-size:cover;height:264px"></div>
<div class="container">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
            </div><!-- #breadcrumbs -->
            <h3 class="red-title" style="text-align:center">Blog</h3>
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
</div>




<?php get_footer(); ?>