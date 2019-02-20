<?php get_header(); ?>


<div id="internal_main">
	
	
<?php get_template_part('page-templates/internal','banner');?>



<div class="outer_container">
	
	<div class="container two_col">
		
		<div class="content_wrapper blog_content content">
			
			<h1 class="page_title">Our Blog</h1><!-- page_title -->
			
			<div class="inner_content">
			
				<?php get_template_part( 'loop', 'index' );?>
			
			</div><!-- inner_content -->

		</div><!-- content_wrapper -->
		
		<?php get_sidebar('blog'); ?>
		
	</div><!-- container -->
	
</div><!-- outer_container -->
	
	
</div><!-- internal_main -->



<?php get_footer(); ?>
