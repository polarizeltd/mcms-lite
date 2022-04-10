<?php
/**
 * Footer with navigation and citation
 */
return array(
	'title'      => __( 'Footer with navigation and citation', 'mcms-lite' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:navigation -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation -->

					<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">' .
					sprintf(
						/* Translators: WordPress link. */
						esc_html__( 'Proudly powered by %s', 'mcms-lite' ),
												'<a href="' . esc_url( __( 'https://wordpress.org', 'mcms-lite' ) ) . '" rel="nofollow">WordPress</a> & <a href="https://mcms.io/" rel="nofollow">mcms</a>') . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
