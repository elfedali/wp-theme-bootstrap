<?php

/**
 * // On the cover page template, output the cover header.
 * @package pretium
 */

	$cover_header_style   = '';
	$cover_header_classes = '';

	$color_overlay_style   = '';
	$color_overlay_classes = '';

	$image_url = ! post_password_required() ? get_the_post_thumbnail_url( get_the_ID(), 'fullscreen' ) : '';

	if ( $image_url ) {
		$cover_header_style   = ' style="background-image: url( ' . esc_url( $image_url ) . ' );"';
		$cover_header_classes = ' bg-image';
	}

	// Get the color used for the color overlay.
	$color_overlay_color = get_theme_mod( 'cover_template_overlay_background_color' );
	if ( $color_overlay_color ) {
		$color_overlay_style = ' style="color: ' . esc_attr( $color_overlay_color ) . ';"';
	} else {
		$color_overlay_style = '';
	}

	// Get the fixed background attachment option.
	if ( get_theme_mod( 'cover_template_fixed_background', true ) ) {
		$cover_header_classes .= ' bg-attachment-fixed';
	}

	// Get the opacity of the color overlay.
	$color_overlay_opacity  = get_theme_mod( 'cover_template_overlay_opacity' );
	$color_overlay_opacity  = ( false === $color_overlay_opacity ) ? 80 : $color_overlay_opacity;
	$color_overlay_classes .= ' opacity-' . $color_overlay_opacity;
?>
 <!-- Page Header -->
 <header class="masthead <?php echo $cover_header_classes?>" <?php echo $cover_header_style ?> >
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo get_the_title(); ?></h1>
            <!--<h2 class="subheading">Problems look mighty small from 150 miles up</h2>-->
            <span class="meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2019</span>
          </div>
        </div>
      </div>
    </div>
  </header>
<?php /*
<header class="entry-header bg-danger">
   <?php
   if (is_singular()) :
      the_title('<h1 class="entry-title">', '</h1>');
   else :
      the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
   endif;

   if ('post' === get_post_type()) :
      ?>
      <div class="entry-meta">
         <?php
            pretium_posted_on();
            pretium_posted_by();
            ?>
      </div><!-- .entry-meta -->
   <?php endif; ?>
</header><!-- .entry-header --> */ ?>