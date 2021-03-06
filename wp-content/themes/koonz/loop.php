
<div class="blog_feed">

<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
		
<?php endwhile; // end of loop ?>

<?php endif; ?>


</div><!-- blog_feed -->

<div class="pagination">

	<?php wpbeginner_numeric_posts_nav(); ?>

</div><!-- pagination -->



