<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package starter
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function starter_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'starter_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function starter_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'starter_pingback_header' );

/** RESPONSIVE IMAGE **/
/**  @param: id | image id's **/
/**  @param: class | image classes **/
/**  @return: image tag **/
function responsive_image( $mobile, $desktop, $class ) { ?>
	<?php 
		$alt = get_post_meta( $desktop, '_wp_attachment_image_alt', true) ? get_post_meta( $desktop, '_wp_attachment_image_alt', true) : get_post_meta( $mobile, '_wp_attachment_image_alt', true);
	?>
	<picture>
		<source media="(max-width: 650px)" srcset="<?= wp_get_attachment_image_url( $mobile, 'full' ) ?>" />
		<source media="(min-width: 651px)" srcset="<?= wp_get_attachment_image_url( $deskto, 'full' ) ?>" />
		<img data-src="<?= wp_get_attachment_image_url( $desktop, 'full' ) ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" class="<?= $class ?>" alt="<?= $alt ?>" />
	</picture>

<?php }

/** RESPONSIVE IMAGE **/
/**  @param: id | image id's **/
/**  @param: aspect | 'a16x9 | a1x1 | a4x3' **/
/**  @return: image tag **/
function image( $id, $aspect ) { ?>
	<div class="aspect <?= $aspect ?>">
		<img data-src="<?= wp_get_attachment_image_url( $id, 'full' ) ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= get_post_meta( $id, '_wp_attachment_image_alt', true) ?>">
	</div>
<?php }

/** GET PHONE **/
function get_phone() {
	return get_field('phone_number', 'option') ? '<a href="tel:' . get_field('phone_number', 'option') . '">' . get_field('phone_number', 'option') . '</a>' : null;
}

/** GET EMAIL **/
function get_email() {
	return get_field('email', 'option') ? '<a href="mailto:' . get_field('email', 'option') . '">' . get_field('email', 'option') . '</a>' : null;
}

/** GET ADDRESS **/
function get_address() {
	return get_field('address', 'option') ? get_field('address', 'option') : null;
}

/** GET FOOTER LOGO **/
function get_footer_logo() {
	return get_field('footer_logo', 'option') ? '<img src="' . get_template_directory_uri() . '/img/placeholder.png" data-src="' . get_field('footer_logo', 'option')['url'] . '" alt="Logo of ' . get_bloginfo('name') . '">' : null;
}

/** GET HEADER LOGO **/
function get_header_logo() {
	return get_field('site_logo', 'option') ? '<img src="' . get_template_directory_uri() . '/img/placeholder.png" data-src="' . get_field('site_logo', 'option')['url'] . '" alt="Logo of ' . get_bloginfo('name') . '">' : the_custom_logo();
}