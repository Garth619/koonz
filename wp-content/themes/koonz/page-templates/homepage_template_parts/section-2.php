<section id="section_two">
	
	<div class="angled_box"></div><!-- angled_box -->
	
	
	
	<div class="selling_points_wrapper">
		
		<?php if(get_field('section_two_selling_points')): ?>
		 
			<?php while(has_sub_field('section_two_selling_points')): ?>
		 
						<div class="selling_point_box">
			
							<div class="selling_points_reg">
				
								<div class="svg_wrapper">
									
									<?php $svgicon = get_sub_field('svg_regular');?>
					
									<?php echo file_get_contents("wp-content/themes/koonz/images/" . $svgicon . ""); ?>
					
									<span class="blue_bg"></span><!-- blue_bg -->
					
								</div><!-- svg_wrapper -->
				
								<span class="selling_point_description"><?php the_sub_field( 'selling_points_title' ); ?> </span><!-- selling_point_description -->
				
							</div><!-- selling_points_reg -->
			
							<div class="selling_points_hover">
								
								<?php $svgiconhover = get_sub_field('svg_hover');?>
				
								<?php echo file_get_contents("wp-content/themes/koonz/images/" . $svgiconhover . ""); ?>
				
								<span class="selling_point_hover_description"><?php the_sub_field( 'selling_points_title' ); ?> </span><!-- selling_point_description -->
								<span class="selling_point_content"><?php the_sub_field( 'section_two_hover_description' ); ?></span><!-- selling_point_content -->
				
							</div><!-- selling_points_hover -->
			
						</div><!-- selling_point_box -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
						
	</div><!-- selling_points_wrapper -->
	
	
	<div id="sec_two_trigger" class="sec_two_content_wrapper">
		
		<h1 class="sec_two_header"><?php the_field( 'section_two_header' ); ?></h1><!-- sec_two_header -->
		
		<span class="sec_two_intro"><?php the_field( 'section_two_subheader' ); ?></span><!-- sec_two_intro -->
		
		<div class="sec_two_container">
			
			<div class="sec_two_content content">
				
				<?php the_field( 'section_two_content' ); ?>
				
			</div><!-- sec_two_content -->
			
			<div class="sec_two_sidebar">
				
				<span class="sec_two_sidebar_title"><?php the_field( 'section_two_sidebar_title' ); ?></span><!-- sec_two_sidebar_title -->
				
				<ul>
					
					<?php if(get_field('section_two_practice_areas_list')): ?>
					 
						<?php while(has_sub_field('section_two_practice_areas_list')): ?>
					 
							<li>
								<a class="" href="<?php the_sub_field( 'pa_link' ); ?>"><?php the_sub_field( 'pa_title' ); ?></a>
							</li>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</ul>
				
				<a class="view_all_button" href="
<?php the_field( 'view_all_practice_areas_page_link' ); ?>"><?php the_field( 'view_all_practice_areas_verbiage' ); ?></a><!-- view_all_button -->
				
			</div><!-- sec_two_sidebar -->
			
		</div><!-- sec_two_container -->
		
		
	</div><!-- sec_two_content_wrapper -->

	
</section><!-- section_two -->