<?php

/**
 * Enqueue scripts and styles.
 *
 * @package helloPx
 */


function hellopx_scripts()
{

	$theme_version = wp_get_theme()->get('Version');
	$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
	/* css/theme.min.css */
	wp_enqueue_style('hellopx-style', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version);

	/* js/bootstrap.min.js */
	wp_enqueue_script('hellopx-bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.4.1', true);

	/* js/jquery.bxslider.js */
	wp_enqueue_script('hellopx-bxslider-scripts', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), '4.2.1d', true);

	/* js/main.js */
	$script_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/hellopx-main.js');
	wp_enqueue_script('hellopx-main-scripts', get_template_directory_uri() . '/js/hellopx-main.js', array('jquery'), $script_version, true);

	wp_enqueue_script('hellopx-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'hellopx_scripts');
