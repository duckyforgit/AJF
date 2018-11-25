<?php
/**
 * Allow users to select Topbar or Offcanvas menu. Adds body class of offcanvas or topbar based on which they choose. Add choice of background image
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_register_theme_customizer' ) ) :
	function foundationpress_register_theme_customizer( $wp_customize ) {

		// Create custom panels
		$wp_customize->add_panel(
			'mobile_menu_settings', array(
				'priority'       => 1000,
				'theme_supports' => '',
				'title'          => __( 'Mobile Menu Settings', 'foundationpress' ),
				'description'    => __( 'Controls the mobile menu', 'foundationpress' ),
			)
		);

		// Create custom field for mobile navigation layout
		$wp_customize->add_section(
			'mobile_menu_layout', array(
				'title'    => __( 'Mobile navigation layout', 'foundationpress' ),
				'panel'    => 'mobile_menu_settings',
				'priority' => 1000,
			)
		);

		// Set default navigation layout
		$wp_customize->add_setting(
			'foundationpress_mobile_menu_layout',
			array(
				'default' => __( 'topbar', 'foundationpress' ),
			)
		);

		// Add options for navigation layout
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'mobile_menu_layout',
				array(
					'type'     => 'radio',
					'section'  => 'mobile_menu_layout',
					'settings' => 'wpt_mobile_menu_layout',
					'choices'  => array(
						'topbar'    => 'Topbar',
						'offcanvas' => 'Offcanvas',
					),
				)
			)
		);

		// Create custom panel for background image
	$wp_customize->add_panel( 'featured_images', array(
		'priority'       => 70,
		'theme_supports' => '',
		'title'          => __( 'Featured Images', 'foundationpress' ),
		'description'    => __( 'Set background images for certain widgets.', 'foundationpress' ),
	) );
	// Add Featured Image for Hero Widget
	// Add section.
	$wp_customize->add_section( 'hero_background' , array(
		'title'      => __( 'Hero Background','foundationpress' ),
		'panel'      => 'featured_images',
		'priority'   => 20,
	) );
	// Add setting.
	$wp_customize->add_setting( 'hero_bg', array(
		'default'     => get_stylesheet_directory_uri() . '/dist/assets/images/hero-bg.jpg',
	) );
	// Add control.
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'hero_background_image', array(
			  'label'      => __( 'Add Hero Background Here, the width should be approx 1400px', 'foundationpress' ),
			  'section'    => 'hero_background',
			  'settings'   => 'hero_bg',
			  )
	) );

	$wp_customize->add_section( 'section_background' , array(
		'title'      => __( 'Section Background','foundationpress' ),
		'panel'      => 'featured_images',
		'priority'   => 20,
	) );
	// Add setting.
	$wp_customize->add_setting( 'section_bg', array(
		'default'     => get_stylesheet_directory_uri() . '/dist/assets/images/section-bg.jpg',
	) );
	// Add control.
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'section_background_image', array(
			  'label'      => __( 'Add Section Background Here, the width should be approx 1400px', 'foundationpress' ),
			  'section'    => 'section_background',
			  'settings'   => 'section_bg',
			  )
	) );

	}

	add_action( 'customize_register', 'foundationpress_register_theme_customizer' );

	// Add class to body to help w/ CSS
	add_filter( 'body_class', 'mobile_nav_class' );
	function mobile_nav_class( $classes ) {
		if ( ! get_theme_mod( 'foundationpress_mobile_menu_layout' ) || get_theme_mod( 'foundationpress_mobile_menu_layout' ) === 'topbar' ) :
			$classes[] = 'topbar';
		elseif ( get_theme_mod( 'foundationpress_mobile_menu_layout' ) === 'offcanvas' ) :
			$classes[] = 'offcanvas';
		endif;
		return $classes;
	}
endif;
