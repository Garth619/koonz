<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">

<div class="outer_container">
	
	<div class="att_col">
			
			<?php get_template_part('sidebar-bio');?>
			
			<div class="att_container content">
				
				<!-- 		<h1 class="att_bio"><?php the_title();?></h1> --><!-- page_title -->
				
					<?php //get_template_part( 'loop', 'page' ); ?>
				
			</div><!-- att_container -->
			
		</div><!-- att_col -->
		
	</div><!-- outer_container -->
		
</div><!-- internal_main -->
	 	

<?php get_footer(); ?>
