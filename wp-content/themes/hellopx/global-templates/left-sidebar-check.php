<?php

/**
 * Left sidebar check
 *
 * @package helloPx
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$sidebar_position = get_theme_mod('hellopx_sidebar_position');

?>

<?php if ('left' === $sidebar_position || 'both' === $sidebar_position) : ?>
   <?php get_template_part('sidebar-templates/sidebar', 'left'); ?>
<?php endif; ?>

<div class="col-md content-area" id="primary">