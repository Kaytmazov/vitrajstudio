<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vitrajstudio
 */

?>
		<?php
		if ( !is_page_template('tpl_contacts-page.php') ) : ?>
			<section class="location">
				<h2 class="section-title">Контакты и местоположение</h2>
				<div id="map" class="map">
					<div class="contacts">
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
						<h3 class="contacts-title">Наши контакты</h3>
						<div class="map-phones">
							<a href="tel:<?php echo get_theme_mod( 'phone' ); ?>"><?php echo get_theme_mod( 'phone' ); ?></a><br>
							<a href="tel:<?php echo get_theme_mod( 'phone_2' ); ?>"><?php echo get_theme_mod( 'phone_2' ); ?></a>
						</div>
						<h3 class="contacts-title">Наш адрес</h3>
						<div class="map-address">
							<p><?php echo get_theme_mod( 'street' ); ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php
		endif; ?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<p class="copyright">Copyright © <?php echo date('Y'); ?> "Vitraj Studio"</p>
		</div><!-- .container-fluid -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="popup popup-contacts">
	<div class="popup-content">
		<button type="button" class="icon icon-close">
			<svg>
				<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-close"></use>
			</svg>
		</button>
		<div class="container-fluid">
			<h3 class="popup-title">Контакты</h3>
			<div class="row">
				<div class="popup-box col-sm-4">
					<i class="icon icon-phone">
						<svg>
							<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-phone"></use>
						</svg>
					</i>
					<h3 class="popup-box-title">Телефоны</h3>
					<a href="tel:<?php echo get_theme_mod( 'phone' ); ?>" class="popup-box-value"><?php echo get_theme_mod( 'phone' ); ?></a><br>
					<a href="tel:<?php echo get_theme_mod( 'phone_2' ); ?>" class="popup-box-value"><?php echo get_theme_mod( 'phone_2' ); ?></a>
				</div>
				<div class="popup-box col-sm-4">
					<i class="icon icon-map">
						<svg>
							<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-map"></use>
						</svg>
					</i>
					<h3 class="popup-box-title">Адрес</h3>
					<p class="popup-box-value"><?php echo get_theme_mod( 'street' ); ?></p>
				</div>
				<div class="popup-box col-sm-4">
					<i class="icon icon-email">
						<svg>
							<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-email"></use>
						</svg>
					</i>
					<h3 class="popup-box-title">E-mail</h3>
					<a class="popup-box-value" href="mailto:<?php echo get_theme_mod( 'email' ); ?>" target="_blank"><?php echo get_theme_mod( 'email' ); ?></a>
				</div>
			</div><!-- .row -->
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
		</div><!-- .container-fluid -->
	</div><!-- .popup-content -->
	<div class="overlay"></div>
</div>

<?php wp_footer(); ?>

</body>
</html>
