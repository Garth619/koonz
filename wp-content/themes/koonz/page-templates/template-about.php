<?php 

/* Template Name: About */

get_header(); ?>


<div id="internal_main">
	


<div class="outer_container">
	
	<div class="about_wrapper">
		
		<div class="about_content content">
			
			<h1 class="about_page_title"><?php the_title();?></h1><!-- about_page_title -->
			
			<?php the_field( 'about_content' ); ?>
			
		</div><!-- about_content -->
		
		<div class="about_page_image_wrapper">
			
			<div>
				
				<?php $about_image_one = get_field( 'about_image_one' ); ?>
				
				<?php if ( $about_image_one ) { ?>
				
					<img src="<?php echo $about_image_one['url']; ?>" alt="<?php echo $about_image_one['alt']; ?>" />
				
				<?php } ?>
			
			</div>
			
			<div>
			
				<?php $about_image_two = get_field( 'about_image_two' ); ?>
				
				<?php if ( $about_image_two ) { ?>
				
					<img src="<?php echo $about_image_two['url']; ?>" alt="<?php echo $about_image_two['alt']; ?>" />
					
				<?php } ?>
			
			</div>
			
			<div>
			
				<?php $about_image_three = get_field( 'about_image_three' ); ?>
				
				<?php if ( $about_image_three ) { ?>
					
					<img src="<?php echo $about_image_three['url']; ?>" alt="<?php echo $about_image_three['alt']; ?>" />
				
				<?php } ?>
			
			</div>
			
		</div><!-- about_page_image_wrapper -->
		
	</div><!-- about_wrapper -->
	
	<div id="about_logo_trigger" class="about_page_slider_wrapper">
		
		<div class="about_page_slider">
			
			<?php if(get_field('about_page_awards')): ?>
			 
				<?php while(has_sub_field('about_page_awards')): ?>
			 
					<div class="about_page_slide">
				
						<?php $logo = get_sub_field( 'logo' ); ?>
						
						<?php if ( $logo ) { ?>
							
							<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
						
						<?php } ?>
				
					</div><!-- about_page_slide -->
			
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- about_page_slider -->
		
		<div class="about_page_button about_page_button_left">
			
			<?php echo file_get_contents("wp-content/themes/koonz/images/arrow.svg"); ?>
			
		</div><!-- about_page_button -->
		
		<div class="about_page_button about_page_button_right">
			
			<?php echo file_get_contents("wp-content/themes/koonz/images/arrow.svg"); ?>
			
		</div><!-- about_page_button -->
		
	</div><!-- about_page_slider_wrapper -->
	
	<div id="about_bottom_trigger" class="about_page_bottom_content content">
		
		<span class="about_bottom_content"><?php the_field( 'about_bottom_content_title' ); ?></span><!-- about_bottom_content -->
		
		<?php the_field( 'about_bottom_content' ); ?>
		
		<div class="about_bottom_blockquote_wrapper">
			
			<?php echo file_get_contents("wp-content/themes/koonz/images/content01_icon-01.svg"); ?>
			
			<span class="about_bottom_blockquote"><?php the_field( 'about_bottom_blockquote' ); ?></span><!-- about_bottom_blockquote -->
			
		</div><!-- about_bottom_blockquote_wrapper -->
		
	</div><!-- about_page_bottom_content -->
	
</div><!-- outer_container -->
	
	
</div><!-- internal_main -->

	
<?php get_footer(); ?>
