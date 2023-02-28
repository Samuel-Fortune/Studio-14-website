<?php
/**
 * Studio14 Theme Customizer
 *
 * @package Studio14
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function studio14_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'studio14_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'studio14_customize_partial_blogdescription',
			)
		);
	}
	/**
	 * Add our Footer & Navigation Panel
	 */
	$wp_customize->add_panel( 'footer_navigation_panel',
		array(
			'title' => __( 'Footer & Navigation' ),
			'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as 

			'priority' => 50, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
		)
	);
	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_section( 'footer_navigation_section',
		array(
			'title' => __( 'Footer Section' ),
			'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as 
			'panel' => 'footer_navigation_panel', 
		)
	);

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_address');

	/**
	 * Add our Footer & Navigation Section
	 */
		
	 $wp_customize->add_control( 'footer_address',
	 array(
	 'label' => __( 'Footer Address' ),
	 'description' => esc_html__( 'Enter Address Details Form that shows in footer' ),
	 'section' => 'footer_navigation_section',
	 'type' => 'textarea', 
	 'input_attrs' => array( // Optional.
		 'class' => 'address-field',
		 'style' => 'border: 1px solid purple',
		 'placeholder' => __( 'Enter name...' ),
		 ),
	    )
    );

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_address_2');

	/**
	 * Add our Footer & Navigation Section
	 */
		
	 $wp_customize->add_control( 'footer_address_2',
	 array(
	 'label' => __( 'Footer Address 2' ),
	 'description' => esc_html__( 'Enter Address Details Form that shows in footer' ),
	 'section' => 'footer_navigation_section',
	 'type' => 'textarea', 
	 'input_attrs' => array( // Optional.
		 'class' => 'address-field-2',
		 'style' => 'border: 1px solid purple',
		 'placeholder' => __( 'Enter name...' ),
		 ),
	    )
    );

		/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_address_3');

	/**
	 * Add our Footer & Navigation Section
	 */
		
	 $wp_customize->add_control( 'footer_address_3',
	 array(
	 'label' => __( 'Footer Address 3' ),
	 'description' => esc_html__( 'Enter Address Details Form that shows in footer' ),
	 'section' => 'footer_navigation_section',
	 'type' => 'textarea', 
	 'input_attrs' => array( // Optional.
		 'class' => 'address-field-3',
		 'style' => 'border: 1px solid purple',
		 'placeholder' => __( 'Enter name...' ),
		 ),
	    )
    );

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_email');

	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_control( 'footer_email',
		array(
		'label' => __( 'Footer Email' ),
		'description' => esc_html__( 'Enter Email that shows infooter' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( // Optional.
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);


	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_text');

	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_control( 'footer_text',
		array(
		'label' => __( 'Footer text' ),
		'description' => esc_html__( 'Enter text that shows infooter' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( // Optional.
			'class' => 'text-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);
	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_address_text');

}
add_action( 'customize_register', 'studio14_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function studio14_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function studio14_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function studio14_customize_preview_js() {
	wp_enqueue_script( 'studio14-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'studio14_customize_preview_js' );
