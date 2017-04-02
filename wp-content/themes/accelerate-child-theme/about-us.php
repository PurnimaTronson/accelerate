<?php 

/**
* Template Name: About-Us 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */


get_header(); ?>
	<section class='home-page'>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		
			<?php while ( have_posts() ) : the_post();
			
			$service_title = get_field('service-title');
			$service_image = get_field('service-image');
			
			 ?>
			
			<div>
				
				<h3 class="about-hero"><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. </h3>
				
			
			</div>
			
			
			
			
			<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


</section>



<section class="recent-posts">
	<div class="site-content">
	  <div class="about-services">
   <h4>Our Services</h4>
   <p>We take pride in our clients and the content we create for them. 
Here’s a brief overview of our offered services.</p>
   
    <?php query_posts('posts_per_page=4&tag=about'); ?>
     <?php while ( have_posts() ) : the_post(); 
      
      		$image_1 = get_field("image_1"); ?>
		  
		       	<?php echo wp_get_attachment_image($image_1, $size); 

		  
		  ?>
      
       <h2><?php the_title(); ?></h2>
       <?php the_excerpt(); ?> 
       <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
     <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
   </div>
 
	</div>
</section>




<?php get_footer(); ?>
