<?php
/**
 * mcms: Block Patterns
 *
 * @since mcms 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since mcms 1.0
 *
 * @return void
 */
function mcms_register_block_patterns() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'mcms-lite' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'mcms-lite' ) ),
		'header'   => array( 'label' => __( 'Headers', 'mcms-lite' ) ),
		'query'    => array( 'label' => __( 'Query', 'mcms-lite' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'mcms-lite' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since mcms 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'mcms_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'footer-default',
		'footer-logo',
		'footer-navigation',
		'footer-social-copyright',
		'footer-about-title-logo',
		'footer-blog',
		'footer-social-about-newsletter',
		'general-subscribe',
		'general-pricing-table',
		'general-divider-light',
		'general-divider-dark',
		'general-quote-with-cover-image-background',
		'header-default',
		'header-text-cta-button-image',
		'header-logo-navigation-offset-tagline',
		'header-title-and-button',
		'header-centered-logo',
		'header-centered-title-navigation-social',
		'header-text-with-two-cta-buttons-and-image',
		'header-text-cta-and-image',
		'hidden-404',
		'hidden-heading-and-image',
		'page-layout-two-columns',
		'page-sidebar-poster',
		'page-sidebar-grid-posts',
		'page-sidebar-blog-posts',
		'page-sidebar-blog-posts-right',
		'page-bakery',
		'page-careercoach',
		'page-cake',
		'page-copywriter',
		'page-consultancy',
		'profile-page-with-links',
		'stats-cta-button-text',
		'pricing-section-cta-button',
		'query-default',
		'query-simple-blog',
		'query-grid',
		'query-text-grid',
		'query-image-grid',
		'query-large-titles',
		'query-irregular-grid',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since mcms 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'mcms_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'mcms/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'mcms_register_block_patterns', 9 );
