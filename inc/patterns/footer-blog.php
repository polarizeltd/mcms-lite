<?php
/**
 * Blog footer
 */
return array(
	'title'      => __( 'Blog footer', 'mcms-lite' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)"><!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase">' . esc_html__( 'About us', 'mcms-lite' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam nisi, ullamcorper sed sem sit amet, egestas ullamcorper odio. Sed ullamcorper magna ac enim euismod suscipit. In id magna vel ex convallis egestas. Nam enim dui, fringilla quis odio eu, porta facilisis tellus. Ut tincidunt vitae massa sit amet finibus. Curabitur at mattis sem. Aenean eu erat id mauris condimentum consectetur sed sed ligula.', 'mcms-lite' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase">' . esc_html__( 'Latest posts', 'mcms-lite' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:latest-posts /--></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase">' . esc_html__( 'Categories', 'mcms-lite' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:categories /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title {"level":0} /-->

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
