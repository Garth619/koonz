<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">

<div class="outer_container">
	
	<div class="att_col">
			
			<?php get_template_part('sidebar-bio');?>
			
			<div class="att_container content">
				
				<h1 class="att_bio_header"><?php the_title();?></h1><!-- att_bio_header -->
				
				<span class="att_bio_subheader"><?php the_field( 'position' ); ?></span><!-- att_bio_subheader -->
				
				<?php $attorney_image = get_field( 'attorney_image' ); ?>
				
				<?php if ( $attorney_image ) : ?>
				
					<img class="att_bio_mobile" src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
				
				<?php else:?>
				
					<img class="att_bio_mobile" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Attorney Placeholder" />
				
				<?php endif;?>
				
				<?php get_template_part( 'loop', 'page' ); ?>
				
			</div><!-- att_container -->
			
		</div><!-- att_col -->
		
	</div><!-- outer_container -->
		
</div><!-- internal_main -->
	 	

<?php get_footer(); ?>
