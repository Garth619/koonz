<div class="internal_banner">
	
	<div class="internal_banner_inner">
	
		<span><?php the_field( 'interna_banner_title','option'); ?></span>
		
		<a class="banner_button" href="#consultation">Click For Your Free Consultation</a>
	
	</div><!-- internal_banner_inner -->
	
	<?php $internal_banner_image = get_field( 'internal_banner_image','option'); ?>

	<img src="<?php echo $internal_banner_image['url']; ?>" alt="<?php echo $internal_banner_image['alt']; ?>" />

</div><!-- internal_banner -->