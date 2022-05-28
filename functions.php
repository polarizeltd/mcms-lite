<?php
/**
 * mcms Functions
 *
 * @package mcms
 * @subpackage mcms
 * @since mcms 1.0
 */

if (!defined('mcms_VERSION'))
{
    // Replace the version number of the theme on each release.
    define('mcms_VERSION', '1.1.8');
}

/**
 * mcms Includes
 *
 * @package mcms
 */

if ( ! defined( 'mcms_css_uri' ) ) {
	define( 'mcms_css_uri', untrailingslashit( get_template_directory_uri() ) . '/assets/css' );
}

if ( ! defined( 'mcms_css_dir_path' ) ) {
	define( 'mcms_css_dir_path', untrailingslashit( get_template_directory() ) . '/assets/css' );
}

/**
 * Theme Setup
 *
 * @return void
 */

function mcms_setup_theme() {

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * Adding this will allow you to select the featured image on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */

	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Some blocks in Gutenberg like tables, quotes, separator benefit from structural styles (margin, padding, border etc…)
	 * They are applied visually only in the editor (back-end) but not on the front-end to avoid the risk of conflicts with the styles wanted in the theme.
	 * If you want to display them on front to have a base to work with, in this case, you can add support for wp-block-styles, as done below.
	 * @see  Theme Styles.
	 * @link https://make.wordpress.org/core/2018/06/05/whats-new-in-gutenberg-5th-june/, https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
	 */
	add_theme_support( 'wp-block-styles' );

	/**
	 * Some blocks such as the image block have the possibility to define
	 * a "wide" or "full" alignment by adding the corresponding classname
	 * to the block’s wrapper ( alignwide or alignfull ). A theme can opt-in for this feature by calling
	 * add_theme_support( 'align-wide' ), like we have done below.
	 *
	 * @see  Wide Alignment
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
	 */
	add_theme_support( 'align-wide' );

	/**
	 * Loads the editor styles in the Gutenberg editor.
	 *
	 * Editor Styles allow you to provide the CSS used by WordPress’ Visual Editor so that it can match the frontend styling.
	 * If we don't add this, the editor styles will only load in the classic editor ( tiny mice )
	 *
	 * @see https://developer.wordpress.org/block-editor/developers/themes/theme-support/#editor-styles
	 */
	add_theme_support( 'editor-styles' );

	/**
	 *
	 * Path to our custom editor style.
	 * It allows you to link a custom stylesheet file to the TinyMCE editor within the post edit screen.
	 *
	 * Since we are not passing any parameter to the function,
	 * it will by default, link the editor-style.css file located directly under the current theme directory.
	 * In our case since we are passing 'assets/css/editor.css' path it will use that.
	 * You can change the name of the file or path and replace the path here.
	 *
	 * @see  add_editor_style(s
	 * @link https://developer.wordpress.org/reference/functions/add_editor_style/
	 */
	add_editor_style( [ 
	'style.css',
	'/assets/css/base.css',
	] );

	// Register Block Styles

	register_block_style(
		'core/image',
		array(
			'name'         => 'box-shadow',
			'label'        => __( 'Box Shadow', 'mcms-lite' ),
			'inline_style' => '.wp-block-image.is-style-box-shadow { box-shadow:0 20px 25px -5px rgb(0 0 0/0.1),0 8px 10px -6px rgb(0 0 0/0.1); }',
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'         => 'round',
			'label'        => __( 'Round Edges', 'mcms-lite' ),
			'inline_style' => '.wp-block-image.is-style-round { border-radius:5px; }',
		)
	);

	register_block_style(
		'core/video',
		array(
			'name'         => 'box-shadow',
			'label'        => __( 'Box Shadow', 'mcms-lite' ),
			'inline_style' => '.wp-block-video.is-style-box-shadow { box-shadow:0 20px 25px -5px rgb(0 0 0/0.1),0 8px 10px -6px rgb(0 0 0/0.1); }',
		)
	);

	register_block_style(
		'core/video',
		array(
			'name'         => 'round',
			'label'        => __( 'Round Edges', 'mcms-lite' ),
			'inline_style' => '.wp-block-video.is-style-round { border-radius:5px; }',
		)
	);

	// Add AMP support
	add_theme_support( 'amp' );

	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';
}

add_action( 'after_setup_theme', 'mcms_setup_theme' );

/**
 * Register Styles.
 */
function mcms_register_styles() {
	wp_register_style( 'base-css', mcms_css_uri . '/base.css', [], filemtime( mcms_css_dir_path . '/base.css' ), 'all' );
	wp_enqueue_style( 'base-css' );
}

add_action( 'wp_enqueue_scripts', 'mcms_register_styles' );

/**
 * Detect AMP plugin and remove lazy loading (loading=lazy) from the Site logo block until the option is availble in FSE or AMP
 * https://github.com/ampproject/amp-wp/issues/6942 - WordPress FSE and AMP-WP lazy loads the Gutenberg logo block resulting in an LCP error #6942
 */
include_once ABSPATH . 'wp-admin/includes/plugin.php';
 
if ( is_plugin_active( 'amp/amp.php' ) ) {
    //plugin is activated
add_filter(
	'wp_img_tag_add_loading_attr',
	static function ( $value, $image ) {
		if ( false !== strpos( $image, 'custom-logo' ) ) {
			$value = false;
		}
		return $value;
	},
	10,
	2
);
} 