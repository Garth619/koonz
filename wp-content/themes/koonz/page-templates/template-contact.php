<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_main">

	<div class="outer_container">
	
		<div class="contact_wrapper">
			
			<div class="contact_inner">
				
				<h1 class="contact_title"><?php the_title();?></h1><!-- contact_title -->
				
				<span class="contact_subheader"><?php the_field( 'contact_subheader' ); ?> </span><!-- contact_subheader -->
				
				<div class="contact_page_form">
				
					<?php gravity_form(1, false, false, false, '', true, 12); ?>
				
					<span class="required">
				
						<span class="asterisk">*</span>
					
							required field
				
						</span><!-- required -->
				
					</div><!-- contact_page_form -->
				
			</div><!-- contact_inner -->
			
		</div><!-- contect_inner -->
		
		<?php $contact_page_image = get_field( 'contact_page_image' ); ?>
		
		<img class="contact_page_bg" src="<?php echo $contact_page_image['url']; ?>" alt="<?php echo $contact_page_image['alt']; ?>" />

	</div><!-- outer_container -->
		
</div><!-- internal_main -->


			
<?php get_footer(); ?>