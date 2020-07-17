<?php

/**
 *  Customizer
 * @package pretium
 *
 */

// Load Kirki customizer framework
include_once dirname(__FILE__) . '/kirki/kirki.php';

if (!class_exists('Kirki')) :
   return;
endif;

// Register Kirki config
Kirki::add_config('pretium_settings', [
   'capability'    => 'edit_theme_options',
   'option_type' => 'theme_mod',
]);

// Header option
Kirki::add_section('pretium_section_id', [
   'priority' => 101,
   'title' => __('Site web', 'pretium'),
   'description' => __('These are settings for your website', 'pretium')
]);

Kirki::add_field( 'pretium_settings', [
	'type'     => 'text',
	'settings' => 'name',
	'label'    => esc_html__( 'Text Control', 'pretium' ),
	'section'  => 'pretium_section_id',
	'default'  => esc_html__( 'This is a default value', 'pretium' ),
	'priority' => 10,
] );

Kirki::add_field( 'pretium_settings', array(
   'type'        => 'checkbox',
   'settings'    => 'site_description',
   'label'       => __( 'Display site description', 'shamrock' ),
   'section'     => 'pretium_section_id',
   'default'     => 1,
) );