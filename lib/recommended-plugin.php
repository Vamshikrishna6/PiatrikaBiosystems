<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'startnext_register_required_plugins' );

function startnext_register_required_plugins() {

	$plugins = array(
		
		array(
			'name'               => esc_html__('StartNext Toolkit', 'startnext'),
			'slug'               => 'startnext-toolkit',
			'source'             => get_stylesheet_directory() . '/lib/plugins/startnext-toolkit.zip', 
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false,
		),

		array(
			'name'               => esc_html__('Advanced Custom Fields Pro', 'startnext'),
			'slug'               => 'advanced-custom-fields-pro',
			'source'             => get_stylesheet_directory() . '/lib/plugins/advanced-custom-fields-pro.zip', 
			'required'           => true,
		),

		array(
			'name'               => esc_html__('Elementor Page Builder', 'startnext'),
			'slug'               => 'elementor',
			'required'           => false,
		),

		array(
			'name'               => esc_html__('Elementor Pro', 'startnext'),
			'slug'               => 'elementor-pro',
			'source'             => get_stylesheet_directory() . '/lib/plugins/elementor-pro.zip',
			'required'           => false,
		),


		// WPBakery Page Builder
		array(
			'name'               => esc_html__('WPBakery Page Builder', 'startnext'),
			'slug'               => 'js_composer',
			'source'             => get_stylesheet_directory() . '/lib/plugins/js_composer.zip', 
			'required'           => false,
			'force_activation'   => false,
			'force_deactivation' => false,
		),

		// StartNext Plugin
		array(
			'name'      => esc_html__('ACF: Font Awesome Field', 'startnext'),
			'slug'      => 'advanced-custom-fields-font-awesome',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('WooCommerce', 'startnext'),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => esc_html__('Contact Form 7', 'startnext'),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => esc_html__('Newsletter', 'startnext'),
			'slug'      => 'newsletter',
			'required'  => false,
		),
		array(
			'name'      => esc_html__('One Click Demo Import', 'startnext'),
			'slug'      => 'one-click-demo-import',
			'required'  => false,
        ),
	);

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true, 
		'dismissable'  => true, 
		'dismiss_msg'  => '',   
		'is_automatic' => false, 
		'message'      => '',                      
	);
	tgmpa( $plugins, $config );
}