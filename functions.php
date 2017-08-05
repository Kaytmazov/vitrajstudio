<?php
/**
 * vitrajstudio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vitrajstudio
 */

if ( ! function_exists( 'vitrajstudio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vitrajstudio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vitrajstudio, use a find and replace
		 * to change 'vitrajstudio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vitrajstudio', get_template_directory() . '/languages' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'vitrajstudio' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'vitrajstudio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vitrajstudio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vitrajstudio_content_width', 640 );
}
add_action( 'after_setup_theme', 'vitrajstudio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vitrajstudio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vitrajstudio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vitrajstudio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'vitrajstudio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vitrajstudio_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap.min.css', array(), '3.3.7' );

	wp_enqueue_style( 'slick', get_template_directory_uri() . '/libs/slick/slick.css', array(), '1.6.0' );

	wp_enqueue_style( 'vitrajstudio-style', get_stylesheet_uri() );

	wp_register_script('slick-js', get_template_directory_uri() . '/libs/slick/slick.min.js', array('jquery'), '1.6.0', true);
  wp_enqueue_script('slick-js');

	if ( is_front_page() ) {
    wp_add_inline_script( 'slick-js', '
      jQuery(".home-slider").slick({ 
        autoplay: true, 
				dots: true,
				speed: 1500,
				fade: true,
				cssEase: "liner", 
				responsive: [
					{
						breakpoint: 768,
						settings: {
							arrows: false
						}
					},
				]
      });'
    );
  }

	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/dev/app.js', array('jquery'), null, true );

	wp_enqueue_script( 'vitrajstudio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'vitrajstudio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vitrajstudio_scripts' );

/**
 * Подключаем Google Fonts
 */
function include_google_fonts() {
  if (!is_admin()) {
    wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic', array(), null, 'all');
    wp_enqueue_style('googlefont');
  }
}
add_action('wp_enqueue_scripts', 'include_google_fonts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Отключаем Toolbar на сайте
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Зарегистрировать размер изображений для слайдера
 */
if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'slider-photo', 1920, 800, true ); //(cropped)
}