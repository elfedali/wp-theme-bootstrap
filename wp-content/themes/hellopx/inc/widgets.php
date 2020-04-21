<?php
/**
 * Register widget area.
 *
 * @package helloPx
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Add filter to the parameters passed to a widget's display callback.
 * The filter is evaluated on both the front and the back end!
 *
 * @link https://developer.wordpress.org/reference/hooks/dynamic_sidebar_params/
 */



 /**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hellopx_widgets_init() {
	register_sidebar(
      array(
         'name'          => __( 'Right Sidebar', 'hellopx' ),
         'id'            => 'right-sidebar',
         'description'   => __( 'Right sidebar widget area', 'hellopx' ),
         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
         'after_widget'  => '</aside>',
         'before_title'  => '<h3 class="widget-title">',
         'after_title'   => '</h3>',
      )
   );

   register_sidebar(
      array(
         'name'          => __( 'Left Sidebar', 'hellopx' ),
         'id'            => 'left-sidebar',
         'description'   => __( 'Left sidebar widget area', 'hellopx' ),
         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
         'after_widget'  => '</aside>',
         'before_title'  => '<h3 class="widget-title">',
         'after_title'   => '</h3>',
      )
   ); 
 

   register_sidebar(
      array(
         'name'          => __( 'Top Full', 'hellopx' ),
         'id'            => 'statichero',
         'description'   => __( 'Full top widget with dynamic grid', 'hellopx' ),
         'before_widget' => '<div id="%1$s" class="static-hero-widget %2$s dynamic-classes">',
         'after_widget'  => '</div><!-- .static-hero-widget -->',
         'before_title'  => '<h3 class="widget-title">',
         'after_title'   => '</h3>',
      )
   );

   register_sidebar(
      array(
         'name'          => __( 'Footer Full', 'hellopx' ),
         'id'            => 'footerfull',
         'description'   => __( 'Full sized footer widget with dynamic grid', 'hellopx' ),
         'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
         'after_widget'  => '</div><!-- .footer-widget -->',
         'before_title'  => '<h3 class="widget-title">',
         'after_title'   => '</h3>',
      )
   );
}
add_action( 'widgets_init', 'hellopx_widgets_init' );