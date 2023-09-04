<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://use.fontawesome.com/872d49b404.js"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding wrapper">
			<div class="header-main">
				<div class="header-logo">
					<a href="<?php echo site_url(); ?>"><?= get_header_logo(); ?></a>
				</div>
				<div class="header-menu">
					<span class="mobile-menu js-mobile-open"></span>
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
								'menu_class'        => 'navbar-nav align-items-center',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div class="mobile-navigation">
		<span class="js-mobile-close"></span>
		<nav id="site-navigation" class="mobile-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'mobile-menu',
				 	'menu_class'        => 'navbar-nav align-items-center',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>
