<?php
/**
 * Video trailer block pattern
 */
return array(
	'title'      => __( 'Video trailer', 'mcms' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"6rem","bottom":"4rem"}}},"backgroundColor":"secondary","textColor":"foreground","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-foreground-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:6rem;padding-bottom:4rem"><!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="has-x-large-font-size" id="extended-trailer">' . esc_html__( 'Extended Trailer', 'mcms' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet, felis a sodales tempor, augue erat dignissim nisi, eget sodales eros nunc sed orci. Mauris suscipit tellus dui, id accumsan nisi tincidunt vehicula. In sit amet condimentum lacus, at condimentum purus. Vestibulum non maximus orci. Suspendisse sapien felis, viverra a placerat ut, bibendum sit amet odio.', 'mcms' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"66.66%"} -->
				<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:video -->
				<figure class="wp-block-video"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg"></video></figure>
				<!-- /wp:video --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
);
