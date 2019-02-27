<footer id="footer_trigger">
	
	<?php if(!is_page_template('page-templates/template-contact.php')) {?>
	
		<div class="footer_inner">
		
			<div class="footer_angled_box"></div><!-- angled_box -->
		
			<div id="consultation" class="footer_inner_content">
		
				<span class="footer_title">request your<br/> free consultation</span>
				
				<span class="footer_intro">We do not charge for an initial consultation and collects no fees unless compensation is recovered for you. </span><!-- footer_intro -->
			
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
		
			<div class="single_location">
				
				<div class="locaton_svg one">
			
					<?php echo file_get_contents("wp-content/themes/koonz/images/form_icon-01.svg"); ?>
				
				</div><!-- locaton_svg -->
				
				<span class="location_title">District of Columbia</span><!-- location_title -->
				
				<span class="address">2001 Pennsylvania<br/> Ave NW #450<br/> Washington, DC 20006</span><!-- address -->
				
				<a class="get_directions" href="https://www.google.com/maps/place/2001+Pennsylvania+Ave+NW+%23450,+Washington,+DC+20006/@38.9016158,-77.0473204,17z/data=!4m13!1m7!3m6!1s0x89b7b7b0a8cf5f31:0x22747da1ab2e7624!2s2001+Pennsylvania+Ave+NW+%23450,+Washington,+DC+20006!3b1!8m2!3d38.9016158!4d-77.0451317!3m4!1s0x89b7b7b0a8cf5f31:0x22747da1ab2e7624!8m2!3d38.9016158!4d-77.0451317" target="_blank" rel="noopener">Map</a><!-- get_directions -->
				
				<a class="footer_phone" href="tel:2027963291">(202) 796-3291</a><!-- footer_phone -->
			
			</div><!-- single_location -->
			
			<div class="single_location">
				
				<div class="locaton_svg two">
			
					<?php echo file_get_contents("wp-content/themes/koonz/images/form_icon-02.svg"); ?>
				
				</div><!-- locaton_svg -->
				
				<span class="location_title">Virginia</span><!-- location_title -->
				
				<span class="address">Willow Wood Plaza<br/> 10300 Eaton Pl #200<br/> Fairfax, VA 22030</span><!-- address -->
				
				<a class="get_directions" href="https://www.google.com/maps/place/WillowWood+Plaza/@38.8615821,-77.3057135,17z/data=!3m1!4b1!4m5!3m4!1s0x89b64eba3238fb81:0x8ec61601329d0310!8m2!3d38.8615821!4d-77.3035248" target="_blank" rel="noopener">Map</a><!-- get_directions -->
				
				<a class="footer_phone" href="tel:7034982928">(703) 498-2928</a><!-- footer_phone -->
			
			</div><!-- single_location -->
			
			<div class="single_location">
				
				<div class="locaton_svg three">
			
					<?php echo file_get_contents("wp-content/themes/koonz/images/form_icon-03.svg"); ?>
				
				</div><!-- locaton_svg -->
				
				<span class="location_title">Maryland</span><!-- location_title -->
				
				<span class="address">6301 Ivy Ln #700<br> Greenbelt, MD 20770</span><!-- address -->
				
				<a class="get_directions" href="https://www.google.com/maps/place/6301+Ivy+Ln+%23700,+Greenbelt,+MD+20770/@39.0086958,-76.9010364,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7c3e962c19465:0x91bc102bb984adb8!8m2!3d39.0086958!4d-76.8988477" target="_blank" rel="noopener">Map</a><!-- get_directions -->
				
				<a class="footer_phone" href="tel:3016374614">(301) 637-4614</a><!-- footer_phone -->
			
			</div><!-- single_location -->
		
		</div><!-- footer_location_inner -->
		
	</div><!-- footer_location -->
	
	<div class="copyright_wrapper">
		
		<div class="copyright_inner">
			
			<div class="copyright_left">
				
				<ul>
					<li>&copy; <?php echo date("Y"); ?> Koonz, McKenney, Johnson, DePaolis & Lightfoot, L.L.P.</li>
					<li><a href="<?php bloginfo('url');?>/private-policy">Private Policy</a></li>
					<li><a href="<?php bloginfo('url');?>/sitemap">Sitemap</a></li>
					<li><a href="<?php bloginfo('url');?>/disclaimer">Disclaimer</a></li>
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
