<?php 

/* Template Name: Attorney Directory */

get_header(); ?>


<div id="internal_main">

	<div class="outer_container">
	
		<h1 class="internal_header"><?php the_title();?></h1><!-- page_title -->
	
		<div class="meet_team_wrapper">
			
			<?php $meet_the_team = get_field( 'meet_the_team' ); ?>
			
			<?php if ( $meet_the_team ): ?>
			
				<?php foreach ( $meet_the_team as $post ):  ?>
					
					<?php setup_postdata ( $post ); ?>
						
						<div class="single_att_wrapper">
				
							<a href="<?php the_permalink();?>">
							
								<div class="single_att_inner">
									
									<?php $attorney_image = get_field( 'attorney_image' ); ?>
									
									<?php if ( $attorney_image ) : ?>
								
										<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
										
										<div class="single_att_overlay"></div><!-- single_att_overlay -->
									
									<?php else: ?>
									
										<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Attorney Placeholder" />
										
																			
									<?php endif;?>
								
								</div><!-- single_att_inner -->
								
								<span class="single_att_name"><?php the_title();?></span><!-- single_att_name -->
								
								<span class="single_att_position"><?php the_field( 'position' ); ?></span><!-- single_att_position -->
							
							</a>
							
						</div><!-- single_att_wrapper -->
				
				<?php endforeach; ?>
				
				<?php wp_reset_postdata(); ?>
				
				<?php endif; ?>
		
						
		</div><!-- meet_team_wrapper -->

	</div><!-- outer_container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>
