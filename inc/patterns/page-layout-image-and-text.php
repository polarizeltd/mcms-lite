<?php
/**
 * Page layout with image and text.
 */
return array(
	'title'      => __( 'Page layout with image and text', 'mcms' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"2rem"}}},"layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:2rem"><!-- wp:heading {"align":"wide","style":{"typography":{"fontSize":"clamp(4rem, 8vw, 7.5rem)","lineHeight":"1.15","fontWeight":"300"}}} -->
					<h2 class="alignwide" style="font-size:clamp(4rem, 8vw, 7.5rem);font-weight:300;line-height:1.15">' . wp_kses_post( __( '<em>Example </em><br><em>heading two</em>', 'mcms' ) ) . '</h2>
					<!-- /wp:heading --></div>
					<!-- /wp:group -->

					<!-- wp:image {"align":"full","style":{"color":{}}} -->
					<figure class="wp-block-image alignfull"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="' . esc_attr_x( 'TBD', 'Short for to be determined', 'mcms' ) . '"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull" style="padding-top:2rem;padding-bottom:var(--wp--custom--spacing--large, 8rem)">
					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"bottom":"1em"}}}} -->
					<div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:1em"><!-- wp:site-logo {"width":60} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"bottom"} -->
					<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph -->
					<p>' . wp_kses_post( __( 'Oh hello. My name’s Roland, and I created this template. If you would like to read the documentation, visit docs.mcms.io or if you would like to take a look at my portfolio website, visit rolandfarkas.com', 'mcms' ) ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->',
);
