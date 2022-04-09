<?php
/**
 * Page layout with image, text and video.
 */
return array(
	'title'      => __( 'Page layout with image, text and video', 'mcms' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"backgroundColor":"primary","textColor":"background"} -->
					<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)"><!-- wp:group {"layout":{"inherit":true}} -->
					<div class="wp-block-group"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h1 class="alignwide" style="font-size:clamp(3rem, 6vw, 4.5rem)">' . wp_kses_post( __( '<em>mcms</em>, a template for <br> WordPress cms..', 'mcms' ) ) . '</h1>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"fontSize":"x-large"} -->
					<h2 class="has-x-large-font-size">' . esc_html__( 'Interviewing', 'mcms' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . wp_kses_post( __( 'May 14th, 2022 @ 7:00PM<br>London, United Kingdom ', 'mcms' ) ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"primary"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-secondary-background-color has-text-color has-background">' . esc_html__( 'Download', 'mcms' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"66.66%"} -->
					<div class="wp-block-column" style="flex-basis:66.66%"></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->

					<!-- wp:image {"align":"full","style":{"color":{}}} -->
					<figure class="wp-block-image alignfull"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="' . esc_attr__( 'A placeholder image', 'mcms' ) . '"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"fontSize":"x-large"} -->
					<h2 class="has-x-large-font-size">' . esc_html__( 'Extended Trailer', 'mcms' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'Oh hello. My name’s Roland, and I created this template. If you would like to read the documentation, visit docs.mcms.io or if you would like to take a look at my portfolio website, visit rolandfarkas.com', 'mcms' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					
					<!-- /wp:columns --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);