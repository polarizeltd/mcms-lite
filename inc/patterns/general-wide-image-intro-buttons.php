<?php
/**
 * Wide image with introduction and buttons block pattern
 */
return array(
	'title'      => __( 'Wide image with introduction and buttons', 'mcms-lite' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"align":"wide"} -->
				<div class="wp-block-group alignwide"><!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="' . esc_attr__( 'Placeholder image.', 'mcms-lite' ) . '"/></figure>
				<!-- /wp:image -->

				<!-- wp:columns {"verticalAlignment":null} -->
				<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom"} -->
				<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"style":{"typography":{"fontSize":"clamp(3.25rem, 8vw, 6.25rem)","lineHeight":"1.15"}}} -->
				<h2 style="font-size:clamp(3.25rem, 8vw, 6.25rem);line-height:1.15"><em>' . wp_kses_post( __( 'Welcome to<br> WP club', 'mcms-lite' ) ) . '</em></h2>
				<!-- /wp:heading --></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"bottom":"6rem"}}}} -->
				<div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:6rem"><!-- wp:paragraph -->
				<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet, felis a sodales tempor, augue erat dignissim nisi, eget sodales eros nunc sed orci. Mauris suscipit tellus dui, id accumsan nisi tincidunt vehicula. In sit amet condimentum lacus, at condimentum purus. Vestibulum non maximus orci. Suspendisse sapien felis, viverra a placerat ut, bibendum sit amet odio.', 'mcms-lite' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:spacer {"height":20} -->
				<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Learn More', 'mcms-lite' ) . '</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Buy Tickets', 'mcms-lite' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
);
