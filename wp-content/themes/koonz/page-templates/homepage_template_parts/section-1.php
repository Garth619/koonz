<section id="section_one">
	
		<?php $section_one_image = get_field( 'section_one_image' ); ?>

		<img class="hero" src="<?php echo $section_one_image['url']; ?>" alt="<?php echo $section_one_image['alt']; ?>" />

	<div class="img_overlay"></div><!-- img_overlay -->
		
		<div class="sec_one_inner_content">
			
			<div class="sec_one_video_wrapper" style="display:none;">
				
				<div class="mywistia wistia_embed wistia_async_<?php the_field( 'section_one_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- mywistia -->
				
				<div class="play_button_wrapper">
					
					<div class="play_circle"></div><!-- play_circle -->
					
				</div><!-- play_button_wrapper -->
				
				<span class="video_cta desktop"><?php the_field( 'section_one_wistia_call_to_action_desktop' ); ?></span><!-- video_cta -->
				
				<span class="video_cta mobile"><?php the_field( 'section_one_wistia_call_to_action_mobile' ); ?></span><!-- video_cta -->
				
			</div><!-- sec_one_video_wrapper -->
			
			<span class="sec_one_title"><?php the_field( 'section_one_title' ); ?></span><!-- sec_one_title -->
			
			<a class="button sec_one_button" href="#consultation"></a><!-- button -->
			
		</div><!-- sec_one_inner_content -->

</section><!-- section_one -->

