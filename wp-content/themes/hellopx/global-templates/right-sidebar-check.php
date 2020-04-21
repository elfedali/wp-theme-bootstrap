<?php

/**
 * Right sidebar check
 *
 * @package helloPx
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

</div><!-- #closing the primary container from /global-templates/left-sidebar-check.php -->

<?php $sidebar_position = get_theme_mod('hellopx_sidebar_position');

?>

<?php if ('right' === $sidebar_position || 'both' === $sidebar_position) : ?>

   <?php get_template_part('sidebar-templates/sidebar', 'right'); ?>

<?php endif;
