<?php 

/* Template Name: Testimonials */

get_header(); ?>


<div id="internal_main">

<div class="outer_container">
	
		<h1 class="internal_header"><?php the_title();?></h1><!-- page_title -->
	
		<div class="testimonials_wrapper">
		
			<div class="testi_col">
				
				<?php if(get_field('testimonial_column_one')): ?>
				 
					<?php while(has_sub_field('testimonial_column_one')): ?>
				 
						<div class="single_testimonial">
					
							<?php echo file_get_contents("wp-content/themes/koonz/images/test-stars.svg"); ?>
					
							<span class="testi_header"><?php the_sub_field( 'intro' ); ?></span><!-- testi_header -->
					
							<span class="testi_content"><?php the_sub_field( 'content' ); ?></span><!-- testi_content -->
					
							<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
					
						</div><!-- single_testimonial -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
			</div><!-- testi_col -->
			
			<div class="testi_col">
				
				<?php if(get_field('testimonial_column_two')): ?>
				 
					<?php while(has_sub_field('testimonial_column_two')): ?>
				 
						<div class="single_testimonial">
					
							<?php echo file_get_contents("wp-content/themes/koonz/images/test-stars.svg"); ?>
					
							<span class="testi_header"><?php the_sub_field( 'intro' ); ?></span><!-- testi_header -->
					
							<span class="testi_content"><?php the_sub_field( 'content' ); ?></span><!-- testi_content -->
					
							<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
					
						</div><!-- single_testimonial -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- testi_col -->
		
		</div><!-- testimonials_wrapper -->
		
	</div><!-- outer_container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>
