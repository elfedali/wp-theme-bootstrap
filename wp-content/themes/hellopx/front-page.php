 <?php
   /**
    * The front page template 
    *
    * This is the most generic template file in a WordPress theme
    * 
    * @package hellopx
    */

   // Exit if accessed directly.
   defined('ABSPATH') || exit;

   get_header();

   $container_html_class = get_theme_mod('hellopx_container_type');

   ?>

 <?php if (is_front_page() && is_home()) : ?>
    <?php get_template_part('global-templates/hero'); ?>
 <?php endif; ?>

 <div class="wrapper" id="index-wrapper">

    <div class="front-page-slider-wrap">
       <?php get_template_part('template-parts/block/new-posts-slider'); ?>
    </div>
    <div class="<?php echo esc_attr($container_html_class); ?>" id="content" tabindex="-1">

       <div class="row">

          <!-- Do the left sidebar check and opens the primary div -->
          <?php //get_template_part( 'global-templates/left-sidebar-check' ); 
            ?>

          <main class="site-main d-none" id="main">

             <?php if (have_posts()) : ?>

                <?php /* Start the Loop */ ?>

                <?php while (have_posts()) : the_post(); ?>

                   <?php

                     /*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
                     get_template_part('template-parts/content', get_post_format());
                     ?>

                <?php endwhile; ?>

             <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

             <?php endif; ?>

          </main><!-- #main -->

          <!-- The pagination component -->
          <?php //hellopx_pagination(); 
            ?>

          <!-- Do the right sidebar check -->
          <?php //get_template_part( 'global-templates/right-sidebar-check' ); 
            ?>

       </div><!-- .row -->

    </div><!-- #content -->

 </div><!-- #index-wrapper -->
 <?php
   get_footer();
