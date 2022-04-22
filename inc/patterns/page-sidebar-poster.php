<?php
/**
 * Poster with right sidebar block pattern
 */
return array(
	'title'      => __( 'Poster with right sidebar', 'mcms-lite' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
					<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"},"spacing":{"margin":{"bottom":"0px"}}}} -->
				<h1 class="alignwide" style="font-size:clamp(3rem, 6vw, 4.5rem);margin-bottom:0px">' . wp_kses_post( __( '<em>Example</em>, heading for your page', 'mcms-lite' ) ) . '</h1>
					<!-- /wp:heading --></div>
					<!-- /wp:column -->
					<!-- wp:column {"width":""} -->
					<div class="wp-block-column"></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
					<div class="wp-block-column" style="padding-bottom:32px;flex-basis:70%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="' . esc_attr__( 'Placeholder image', 'mcms-lite' ) . '"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->
					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					<!-- wp:heading {"level":3,"fontSize":"large"} -->
					<h3 class="has-large-font-size"><em>' . esc_html__( 'Date', 'mcms-lite' ) . '</em></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>' . esc_html__( 'February, 22 2022', 'mcms-lite' ) . '</p>
					<!-- /wp:paragraph -->
					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					<!-- wp:heading {"level":3,"fontSize":"large"} -->
					<h3 class="has-large-font-size"><em>' . esc_html__( 'Location', 'mcms-lite' ) . '</em></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>' . wp_kses_post( __( 'City<br>154 First Street<br>Canada', 'mcms-lite' ) ) . '</p>
					<!-- /wp:paragraph -->
					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->',
);
