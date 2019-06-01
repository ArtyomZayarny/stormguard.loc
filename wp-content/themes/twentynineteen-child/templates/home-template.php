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
                <h3>Does Your Home or Property Have Storm Damage or Need an Update?</h3>
           </div>
            <a href="#" class="yellow-btn">
                <span>Contact Us Today</span>
            </a>
       </div>
    </div>
</section>



<?php  get_footer();  ?>