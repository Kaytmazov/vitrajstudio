<?php
/**
 * vitrajstudio Theme Customizer
 *
 * @package vitrajstudio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vitrajstudio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'vitrajstudio_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'vitrajstudio_customize_partial_blogdescription',
		) );
	}

	// Добавляем секцию настроек контактов
  $wp_customize->add_section( 'contacts_options', array(
      'title'     => 'Контакты',
      'priority'  => 50
    )
  );
  // Телефон
  $wp_customize->add_setting( 'phone', array(
      'default'            => '8 (8722) 92-44-11', // текст по умолчанию
      'transport'          => 'refresh'
    )
  );
  $wp_customize->add_control( 'phone', array(
      'section'  => 'contacts_options', // id секции
      'label'    => 'Телефон',
      'type'     => 'text' // текстовое поле
    )
  );
  // Телефон 2
  $wp_customize->add_setting( 'phone_2', array(
    'default'            => '8 (8722) 92-44-11', // текст по умолчанию
    'transport'          => 'refresh'
  )
);
$wp_customize->add_control( 'phone_2', array(
    'section'  => 'contacts_options', // id секции
    'label'    => 'Телефон 2',
    'type'     => 'text' // текстовое поле
  )
);
  // Адрес
  $wp_customize->add_setting( 'street', array(
      'default'            => 'г. Махачкала, ул.Энгельса, 1Д', // текст по умолчанию
      'transport'          => 'refresh'
    )
  );
  $wp_customize->add_control( 'street', array(
      'section'  => 'contacts_options', // id секции
      'label'    => 'Адрес',
      'type'     => 'text' // текстовое поле
    )
  );
  // Email
  $wp_customize->add_setting( 'email', array(
      'default'            => 'vitrajstudio.vs@yandex.ru', // текст по умолчанию
      'transport'          => 'refresh'
    )
  );
  $wp_customize->add_control( 'email', array(
      'section'  => 'contacts_options', // id секции
      'label'    => 'E-mail',
      'type'     => 'text' // текстовое поле
    )
  );
	// Instagram
  $wp_customize->add_setting( 'instagram', array(
      'default'            => 'https://www.instagram.com/', // текст по умолчанию
      'transport'          => 'refresh'
    )
  );
  $wp_customize->add_control( 'instagram', array(
      'section'  => 'contacts_options', // id секции
      'label'    => 'Instagram',
      'type'     => 'text' // текстовое поле
    )
  );
	// Вконтакте
  $wp_customize->add_setting( 'vk', array(
      'default'            => 'https://www.vk.com/', // текст по умолчанию
      'transport'          => 'refresh'
    )
  );
  $wp_customize->add_control( 'vk', array(
      'section'  => 'contacts_options', // id секции
      'label'    => 'Вконтакте',
      'type'     => 'text' // текстовое поле
    )
  );
  // Facebook
  $wp_customize->add_setting( 'facebook', array(
      'default'            => 'https://www.facebook.com/', // текст по умолчанию
      'transport'          => 'refresh'
    )
  );
  $wp_customize->add_control( 'facebook', array(
      'section'  => 'contacts_options', // id секции
      'label'    => 'Facebook',
      'type'     => 'text' // текстовое поле
    )
  );
}
add_action( 'customize_register', 'vitrajstudio_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function vitrajstudio_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function vitrajstudio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function vitrajstudio_customize_preview_js() {
	wp_enqueue_script( 'vitrajstudio-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'vitrajstudio_customize_preview_js' );
