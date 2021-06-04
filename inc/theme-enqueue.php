<?php
/**
 * toy enqueue scripts
 *
 * @package toy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'toy_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function toy_scripts() {

		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		// Styles
		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/main.min.css' );
		wp_enqueue_style( 'sd-boot', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $css_version );
		wp_enqueue_style( 'sd-about', get_template_directory_uri() . '/assets/css/contacts-about.css', array(), $css_version );
		wp_enqueue_style( 'sd-fb', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), $css_version );
		wp_enqueue_style( 'sd-form', get_template_directory_uri() . '/assets/css/jquery.formstyler.css', array(), $css_version );
		// wp_enqueue_style( 'sd-formst', get_template_directory_uri() . '/assets/css/jquery.formstyler.theme.css', array(), $css_version );
		wp_enqueue_style( 'sd-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), $css_version );
		wp_enqueue_style( 'sd-common', get_template_directory_uri() . '/assets/css/common.css', array(), $css_version );
		wp_enqueue_style( 'sd-styles', get_template_directory_uri() . '/assets/css/style.css', array(), $css_version );
		wp_enqueue_style( 'sd-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), $css_version );



		
		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/js/common.js' );



		wp_enqueue_script( 'sd-libs', get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), $js_version, true );

		// wp_enqueue_script( 'nm-map', 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.5.1/leaflet.js', array('jquery'), $js_version, true );
		

		wp_enqueue_script( 'nm-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array('sd-libs'), $js_version, true );
		wp_enqueue_script( 'nm-parallax', get_template_directory_uri() . '/assets/js/parallax.js', array('sd-libs'), $js_version, true );
		wp_enqueue_script( 'nm-popper', get_template_directory_uri() . '/assets/js/popper.js', array('sd-libs'), $js_version, true );
		wp_enqueue_script( 'sd-aos', 'https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js', array('jquery'), $js_version, true );

		wp_enqueue_script( 'nm-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('sd-libs'), $js_version, true );
		wp_enqueue_script( 'nm-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('sd-libs'), $js_version, true );
		wp_enqueue_script( 'nm-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('sd-libs'), $js_version, true );

		// wp_enqueue_script( 'nm-formstyler', get_template_directory_uri() . '/assets/js/jquery.formstyler.min.js', array('sd-libs'), $js_version, true );
		wp_enqueue_script( 'nm-common', get_template_directory_uri() . '/assets/js/common.js', array('sd-libs'), $js_version, true );

		wp_localize_script( 'nm-custom', '$nm_js', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		));

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'toy_scripts' );