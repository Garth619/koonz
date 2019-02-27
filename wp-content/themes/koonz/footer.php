<footer id="footer_trigger">
	
	<?php if(!is_page_template('page-templates/template-contact.php')) {?>
	
		<div class="footer_inner">
		
			<div class="footer_angled_box"></div><!-- angled_box -->
		
			<div id="consultation" class="footer_inner_content">
		
				<span class="footer_title"><?php the_field( 'footer_title' ); ?></span>
				
				<span class="footer_intro"><?php the_field( 'footer_subheader' ); ?> </span><!-- footer_intro -->
			
				<div class="form_wrapper">
			
					<?php gravity_form(1, false, false, false, '', true, 12); ?>
				
					<span class="required">
				
						<span class="asterisk">*</span>
					
						required field
				
					</span><!-- required -->
			
				</div><!-- form_wrapper -->
		
			</div><!-- footer_inner_content -->
		
		</div><!-- footer_inner -->
	
	<?php } ?>
	
	<div class="footer_location">
		
		<div class="footer_location_inner">
			
			<?php if(get_field('firm_locations','options')): ?>
			 
				<?php while(has_sub_field('firm_locations','options')): ?>
			 
					<div class="single_location">
				
						<div class="locaton_svg <?php the_sub_field( 'location_class' ); ?>">
							
							<?php $footerlocation = get_sub_field('location_svg');?>
			
							<?php echo file_get_contents("wp-content/themes/koonz/images/" . $footerlocation . ""); ?>
				
						</div><!-- locaton_svg -->
				
						<span class="location_title"><?php the_sub_field( 'location_title' ); ?></span><!-- location_title -->
				
						<span class="address"><?php the_sub_field( 'address' ); ?></span><!-- address -->
				
						<a class="get_directions" href="<?php the_sub_field( 'google_maps_link' ); ?>" target="_blank" rel="noopener">Map</a><!-- get_directions -->
				
						<a class="footer_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_sub_field('phone')); ?>"><?php the_sub_field( 'phone' ); ?></a><!-- footer_phone -->
			
					</div><!-- single_location -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
				
		</div><!-- footer_location_inner -->
		
	</div><!-- footer_location -->
	
	<div class="copyright_wrapper">
		
		<div class="copyright_inner">
			
			<div class="copyright_left">
				
				<ul>
					<li>&copy; <?php echo date("Y"); ?> <?php the_field( 'firm_name','option'); ?></li>
					
					<?php if(get_field('private_policy','option')):?>
					
						<li><a href="<?php the_field( 'private_policy','option'); ?>">Private Policy</a></li>
					
					<?php endif;?>
					
					<?php if(get_field('sitemap','option')):?>
					
						<li><a href="<?php the_field( 'sitemap','option'); ?>">Sitemap</a></li>
					
					<?php endif;?>
					
					<?php if(get_field('disclaimer','option')):?>
					
						<li><a href="<?php the_field( 'disclaimer','option'); ?>">Disclaimer</a></li>
					
					<?php endif;?>
				</ul>
				
			</div><!-- copyright_left -->
			
			<div class="copyright_right">
				
				<div class="social_media">
					
					<a class="fb" href="https://www.facebook.com/Koonz.McKenney.Johnson.DePaolis.Lightfoot" target="_blank" rel="noopener">
						
						<?php echo file_get_contents("wp-content/themes/koonz/images/footer_logo-01.svg"); ?>
						
					</a>
					
					<a class="yt" href="https://www.youtube.com/user/koonzlaw" target="_blank" rel="noopener">
						
						<?php echo file_get_contents("wp-content/themes/koonz/images/footer_logo-02.svg"); ?>
						
					</a>
					
					<a class="twitter" href="https://twitter.com/Koonz_McKenney" target="_blank" rel="noopener">
						
						<?php echo file_get_contents("wp-content/themes/koonz/images/footer_logo-03.svg"); ?>
						
					</a>
					
					<a class="linkedin" href="https://www.linkedin.com/company/koonz-mckenney-johnson-depaolis-&-lightfoot-l-l-p-" target="_blank" rel="noopener">
						
						<?php echo file_get_contents("wp-content/themes/koonz/images/footer_logo-04.svg"); ?>
						
					</a>
					
				</div><!-- social_media -->
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
					
					<?php echo file_get_contents("wp-content/themes/koonz/images/footer_logo-05.svg"); ?>
					
				</a><!-- ilawyer -->
				
			</div><!-- copyright_right -->
			
		</div><!-- copyright_inner -->
		
	</div><!-- copyright_wrapper 0-->
	
</footer>

<?php wp_footer();?>

</body>
</html>
