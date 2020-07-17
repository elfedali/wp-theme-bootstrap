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
 * @package pretium
 */
$container_html_class = get_theme_mod('hellopx_container_type');
get_header();
?>

<main id="primary" class="site-main">
	<?php if ('container' === $container_html_class) : ?>
		<div class="container">
		<?php endif; ?>

		<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			<div class="row">
				<div class="col-lg-6 col-md-10 mx-auto">
					<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
							get_template_part('template-parts/content', get_post_type());

						endwhile; ?>
				</div>
			</div>
		<?php
			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>
		<?php if ($container_html_class === 'container') : ?>
		</div>
	<?php endif; ?>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
