<?php
/**
 * Footer with social links and copyright
 */
return array(
	'title'      => __( 'Footer with social links and copyright', 'mcms-lite' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","iconBackgroundColor":"background","iconBackgroundColorValue":"var(--wp--preset--color--background)","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
	<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	<!-- wp:social-link {"url":"#","service":"youtube"} /-->
	<!-- wp:social-link {"url":"#","service":"wordpress"} /-->
	<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
	<!-- /wp:social-links -->
	<!-- wp:spacer {"height":50} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
	<p class="has-text-align-right">' .sprintf(esc_html__( 'Proudly powered by %s', 'mcms-lite' ),'<a href="' . esc_url( __( 'https://wordpress.org', 'mcms-lite' ) ) . '" rel="nofollow">WordPress</a> & <a href="' . esc_url( __( 'https://mcms.io', 'mcms-lite' ) ) . '" rel="nofollow">mcms</a>') . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
