<?php
/**
 * Centered header with navigation, social links, and salmon background block pattern
 */
return array(
	'title'      => __( 'Centered header with navigation, social links, and salmon background', 'mcms-lite' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)","bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)"}}},"backgroundColor":"background","textColor":"foreground","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:columns {"verticalAlignment":"center","align":"full"} -->
	<div class="wp-block-columns alignfull are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"ref":2532,"overlayMenu":"always","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} /--></div>
	<!-- /wp:column -->
	<!-- wp:column {"width":""} -->
	<div class="wp-block-column"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} /--></div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dcolor\u002d\u002dprimary)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->
	<!-- wp:social-link {"url":"#","service":"instagram"} /-->
	<!-- wp:social-link {"service":"wordpress"} /-->
	<!-- wp:social-link {"service":"facebook"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
