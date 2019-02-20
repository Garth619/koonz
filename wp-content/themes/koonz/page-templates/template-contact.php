<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_main">

	<div class="outer_container">
	
		<div class="contact_wrapper">
			
			<div class="contact_inner">
				
				<h1 class="contact_title"><?php the_title();?></h1><!-- contact_title -->
				
				<span class="contact_subheader">We do not charge for an initial consultation and collects no fees unless compensation is recovered for you. </span><!-- contact_subheader -->
				
				<div class="contact_page_form">
				
					<?php gravity_form(1, false, false, false, '', true, 12); ?>
				
					<span class="required">
				
						<span class="asterisk">*</span>
					
							required field
				
						</span><!-- required -->
				
					</div><!-- contact_page_form -->
				
			</div><!-- contact_inner -->
			
		</div><!-- contect_inner -->

	</div><!-- outer_container -->
		
</div><!-- internal_main -->


			
<?php get_footer(); ?>