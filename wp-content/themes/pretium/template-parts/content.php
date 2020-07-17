<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pretium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("d-none"); ?>>
	<header class="entry-header">
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				pretium_posted_on();
				pretium_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php pretium_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pretium' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pretium' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pretium_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php  /************ Second one ********/ ?>


<article id="post-<?php the_ID(); ?>" <?php post_class("smr-post"); ?>>

	<div class="entry-header-wrapper">

		<?php $format = get_post_format(); ?>


			<figure class="post-thumbnail">
				<?php echo pretium_post_thumbnail(); ?>
			</figure>

		<header class="entry-header">

				<?php the_category();  ?>

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( $meta = pretium_get_meta_data() ) : ?>
				<div class="entry-meta">
					<?php echo $meta; ?>
				</div>
			<?php endif;?>

		</header>

	</div>

	<div class="entry-content">
		<?php /* if ( shamrock_get_option( 'content_type' ) == 'content' ) : ?>
			<?php the_content( __('Continue reading', 'shamrock') ); ?>
		<?php else : ?>
			<p><?php echo shamrock_get_excerpt(); ?></p>
			<p><a href="<?php echo esc_url( get_permalink() ); ?>" class="more-link"><?php _e('Continue reading', 'shamrock'); ?></a></p>
		<?php endif; */?>
		<?php the_content(); ?>
	</div>
</article>
