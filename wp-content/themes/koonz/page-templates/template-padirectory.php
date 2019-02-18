<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div id="internal_main">
	
	
<?php get_template_part('page-templates/internal','banner');?>

<div class="outer_container">
	
		<h1 class="internal_header"><?php the_title();?></h1><!-- page_title -->
	
		<div class="pa_directory">
		
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
		</div><!-- pa_directory -->
		
</div><!-- internal_main -->

<?php get_footer(); ?>
