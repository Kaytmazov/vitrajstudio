<?php
/*
Template Name: Шаблон для страницы Контакты
*/

get_header(); ?>

  <div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<?php
				while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="container">
						<header class="entry-header">
							<h1 class="section-title page-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->

						<div class="contacts-page">
							<div class="row">
								<div class="col-sm-4">
									<h3 class="contacts-title">Мы в соцсетях</h3>
									<div class="social-btns">
										<a class="icon icon-instagram" href="<?php echo get_theme_mod( 'instagram' ); ?>" target="_blank">
											<svg>
												<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-instagram"></use>
											</svg>
										</a>
										<a class="icon icon-vk" href="<?php echo get_theme_mod( 'vk' ); ?>" target="_blank">
											<svg>
												<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-vk"></use>
											</svg>
										</a>
										<a class="icon icon-fb" href="<?php echo get_theme_mod( 'fb' ); ?>" target="_blank">
											<svg>
												<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-facebook"></use>
											</svg>
										</a>
									</div>
								</div>
								<div class="col-sm-4">
									<h3 class="contacts-title">Наши контакты</h3>
									<div class="map-phones">
										<a href="tel:<?php echo get_theme_mod( 'phone' ); ?>"><?php echo get_theme_mod( 'phone' ); ?></a><br>
										<a href="tel:<?php echo get_theme_mod( 'phone_2' ); ?>"><?php echo get_theme_mod( 'phone_2' ); ?></a>
									</div>
								</div>
								<div class="col-sm-4">
									<h3 class="contacts-title">Наш адрес</h3>
									<div class="map-address">
										<p><?php echo get_theme_mod( 'street' ); ?></p>
									</div>
								</div>
							</div><!-- /.row -->
						</div><!-- /.contacts-page -->
					</div>
				</article><!-- #post-<?php the_ID(); ?> -->
				
			<?php endwhile; // End of the loop.
			?>

			

			<div id="map" class="map"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();