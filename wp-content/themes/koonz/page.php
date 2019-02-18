<?php get_header(); ?>


<div id="internal_main">
	
	
<?php get_template_part('page-templates/internal','banner');?>

<div class="outer_container">
	
	<div class="container two_col">
		
		<div class="content_wrapper content">
			
			<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
			
			<div class="inner_content">
			
				<?php get_template_part( 'loop', 'page' ); ?>
			
			</div><!-- inner_content -->

		</div><!-- content_wrapper -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- container -->
	
</div><!-- outer_container -->
	
	
</div><!-- internal_main -->


<?php get_footer(); ?>
