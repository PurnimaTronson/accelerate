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
			
		
			
			 ?>
			
			<div>
				
				<h3 class="about-hero"><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. </h3>
				
			
			</div>
			
			
			
			
			
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


</section>



<section>
	 
<?php query_posts('post_type=services'); ?>
     <?php while ( have_posts() ) : the_post();
	
			$service_1 = get_field('service_1');
			$service_2 = get_field('service_2');			
			$service_3 = get_field('service_3');
			$service_4 = get_field('service_4');
			$service_description_1 = get_field('service_description_1');
			$service_description_2 = get_field('service_description_2');
			$service_description_3 = get_field('service_description_3');			
			$service_description_4 = get_field('service_description_4');
			$service_image_1 = get_field('service_image_1');
			$service_image_2 = get_field('service_image_2');
			$service_image_3 = get_field('service_image_3');
			$service_image_4 = get_field('service_image_4');

	
	?>
	        <div class="all-services">		         
	         		         <div class="align-right">
	         		         <h2><?php echo $service_1; ?></h2>
	         		         <h2><?php echo $service_3; ?></h2>	         		         
	         		         <p><?php echo $service_description_1; ?></p>
	         		         <p><?php echo $service_description_3; ?></p>

	         		         </div>
	         		         
	         		         <div class="align-left">
	         		         <h2><?php echo $service_2; ?></h2>
	         		         <h2><?php echo $service_4; ?></h2>
	         		         <p><?php echo $service_description_2; ?></p>
	         		         <p><?php echo $service_description_4; ?></p>
	         		         
	         		         
	         		         </div>
	         		         
	         		    
	      <div class="left">
		          <?php $service_image_1 = get_field("service_image_1"); ?>
		             <?php echo wp_get_attachment_image($service_image_1, $size); 
				
		  ?>
		   
		       	 <?php $service_image_3 = get_field("service_image_3"); ?>
		       	 <?php echo wp_get_attachment_image($service_image_3, $size); 
		  ?>	
	
		
		  
		  </div>
		  <!--End of image-align-->
		  
		  
		  <div class="right">
		  
		   <?php $service_image_2 = get_field("service_image_2"); ?>
		  <?php echo wp_get_attachment_image($service_image_2, $size); 
		  ?>
	       		   
		       
		  
      	 <?php $service_image_4 = get_field("service_image_4"); ?>
		             <?php echo wp_get_attachment_image($service_image_4, $size); 
		  ?>	
		  
		  
		  
				</div>
		  
		  

   </div> 
       
     
     <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
    
		

     
	
    

</section>

<section>

<ul class="contact-button">
	
	<li><h3>Interested in working with us?</h3></li>
	<li><a class="button" href="#">Contact Us</a></li>
	</ul>
</section>




<?php get_footer(); ?>
