<?php
/**
 * About page with media on the left
 */
return array(
	'title'      => __( 'About page with media on the left', 'mcms-lite' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:media-text {"align":"full","mediaType":"image","imageFill":true,"focalPoint":{"x":"0.63","y":"0.16"},"backgroundColor":"foreground","className":"alignfull is-image-fill has-background-color has-text-color has-background has-link-color"} -->
					<div class="wp-block-media-text alignfull is-stacked-on-mobile is-image-fill has-background-color has-text-color has-background has-link-color has-foreground-background-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg);background-position:63% 16%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="' . esc_attr__( 'Placeholder image', 'mcms-lite' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:site-logo {"width":60} /-->

					<!-- wp:group {"style":{"spacing":{"padding":{"right":"min(8rem, 5vw)","top":"min(28rem, 28vw)"}}}} -->
					<div class="wp-block-group" style="padding-top:min(28rem, 28vw);padding-right:min(8rem, 5vw)"><!-- wp:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h2 style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em>' . esc_html__( 'Roland', 'mcms-lite' ) . '<br>' . esc_html__( 'Farkas', 'mcms-lite' ) . '</em></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
					<p style="line-height:1.6">' . esc_html__( 'Oh hello. My name’s Roland, and I created this template. If you would like to read the documentation, visit docs.mcms.io or if you would like to take a look at my portfolio website, visit rolandfarkas.com', 'mcms-lite' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--wp--preset--color--foreground)"} -->
					<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"wordpress"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:group -->

					<!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div></div>
					<!-- /wp:media-text -->',
);
