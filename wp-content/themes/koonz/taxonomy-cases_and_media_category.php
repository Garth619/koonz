<?php get_header(); ?>


<div id="internal_main">
	
	
<?php get_template_part('page-templates/internal','banner');?>



<div class="outer_container">
	
	<div class="container two_col">
		
		<div class="content_wrapper blog_content content">
			
			<h1 class="page_title"><?php
					printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
			
			<div class="inner_content">
			
				<div class="blog_feed">
			
				<?php 
					
					$temp = $wp_query; 
					$wp_query = null; 
					$wp_query = new WP_Query(); 
					$wp_query->query('showposts=-1&post_type=cases_media'.'&paged='.$paged); 

					while ($wp_query->have_posts()) : $wp_query->the_post(); 
				
				?>

					
					<div class="single_blog_post">
		
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
						<div class="blog_meta">
			
							<span class="date">Posted on <?php $pfx_date = get_the_date(); echo $pfx_date ?> to </span><!-- date -->
			
							<?php echo get_the_category_list();?>
		
						</div><!-- blog_meta -->
		
						<div class="blog_excerpt">
			
							<?php echo wp_trim_words( get_the_content(), 39, '...' );?>
		
						</div><!-- blog_excerpt -->
		
						<a class="blog_read_more" href="<?php the_permalink();?>">Read More</a><!-- blog_read_more -->
			
						<?php edit_post_link( __( 'Edit'), '', '' ); ?>

					</div><!-- single_blog_post -->	


				<?php endwhile; ?>
				
				
				</div><!-- blog_feed -->
				
	
			<?php 
				$wp_query = null; 
				$wp_query = $temp;  // Reset
			?>

			
			</div><!-- inner_content -->

		</div><!-- content_wrapper -->
		
		<?php get_sidebar('casesmedia'); ?>
		
	</div><!-- container -->
	
</div><!-- outer_container -->
	
	
</div><!-- internal_main -->


				
			


<?php get_footer(); ?>


		



