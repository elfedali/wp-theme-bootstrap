<?php
/**
 * The right sidebar containing the main widget area
 *
 * @package helloPx
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if(!is_active_sidebar('right-sidebar')):  //if this is empty 
    return;
endif;

?>

<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
  <?php dynamic_sidebar('right-sidebar'); ?>
</div>