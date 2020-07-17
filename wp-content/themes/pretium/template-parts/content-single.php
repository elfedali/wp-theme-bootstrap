<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pretium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part('template-parts/_entry-header'); ?>

	<div class="post-inner" id="post-inner">
		<div class="entry-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-10 mx-auto">
						<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'pretium'),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post(get_the_title())
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__('Pages:', 'pretium'),
								'after'  => '</div>',
							)
						);
						?>
					</div>
				</div>
			</div>
		</div><!-- .entry-content -->
	</div>

	<footer class="entry-footer">
		<?php pretium_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->