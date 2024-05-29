<?php
/**
 * Paragraph with heading.
 */
return array(
	'title'    => __( 'Paragraph with heading', 'mcms-lite' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"5px"}},"fontSize":"extra-small"} -->
	<p class="has-text-align-center has-extra-small-font-size" style="text-transform:uppercase;letter-spacing:5px"> <strong>–everything you need to know–</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"100px","lineHeight":"1"}}} -->
	<p style="font-size:100px;line-height:1"><strong>25</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"6px"}},"typography":{"textTransform":"uppercase"}},"fontSize":"large"} -->
	<h2 class="has-text-align-left has-large-font-size" id="h-ways-to-improveyour-website" style="margin-top:6px;text-transform:uppercase">Ways to improve<br>your website</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
