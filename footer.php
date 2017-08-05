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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'vitrajstudio' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'vitrajstudio' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'vitrajstudio' ), 'vitrajstudio', '<a href="https://automattic.com/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="popup closed">
	<div class="social-btns">
		<a class="icon icon-insta" href="<?php echo get_theme_mod( 'instagram' ); ?>" target="_blank">
			<svg>
				<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-instagram"></use>
			</svg>
		</a>
		<a class="icon icon-vk" href="<?php echo get_theme_mod( 'vk' ); ?>" target="_blank">
			<svg>
				<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-vk"></use>
			</svg>
		</a>
		<a class="icon icon-fb" href="<?php echo get_theme_mod( 'facebook' ); ?>" target="_blank">
			<svg>
				<use xlink:href="<?php echo bloginfo('template_url'); ?>/img/sprite.svg#icon-facebook"></use>
			</svg>
		</a>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
