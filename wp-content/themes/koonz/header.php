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

</head>

<body <?php body_class(); ?>>
	
	
	<header>
		
		<div class="header_left">
			
			<a class="" href="<?php bloginfo('url');?>">
				
				<img src="<?php bloginfo('template_directory');?>/images/hero_logo-01.svg"/>
				
			</a>
			
		</div><!-- header_left -->
		
		<div class="header_middle">
			
			<div class="phone_wrapper">
				
				<div class="phone_row">
					
					<span class="location_title">District of Columbia</span><!-- location_title -->
				
					<a class="phone" href="tel:2027963291">(202) 796-3291</a><!-- location_title -->
					
				</div><!-- phone_row -->
				
				<div class="phone_row">
					
					<span class="location_title">Virginia</span><!-- location_title -->
				
					<a class="phone" href="tel:7034982928">(703) 498-2928</a><!-- location_title -->
					
				</div><!-- phone_row -->
				
				<div class="phone_row">
					
					<span class="location_title">Maryland</span><!-- location_title -->
				
					<a class="phone" href="tel:3016374614">(301) 637-4614</a><!-- location_title -->
					
				</div><!-- phone_row -->
				
			</div><!-- phone_wrapper -->
			
			<a class="se_habla" href="">
				
				<span class="se_habla_title">se habla espaÑol </span><!-- se_habla_title -->
				
				<span class="se_habla_line"></span><!-- se_habla_line -->
			
			</a><!-- se_habla -->
			
		</div><!-- header_middle -->
		
		<div class="header_right">
			
			<a class="" href="tel:2027963291">
					
				<?php echo file_get_contents("wp-content/themes/koonz/images/content01_icon-01.svg"); ?>
				
				<span class="call_today">Call today for your free consultation</span><!-- call_today -->
				
			</a>
			
		</div><!-- header_right -->
		
	</header>
	
	<nav>
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
		
	</nav>
				


			