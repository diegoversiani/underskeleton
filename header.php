<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underskeleton
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'underskeleton' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    <?php $container_class_header = get_theme_mod( 'underskeleton_header_container_class', true ) ? 'container' : '' ?>
		<div class="site-header__content <?php echo esc_attr( $container_class_header ); ?>">

			<?php

			if ( get_header_image() ) :
			?>
				<div class="row">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-header-image" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
					</a>
				</div>
			<?php
			endif;
			?>
		
		<div class="row">
			<div class="site-branding">
				<?php
				
				if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}

				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<?php endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif;

				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="bars"></span>
					<span class="bars"></span>
					<span class="bars"></span>
				</button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

		</div><!-- .row -->
		</div>

	</header><!-- #masthead -->

	<?php $container_class_content = get_theme_mod( 'underskeleton_content_container_class', true ) ? 'container' : '' ?>
	<div id="content" class="site-content  <?php echo esc_attr( $container_class_content ); ?>">
