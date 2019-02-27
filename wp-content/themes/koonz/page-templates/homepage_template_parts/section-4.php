<section id="section_four">
	
	<div class="sec_four_inner">
		
		<div class="sec_four_left">
			
			<span class="sec_four_title"><?php the_field( 'section_four_title' ); ?></span><!-- sec_four_title -->
			
			<span class="sec_four_intro"><?php the_field( 'section_four_intro' ); ?></span><!-- sec_four_intro -->
			
			<a class="view_all_button sec_four_button desktop" href="<?php the_field( 'section_four_view_all_results_link' ); ?>"><?php the_field( 'section_four_view_all_results_verbiage' ); ?></a>
			
		</div><!-- sec_four_left -->
		
		<div class="sec_four_right">
			
			
			<div class="sec_four_slider_wrapper">
				
				<div class="sec_four_slider">
					
					<?php if(get_field('section_four_case_results')): ?>
					 
						<?php while(has_sub_field('section_four_case_results')): ?>
					 
									<div class="sec_four_slide">
						
										<div class="sec_four_slide_reg">
							
											<?php echo file_get_contents("wp-content/themes/koonz/images/caseresults_icon-01.svg"); ?>
							
											<span class="sec_four_amount"><?php the_sub_field( 'amount' ); ?></span><!-- sec_four_amount -->
							
											<span class="sec_four_description"><?php the_sub_field( 'case_result_title' ); ?></span><!-- sec_four_description -->
							
											<span class="plus_sign">+</span><!-- plus_sign -->
							
									</div><!-- sec_four_slide_reg -->
						
									<div class="sec_four_slide_hover">
							
										<div class="sec_four_hover_inner">
							
											<span class="sec_four_hover_title"><?php the_sub_field( 'case_result_title' ); ?> </span><!-- sec_four_hover_title -->
							
											<span class="sec_four_hover_content"><?php the_sub_field( 'case_results_description' ); ?></span><!-- sec_four_hover_content -->
							
									</div><!-- sec_four_hover_inner -->
												
								</div><!-- sec_four_slide_hover -->
						
							</div><!-- sec_four_slide -->

					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
					
				</div><!-- sec_four_slider -->
				
				<div class="sec_four_button_wrapper">
					
					<div class="sec_four_button sec_four_button_left">
						
						<?php echo file_get_contents("wp-content/themes/koonz/images/arrow.svg"); ?>
						
						<span>Prev</span>
						
					</div><!-- sec_four_button -->
					
					<div class="sec_four_button sec_four_button_right">
						
						<span>Next</span>
						
						<?php echo file_get_contents("wp-content/themes/koonz/images/arrow.svg"); ?>
						
					</div><!-- sec_four_button -->
					
				</div><!-- sec_four_button_wrapper -->
				
			</div><!-- sec_four_slider_wrapper -->
			
			<a class="view_all_button sec_four_button mobile" href="<?php the_field( 'section_four_view_all_results_link' ); ?>"><?php the_field( 'section_four_view_all_results_verbiage' ); ?></a>
			
		</div><!-- sec_four_right -->
		
	</div><!-- sec_four_inner -->
	
</section><!-- section_four -->