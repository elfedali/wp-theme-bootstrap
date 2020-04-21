<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package helloPx
 */

get_header();
$container_html_class = get_theme_mod('hellopx_container_type');
?>

<section id="primary" class="search-area">

	<div class="<?php echo esc_attr($container_html_class); ?>" id="content" tabindex="-1">

		<div class="row">
			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part('global-templates/left-sidebar-check'); ?>
			<main id="main" class="site-main">

				<?php if (have_posts()) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf(esc_html__('Search Results for: %s', 'hellopx'), '<span>' . get_search_query() . '</span>');
							?>
						</h1>
					</header><!-- .page-header -->

				<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part('template-parts/content', 'search');

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php //hellopx_pagination(); 
			?>

			<!-- Do the right sidebar check -->
			<?php get_template_part('global-templates/right-sidebar-check'); ?>
		</div>
	</div>

</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
