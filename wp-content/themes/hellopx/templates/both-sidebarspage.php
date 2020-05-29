<?php

/**
 * Template Name: Left and Right Sidebar Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package helloPX
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container_html_class = get_theme_mod('hellopx_container_type');
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr($container_html_class); ?>" id="content">

		<div class="row">

			<?php get_template_part('sidebar-templates/sidebar', 'left'); ?>

			<div class="<?php
							if (is_active_sidebar('left-sidebar') xor is_active_sidebar('right-sidebar')) : ?>col-md-9
							<?php
							elseif (is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar')) : ?>col-md-6
							<?php
							else : ?>col-md-12
							<?php
							endif; ?> content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while (have_posts()) : the_post(); ?>

						<?php get_template_part('template-parts/content', 'page'); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. 
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_template_part('sidebar-templates/sidebar', 'right'); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
