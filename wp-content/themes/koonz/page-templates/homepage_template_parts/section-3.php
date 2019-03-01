<section id="section_three">
	
	<div class="sec_image_wrapper">
		
		
		<?php if(get_field('section_three_image')): ?>
		 
			<?php while(has_sub_field('section_three_image')): ?>
		 
				<div>
			
					<?php $image = get_sub_field( 'image' ); ?>
		
					<img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	
				</div>
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
	</div><!-- sec_image_wrapper -->
	
	<div class="sec_three_content content">
		
		<?php $secthreesvg = get_field('section_three_svg');?>
		
		<?php echo file_get_contents("wp-content/themes/koonz/images/" . $secthreesvg . ""); ?>
		
		<span class="sec_three_title"><?php the_field( 'section_three_intro_title' ); ?></span><!-- sec_three_title -->
		
		<?php the_field( 'section_three_content' ); ?>
		
	</div><!-- sec_three_content -->
	
</section><!-- section_three -->