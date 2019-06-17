<?php
/**
 *Template Name: Archive
  
 *
 
 */

get_header();
?>
<div class="banner" style="background:url('<?php echo get_field('banner-img'); ?>')no-repeat center;></div>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
        </div><!-- #breadcrumbs -->
		       <h1 class="red-title" >Archives</h1>
			<ul>
				<?php
				$args = array( 'numberposts' => -1 );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>
				<li><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		</main><!-- #main -->
	</section><!-- #primary -->


<?php
get_footer();
