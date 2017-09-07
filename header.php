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
	<header id="masthead" class="site-header">
		<?php 
		if ( is_front_page() ) : ?>
			<h1 class="site-description visually-hidden"><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></h1>
		<?php
		endif; ?>
		<div class="container-fluid">
			<div class="header-top row">
				<div class="site-branding">
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
				<button type="button" class="icon icon-tel">
					<svg>
						<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-phone"></use>
					</svg>
				</button>
			</div><!-- .header-top -->
			
			<nav id="site-navigation" class="main-navigation row">
				<img class="main-navigation__logo" src="<?php echo bloginfo('template_url'); ?>/img/nav-logo.png" width="23" height="26" alt="Логотип">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				<button type="button" class="icon icon-tel">
					<svg>
						<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-phone"></use>
					</svg>
					</button>
			</nav><!-- #site-navigation -->
		</div><!-- #container-fluid -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">