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



<style>


<?php the_field( 'review_css','option'); ?>

@import url("https://use.typekit.net/wde8ipm.css");

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
				
					<a class="phone" href="">(202) 796-3291</a><!-- location_title -->
					
				</div><!-- phone_row -->
				
				<div class="phone_row">
					
					<span class="location_title">Virginia</span><!-- location_title -->
				
					<a class="phone" href="">(703) 498-2928</a><!-- location_title -->
					
				</div><!-- phone_row -->
				
				<div class="phone_row">
					
					<span class="location_title">Maryland</span><!-- location_title -->
				
					<a class="phone" href="">(301) 637-4614</a><!-- location_title -->
					
				</div><!-- phone_row -->
				
			</div><!-- phone_wrapper -->
			
			<a class="se_habla" href="">Se habla Espanol</a><!-- se_habla -->
			
		</div><!-- header_middle -->
		
		<div class="header_right"></div><!-- header_right -->
		
	</header>
	
	<nav>
		
		<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
		
	</nav>
				


			