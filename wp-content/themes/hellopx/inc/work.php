<?php

/**
 *  helloPx Theme Customizer
 * 
 * @package helloPx
 */
defined('ABSPATH') || exit;

if (!function_exists('hellopx_theme_options_customize_register')) :

   function hellopx_theme_options_customize_register(WP_Customize_Manager $wp_customize)
   {
      // Do stuff with $wp_customize, the WP_Customize_Manager object.
      // Add all your Customizer content (i.e. Panels, Sections, Settings & Controls) here...

      $wp_customize->add_panel(
         'header_navigation_panel',
         array(
            'title' => __('Header & Navigation'),
            'description' => esc_html__('Adjust your Header and Navigation sections.'), // Include html tags such as 

            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
         )
      );

      /**
       * Add our Sample Section
       */
      $wp_customize->add_section(
         'default_controls_section',
         array(
            'title' => __('Sample Custom Controls'),
            'description' => esc_html__('These are an example of Customizer Custom Controls.'),
            'panel' => '', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
         )
      );

      $wp_customize->add_setting(
         'sample_default_text',
         array(
            'default' => '', // Optional.
            'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
            'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            'theme_supports' => '', // Optional. Rarely needed
            'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
            'sanitize_callback' => '', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
            'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
            'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
         )
      );



      $wp_customize->add_setting(
         'sample_default_text',
         array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => function ($input, $setting) {
               return $input;
            }
         )
      );

      $wp_customize->add_control(
         'sample_default_text',
         array(
            'label' => __('Default Text Control'),
            'description' => esc_html__('Text controls Type can be either text, email, url, number, hidden, or date'),
            'section' => 'default_controls_section',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'text', // Can be either text, email, url, number, hidden, or date
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            'input_attrs' => array( // Optional.
               'class' => 'my-custom-class',
               'style' => 'border: 1px solid rebeccapurple',
               'placeholder' => __('Enter name...'),
            ),
         )
      );
   }
endif;
add_action('customize_register', 'hellopx_theme_options_customize_register');



if (!function_exists('default_controls_section')) :

   function default_controls_section(WP_Customize_Manager $wp_customize)
   {
      // Add a section 
      $wp_customize->add_section(
         "section_google_fonts",
         [
            'priority' => 160,
            'capability' => 'edit_theme_options',
            'title' => esc_html__('Google Fonts', 'hellopx'),
            'description' => 'Choose a google font for you website',

         ]
      );
      // Add a setting
      $wp_customize->add_setting(
         'setting_google_fonts',
         [
            'type' => 'theme_mod',
            'default' => '',
            'transport' => 'refresh',
            'capability' => 'edit_theme_options',
         ]
      );

      $wp_customize->add_control(
         'setting_google_fonts',
         [
            'label'=> __('Choose your google font','hellopx'),
            'description' => __('These font are fetch from the google font website'),
            'type'=>'text',
            'section'=> 'section_google_fonts',

         ]
      );


      // Add a control

   }
endif;
add_action('customize_register', 'default_controls_section');