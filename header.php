<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package digitalHustle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

	<!-- roboto font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'digitalhustle' ); ?></a>
	
	<header id="masthead" class="site-header">
		<nav class="navbar stick-top navbar-light bg-light">			
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
					<?php
				endif;

				$digitalhustle_description = get_bloginfo( 'description', 'display' );
				if ( $digitalhustle_description || is_customize_preview() ) :
					?>
					<div class="site-description"><?php echo $digitalhustle_description; /* WPCS: xss ok. */ ?></div>
				<?php endif; ?>
				
				<nav id="site-navigation" class="main-navigation">
					<div class="btn-group" role="group">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</div>
				</nav> <!-- site-navigation -->
				
			</div><!-- .site-branding -->
		</nav>
	</header><!-- #masthead -->
	

	<div id="content" class="site-content">
