<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package helloPx
 */
$container_html_class = get_theme_mod('hellopx_container_type');

get_header();

?>

<section id="primary" class="content-area">
	<div class="<?php echo esc_attr($container_html_class); ?>" id="content" tabindex="-1">
		<div class="row">
			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part('global-templates/left-sidebar-check'); ?>

			<main id="main" class="site-main">
				<?php
				if (have_posts()) :

					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part('template-parts/content', get_post_type());

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>

			</main>
			<!-- The pagination component -->
			<?php //understrap_pagination(); 
			?>

			<!-- Do the right sidebar check -->
			<?php get_template_part('global-templates/right-sidebar-check'); ?>
		</div>
	</div>
</section><!-- #primary -->

<?php
get_footer();
