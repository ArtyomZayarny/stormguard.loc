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
                <span>Contact Us Today</span>
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



<?php  get_footer();  ?>