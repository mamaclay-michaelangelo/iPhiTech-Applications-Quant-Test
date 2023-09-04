<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-main">
			<div class="wrapper">
				<div class="footer-content">
					<div class="footer-logo">
						<?= get_footer_logo(); ?>
					</div>
					<div class="footer-newsletter text-light">
						<p class="subheader">SUBSCRIBE NOW</p>
						<p>Get product drops straight to your inbox or be featured to our newsletter!</p>

						<form>
							<div class="form-newsletter flex flex-wrap items-center">
								<div class="form-group w-full">
									<input type="text" class="form-control w-full" placeholder="Your Full Name">
								</div>
								<div class="form-group w-full">
									<input type="email" class="form-control w-full" placeholder="Your Email">
								</div>
								<div class="form-submit text-center">
									<button type="submit" class="btn btn-primary">
									  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="footer-menu">
					<nav id="site-navigation" class="footer-navigation">
						<?php
						wp_nav_menu(
							array(
								'menu' => 'Footer Menu',
								'menu_id'        => 'footer-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>

			</div>
		</div>
		<div class="site-info">
			<div class="wrapper">
				Copyright &copy; <?= date('Y') ?> | <?= get_bloginfo('name'); ?>. All Rights Reserved.
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
