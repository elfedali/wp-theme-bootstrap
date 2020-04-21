<?php
/**
 * The left sidebar containing the main widget area
 *
 * @package helloPx
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if(!is_active_sidebar('left-sidebar')):  //if this is empty 
    return;
endif;

?>

<div class="col-md-3 widget-area" id="left-sidebar" role="complementary">
  <?php dynamic_sidebar('left-sidebar'); ?>
</div>