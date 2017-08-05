<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vitrajstudio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vitrajstudio' ); ?></a>

	<header id="masthead" class="site-header">
		<?php 
		if ( is_front_page() ) : ?>
			<h1 class="site-description visually-hidden"><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></h1>
		<?php
		endif; ?>
		<div class="container-fluid">
			<div class="header-top row">
				<div class="col-sm-3">

				</div>
				<div class="site-branding col-sm-6">
					<?php
					if( $logo = get_custom_logo() ) :
						echo $logo;
					else : ?>
						<h2 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</h2>
					<?php
					endif; ?>
				</div>
				<div class="header-feedback col-sm-3">
					<a class="icon icon-tel" href="tel:<?php echo get_theme_mod( 'phone' ); ?>">
						<svg>
							<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-phone"></use>
						</svg>
					</a>
				</div>
			</div><!-- .site-branding -->
			
			<nav id="site-navigation" class="main-navigation row">
				<img class="main-navigation__logo" src="<?php echo bloginfo('template_url'); ?>/img/nav-logo.png" width="23" height="26" alt="Логотип">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'vitrajstudio' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				<a class="icon icon-tel" href="tel:<?php echo get_theme_mod( 'phone' ); ?>">
					<svg>
						<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-phone"></use>
					</svg>
				</a>
			</nav><!-- #site-navigation -->
		</div><!-- #container-fluid -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">