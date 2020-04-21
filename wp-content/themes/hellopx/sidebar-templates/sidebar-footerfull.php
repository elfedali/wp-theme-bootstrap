<?php

/**
 * Sidebar setup for footer full
 *
 * @package helloPx
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container_html_class = get_theme_mod('hellopx_container_type');

?>

<?php if (is_active_sidebar('footerfull')) : ?>


   <div class="wrapper bg-primary p-5 text-white" id="wrapper-footer-full">

      <div class="<?php echo esc_attr($container_html_class); ?>" id="footer-full-content" tabindex="-1">

         <div class="row">

            <div class="col-md-12"> 
               <?php dynamic_sidebar('footerfull'); ?>
            </div>

         </div>

      </div>

   </div><!-- #wrapper-footer-full -->

<?php endif;
