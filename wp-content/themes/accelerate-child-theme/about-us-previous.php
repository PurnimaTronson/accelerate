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
			
			$service_1 = get_field('service_1');
			$service_2 = get_field('service_2');			
			$service_3 = get_field('service_3');
			$service_4 = get_field('service_4');
			$service_image_1 = get_field('service_image_1');
			$service_image_2 = get_field('service_image_2');
			$service_image_3 = get_field('service_image_3');
			$service_image_4 = get_field('service_image_4');



			
			
			
			$service_description = get_field('service_description_1');

			
			 ?>
			
			<div>
				
				<h3 class="about-hero"><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. </h3>
				
			
			</div>
			
			
			
			
			
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


</section>



<section class="recent-posts">
	<div class="site-content">
	  <div class="our-services">
   <h4><?php the_title(); ?></h4>
   <p><?php the_content(); ?></p>
		</div>
		
		<div class="individual-services">
   
   <?php query_posts('post_type=services'); ?>
     <?php while ( have_posts() ) : the_post();
      		$service_image_1 = get_field("service_image_1");
		   
		  ?>
		         <h2><?php the_title(); ?></h2>
		  
		       	<?php echo wp_get_attachment_image($service_image_1, $size); 
		  ?>

      
       <?php the_excerpt(); ?> 
     
     <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
    
    
   </div>
 
	</div>
</section>

<section>

<ul class="contact-button">
	
	<li><h3>Interested in working with us?</h3></li>
	<li><a class="button" href="#">Contact Us</a></li>
	</ul>
</section>




<?php get_footer(); ?>
