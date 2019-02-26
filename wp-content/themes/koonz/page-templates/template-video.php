<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">

	<div class="outer_container">
	
		<h1 class="internal_header"><?php the_title();?></h1><!-- page_title -->
	
		<div class="video_center_wrapper">
			
			
			<?php if(get_field('video_center')): ?>
			 
				<?php while(has_sub_field('video_center')): ?>
			 
						<div class="single_video_wrapper">
				
						<div class="single_video_inner_wrapper">
					
							<div class="mywistia_thumb wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=thumbnail"></div><!-- mywistia_thumb -->
					
								<div class="single_video_overlay">
						 
									<div class="play_button_wrapper">
					
									<div class="play_circle"></div><!-- play_circle -->
					
								</div><!-- play_button_wrapper -->
						 
					 		</div><!-- single_video_overlay -->
					
						</div><!-- single_video_inner_wrapper -->
				
						<span class="single_video_title wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=html"><?php the_sub_field( 'video_title' ); ?></span><!-- single_video_title -->
				
				</div><!-- single_video_wrapper -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- video_center_wrapper -->

	</div><!-- outer_container -->
		
</div><!-- internal_main -->

<?php get_footer(); ?>

<script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>
