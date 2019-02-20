<div class="att_sidebar_wrapper">
	
	<div class="att_sidebar">
		
		<div class="attt_bio_image">
			
			<?php $attorney_image = get_field( 'attorney_image' ); ?>
			
			<?php if ( $attorney_image ) : ?>
			
				<img class="desktop" src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>"/>
			
			<?php else:?>
				
				<img class="desktop" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Attorney Placeholder" />
			
			<?php endif;?>
			
		</div><!-- attt_bio_image -->
		
		<div class="att_bio_content">
			
			<div class="att_bio_contact_info">
				
				<?php if(get_field('att_bio_email')):?>
				
					<span class="att_bio_contact_title">Email</span><!-- att_bio_contact_title -->
				
					<a class="att_bio_contact" href="mailto:<?php the_field( 'att_bio_email' ); ?>"><?php the_field( 'att_bio_email' ); ?></a><!-- att_bio_contact -->
				
				<?php endif;?>
				
				<?php if(get_field('att_bio_phone')):?>
				
					<span class="att_bio_contact_title">Phone</span><!-- att_bio_contact_title -->
				
					<a class="att_bio_contact" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('att_bio_phone')); ?>"><?php the_field( 'att_bio_phone' ); ?></a><!-- att_bio_contact -->
				
				<?php endif;?>
				
				<?php if(get_field('att_bio_assistant')):?>
				
					<span class="att_bio_contact_title">Assistant</span><!-- att_bio_contact_title -->
				
					<span class="att_bio_contact"><?php the_field( 'att_bio_assistant' ); ?></span><!-- att_bio_contact -->
				
				<?php endif;?>
				
			</div><!-- att_bio_contact_info -->
			
			
			<?php $post_object = get_field( 'recent_news_post' ); ?>
			<?php if ( $post_object ): ?>
			<?php $post = $post_object; ?>
			<?php setup_postdata( $post ); ?> 
			
			<div class="recent_news_wrapper">
				
				<span class="recent_news_title">Recent News</span><!-- recent_news_title -->
				
				<span class="recent_news_post_title"><?php the_title();?></span><!-- recent_news_post_title -->
				
				<span class="recent_news_excerpt">
				
					<?php echo wp_trim_words( get_the_content(), 15, '...' );?>
				
				</span><!-- recent_news_excerpt -->
				
				<a class="sidebar_read_more" href="<?php the_permalink();?>">Read More</a><!-- sidebar_read_more -->
				
			</div><!-- recent_news_wrapper -->
			
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
			
			
			<?php if(get_field('attorney_bio_awards')): ?>
				
					<div class="att_bio_awards_wrapper">
						
						<div class="att_bio_awards">
			 
				<?php while(has_sub_field('attorney_bio_awards')): ?>
			 
						<div class="att_bio_single_award">
							
							<?php $award_logo = get_sub_field( 'award_logo' ); ?>
						
							<img src="<?php echo $award_logo['url']; ?>" alt="<?php echo $award_logo['alt']; ?>" />
						
						</div><!-- att_bio_single_award -->
			    
				<?php endwhile; ?>
					
						</div><!-- att_bio_awards -->
						
						<div class="att_bio_button_wrapper">
					
							<div class="att_bio_button att_bio_button_left">
						
								<?php echo file_get_contents("wp-content/themes/koonz/images/arrow.svg"); ?>
						
								<span>Prev</span>
						
							</div><!-- att_bio_button -->
					
							<div class="att_bio_button att_bio_button_right">
						
								<span>Next</span>
						
								<?php echo file_get_contents("wp-content/themes/koonz/images/arrow.svg"); ?>
						
							</div><!-- att_bio_button -->
					
						</div><!-- att_bio_button_wrapper -->

				</div><!-- att_bio_awards_wrapper -->
			 
			<?php endif; ?>
			
		</div><!-- att_bio_content -->
		
	</div><!-- att_sidebar -->
	
</div><!-- att_sidebar_wrapper -->
