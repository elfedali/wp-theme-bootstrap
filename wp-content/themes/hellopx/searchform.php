<?php

/**
 * The template for displaying search forms
 *
 * @package helloPx
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
	<div class="form-group">
		<label class="sr-only" for="s"><?php esc_html_e('Search', 'hellopx'); ?></label>
		<input class="field form-control" id="s" name="s" type="text" placeholder="<?php esc_attr_e('Search &hellip;', 'hellopx'); ?>" value="<?php the_search_query(); ?>">
	</div>
</form>