<?php
/*
Template Name: Become A Franchise
*/

?>
<?php get_header(); ?>
<section class=banner style="background:url()no-repeat center;background-size:cover;"></section>
<section class="franchise">
    <div class="container">
        <article class="franchise-content">
            <section class="text-img">
                    <div class="text-img__text">
                        <h5  class="red-title">Own a Storm Guard Franchise!</h5>
                        <p>The insurance industry estimates that roofing, siding, windows, and gutter 
                        claims, due to hail and wind damage, exceeds billions of dollars each year.
                        Storms and exterior property damage happen all across the country, and throughout 
                        the year. And yet, the insurance restoration industry is very fragmented, with no major players.
                        The businesses tend to be small and localized, and business practices vary widely because 
                        individual owners use individual methods.</p>

                        <h5 class="red-title">Who We Are</h5>
                        <p>Storm Guard Restoration is the fastest-growing exterior restoration franchise offering. 
                        We are a young, dynamic company on its way to dominating the exterior insurance and non-insurance
                        restoration industry. By joining the Storm Guard system, you can capitalize on being a part of 
                        the first nationally-recognized franchise system for exterior insurance restoration.
                        Our highly-experienced trainers and field staff will train you to operate all aspects of the business,
                        from the sales and claims process to the actual building of the roofing, siding, windows,
                        and gutter projects.</p>
                    </div> 
                        <div class="text-img__img">
                            <img src="" alt="">
                        </div>

            </section>
            <section class="articles">
                <div class="articles_text">
                    <h5 class="red-title">Why Consider a Storm Guard Franchise</h5>
                    <p>This is a very attractive business model that offers a low investment, 
                    fast ramp-up, small number of staff, fragmented competition, and a high potential 
                    return on investment.</p>
                </div>
                
                <div class="articles_text">
                    <h5 class="red-title">Looking for the Right Candidates</h5>
                    <p>We are looking for motivated individuals who are prepared to take their financial 
                    future into their own hands and create successful franchises; people who have the ability
                    to set goals and strive to achieve them; people who are able to learn and execute a 
                    precise business plan; people that can lead and motivate employees to achieve short and long term goals.
                    To be a successful Storm Guard Restoration Franchisee, you must be ready to invest in yourself.</p>

                    <p>Storm Guard Restoration franchisees come from all walks of life. Typically, 
                    they are not contractors, restoration experts, or home improvement gurus. Our 
                    franchisees are smart, successful and highly motivated business leaders. 
                    They have a disciplined acumen for maximizing opportunity and they know how to run a business.
                    They are committed to building productive teams and long-term relationships.
                    They know how to inspire and how to bring out the best in other people.</p>

                    <p>As a Storm Guard Restoration franchisee, your business is guided by a powerful
                    business model. You will utilize Sales Associates to guide your customers through 
                    the restoration process, giving them confidence that the job will get done on time with
                    the highest level of service. You will leverage a network of highly skilled subcontractors
                    overseen by a production manager to deliver a smooth restoration experience.</p>
                </div> 
                <div class="articles_text">
                    <h5 class="red-title">Next Steps</h5>
                    <p>To start, please call Rita Perkins at <a style="color:#db322e" href="tel:9199779517">(919) 977-9517</a>, or <a style="color:#db322e" href="#">submit this form</a> and we’ll contact you. 
                    Once you’ve been qualified, we’ll schedule time for an overview presentation and discussion with you,
                    and provide our Franchise Disclosure Document for your review. You’ll be given plenty of time and opportunity
                    to perform your due diligence. When you make your final decision to purchase a Storm Guard Restoration 
                    franchise, we’ll send you our Franchise Agreement.</p>

                <p>Storm Guard offers many great territories for our franchisees – and territories are going fast!</p>
                </div>     
            </section>
        </article>
        </div>
</section>
<section class="find" style="background-color:#ffdd00;">
    <div class="container">
        <div class="find-content">
            
            <div class="find-content__text">
                <h4>Become A Franchise Owner Today!</h4>
                <p>Ready to become a franchise owner? Fill out the form to get started.</p>
            </div>
                <a href="#" class="fill-form">Fill Out Our Form</a>
        </div>
</section>

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
        <div class="contact-gallery">

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
</section>
 









<?php  get_footer(); ?>