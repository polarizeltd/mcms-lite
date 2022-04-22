<?php
/**
 * Footer with about text, title, and logo
 */
return array(
	'title'      => __( 'Footer with text, title, and logo', 'mcms-lite' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dlarge, 8rem)","bottom":"6rem"}}},"backgroundColor":"cyan-bluish-gray","textColor":"foreground","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-foreground-color has-cyan-bluish-gray-background-color has-text-color has-background" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:6rem"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33%"} -->
	<div class="wp-block-column" style="flex-basis:33%"><!-- wps:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
	<p style="text-transform:uppercase">' . esc_html__( 'About', 'mcms-lite' ) . '</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"has-small-font-size"} -->
	<p class="has-small-font-size">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam nisi, ullamcorper sed sem sit amet, egestas ullamcorper odio. Sed ullamcorper magna ac enim euismod suscipit. In id magna vel ex convallis egestas. Nam enim dui, fringilla quis odio eu, porta facilisis tellus. Ut tincidunt vitae massa sit amet finibus. Curabitur at mattis sem. Aenean eu erat id mauris condimentum consectetur sed sed ligula.', 'mcms-lite' ) . '</p>
	<!-- /wp:paragraph -->
	<!-- wp:spacer {"height":"180px"} -->
	<div style="height:180px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:site-title {"level":0} /--></div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"bottom"} -->
	<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:site-logo {"width":60,"align":"right"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
