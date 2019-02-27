<section id="section_five">
	
	<div class="sec_five_content">
		
		<span class="sec_five_title"><?php the_field( 'section_five_title' ); ?></span><!-- sec_five_title -->
		
		<div class="sec_five_slider_wrapper">
			
			<div class="sec_five_slider">
				
				<?php if(get_field('section_five_testimonials')): ?>
				 
					<?php while(has_sub_field('section_five_testimonials')): ?>
				 
						<div class="sec_five_slide">
					
							<div class="sec_five_slide_content">
						
								<?php the_sub_field( 'content' ); ?>
						
							</div><!-- sec_five_slide_content -->
					
							<span class="sec_five_name"><?php the_sub_field( 'name' ); ?></span><!-- sec_five_name -->
					
						</div><!-- sec_five_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- sec_five_slider -->
			
			<div class="sec_five_button_wrapper">
					
					<div class="sec_five_button sec_five_button_left">
						
						<?php echo file_get_contents("wp-content/themes/koonz/images/arrow.svg"); ?>
						
						<span>Prev</span>
						
					</div><!-- sec_five_button -->
					
					<div class="sec_five_button sec_five_button_right">
						
						<span>Next</span>
						
						<?php echo file_get_contents("wp-content/themes/koonz/images/arrow.svg"); ?>
						
					</div><!-- sec_five_button -->
					
				</div><!-- sec_five_button_wrapper -->
			
		</div><!-- sec_five_slider_wrapper -->
		
	</div><!-- sec_five_content -->
	
	<?php $section_five_image = get_field( 'section_five_image' ); ?>

	<img class="sec_five_bg" src="<?php echo $section_five_image['url']; ?>" alt="<?php echo $section_five_image['alt']; ?>" />

</section><!-- section_five -->