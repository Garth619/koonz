<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://use.typekit.net/wde8ipm.css">

<style>


<?php the_field( 'review_css','option'); ?>


</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

<script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=egeg7rezwgsyqcalokd2fw';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>

</head>

<body <?php body_class(); ?>>
	
	
	<header>
		
		<div class="header_left">
			
			<a class="" href="<?php bloginfo('url');?>">
				
				<?php $firm_logo = get_field( 'firm_logo','option'); ?>
				
				<img src="<?php echo $firm_logo['url']; ?>" alt="<?php echo $firm_logo['alt']; ?>" />

			</a>
			
		</div><!-- header_left -->
		
		<div class="header_middle">
			
			<div class="phone_wrapper">
				
				<?php if(get_field('firm_locations','option')): ?>
				 
					<?php while(has_sub_field('firm_locations','option')): ?>
				 
						<div class="phone_row">
					
							<span class="location_title desktop"><?php the_sub_field( 'location_title' ); ?></span><!-- location_title -->
					
							<span class="location_title mobile"><?php the_sub_field( 'location_abbreviation' ); ?></span><!-- location_title -->
				
							<a class="phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_sub_field('phone')); ?>"><?php the_sub_field( 'phone' ); ?></a><!-- location_title -->
					
						</div><!-- phone_row -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
								
			</div><!-- phone_wrapper -->
			
			<a class="se_habla" href="<?php the_field( 'se_habla_espanol_link','option'); ?>">
				
				<span class="se_habla_title dekstop"><?php the_field( 'se_habla_espanol','option'); ?> </span><!-- se_habla_title -->
				
				<span class="se_habla_line"></span><!-- se_habla_line -->
			
			</a><!-- se_habla -->
			
		</div><!-- header_middle -->
		
		<div class="header_right">
			
			<a class="" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_main_phone','option')); ?>">
					
				<?php echo file_get_contents("wp-content/themes/koonz/images/content01_icon-01.svg"); ?>
				
				<span class="call_today">Call today for your free consultation</span><!-- call_today -->
				
			</a>
			
		</div><!-- header_right -->
		
		<div class="tablet_header_right">
			
			<div class="espanol">
				
				<a href="<?php the_field( 'se_habla_espanol_link','option'); ?>">ES</a>
			
			</div><!-- espanol -->
			
			<div class="menu_wrapper">
				
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				
				<span class="menu_title">Menu</span><!-- menu_title -->
				
			</div><!-- menu_wrapper -->
			
		</div><!-- tablet_header_right -->
		
		
	</header>
	
	<div class="mobile_espanol">
		
		<a class="" href="<?php bloginfo('url');?>/espanol-page"><?php the_field( 'se_habla_espanol','option'); ?></a>
		
	</div><!-- mobile_espanol -->
	
	<nav>
		
		<div class="mobile_close"></div><!-- mobile_close -->
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
		
	</nav>
	
	<div class="mobile_sub_nav">
		
		<div class="mobile_back">
			
			<?php echo file_get_contents("wp-content/themes/koonz/images/arrow.svg"); ?>
			
			<span>Back</span>
			
		</div><!-- mobile_back -->
		
		<div class="mobile_close"></div><!-- mobile_close -->
		
		<div class="mobile_sub_nav_list"></div><!-- mobile_sub_nav_list -->
		
	</div><!-- mobile_sub_nav -->
				


			