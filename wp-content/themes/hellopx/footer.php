<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package helloPx
 */

$container_html_class = get_theme_mod('hellopx_container_type');
?>
</div><!-- #content -->
<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<footer id="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="footer-info">
					<div class="section-title">
						<?php if (!has_custom_logo()) : ?>
							<h2>
								<a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
									<?php bloginfo('name'); ?>
								</a>
							</h2>
						<?php else : ?>
							<?php the_custom_logo(); ?>
						<?php endif; ?>
					</div>
					<address>
						<p>1800 dapibus a tortor pretium,<br>
							Integer nisl dui, ABC 12000</p>
					</address>
					<ul class="social-icon">
						<li><a href="https://www.free-css.com/free-css-templates" class="fa fa-facebook-square" attr="facebook icon"></a></li>
						<li><a href="https://www.free-css.com/free-css-templates" class="fa fa-twitter"></a></li>
						<li><a href="https://www.free-css.com/free-css-templates" class="fa fa-instagram"></a></li>
					</ul>
					<div class="copyright-text">
					<p>Copyright <?php echo get_bloginfo('name') ?> <?php echo date('Y') ?></p>
						<p>Design: TemplateMo</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="footer-info">
					<div class="section-title">
						<h2>Contact Info</h2>
					</div>
					<address>
						<p>+65 2244 1100, +66 1800 1100</p>
						<p><a href="https://www.free-css.com/free-css-templates">hello@youremail.co</a></p>
					</address>
					<div class="footer_menu">
						<h2>Quick Links</h2>
						<ul>
							<li><a href="https://www.free-css.com/free-css-templates">Career</a></li>
							<li><a href="https://www.free-css.com/free-css-templates">Investor</a></li>
							<li><a href="https://www.free-css.com/free-css-templates">Terms &amp; Conditions</a></li>
							<li><a href="https://www.free-css.com/free-css-templates">Refund Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="footer-info newsletter-form">
					<div class="section-title">
						<h2>Newsletter Signup</h2>
					</div>
					<div>
						<div class="form-group">
							<form action="#" method="post">
								<input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
								<input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
							</form>
							<span><sup>*</sup> Please note - we do not spam your email.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>