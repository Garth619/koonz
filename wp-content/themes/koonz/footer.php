<footer id="footer_trigger">
	
	<div class="footer_inner">
		
		<div class="footer_inner_content">
		
			<div class="footer_angled_box"></div><!-- angled_box -->
		
			<span class="footer_title">request your<br/> free consultation</span>
		
			<span class="footer_intro">We do not charge for an initial consultation and collects no fees unless compensation is recovered for you. </span><!-- footer_intro -->
		
			<div class="form_wrapper">
			
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
			</div><!-- form_wrapper -->
		
		</div><!-- footer_inner_content -->
		
	</div><!-- footer_inner -->
	
	<div class="footer_location">
		
		<div class="footer_location_inner">
		
			<div class="single_location">
				
				<div class="locaton_svg one">
			
					<?php echo file_get_contents("wp-content/themes/koonz/images/form_icon-01.svg"); ?>
				
				</div><!-- locaton_svg -->
				
				<span class="location_title">District of Columbia</span><!-- location_title -->
				
				<span class="address">2001 Pennsylvania<br/> Ave NW #450<br/> Washington, DC 20006</span><!-- address -->
				
				<a class="get_directions" href="">Map</a><!-- get_directions -->
				
				<a class="footer_phone" href="tel:2027963291">(202) 796-3291</a><!-- footer_phone -->
			
			</div><!-- single_location -->
			
			<div class="single_location">
				
				<div class="locaton_svg two">
			
					<?php echo file_get_contents("wp-content/themes/koonz/images/form_icon-02.svg"); ?>
				
				</div><!-- locaton_svg -->
				
				<span class="location_title">Virginia</span><!-- location_title -->
				
				<span class="address">Willow Wood Plaza<br/> 10300 Eaton Pl #200<br/> Fairfax, VA 22030</span><!-- address -->
				
				<a class="get_directions" href="">Map</a><!-- get_directions -->
				
				<a class="footer_phone" href="tel:7034982928">(703) 498-2928</a><!-- footer_phone -->
			
			</div><!-- single_location -->
			
			<div class="single_location">
				
				<div class="locaton_svg three">
			
					<?php echo file_get_contents("wp-content/themes/koonz/images/form_icon-03.svg"); ?>
				
				</div><!-- locaton_svg -->
				
				<span class="location_title">Maryland</span><!-- location_title -->
				
				<span class="address">6301 Ivy Ln #700<br> Greenbelt, MD 20770</span><!-- address -->
				
				<a class="get_directions" href="">Map</a><!-- get_directions -->
				
				<a class="footer_phone" href="tel:3016374614">(301) 637-4614</a><!-- footer_phone -->
			
			</div><!-- single_location -->
		
		</div><!-- footer_location_inner -->
		
	</div><!-- footer_location -->
	
</footer>

<?php wp_footer();?>

</body>
</html>
