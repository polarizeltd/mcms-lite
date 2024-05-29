<?php
/**
 * CTA Button.
 */
return array(
	'title'    => __( 'CTA Button', 'mcms-lite' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"align":"full","style":{"color":{"text":"#000000","background":"#ffffff"}}} -->
	<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#ffffff;color:#000000"><!-- wp:spacer {"height":64} -->
	<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".9"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" style="line-height:.9"><strong>GET IN TOUCH</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":59,"lineHeight":"1.15"}}} -->
	<h2 class="has-text-align-center" id="schedule-a-visit" style="font-size:59px;line-height:1.15"><strong>Schedule a Visit</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":50,"style":{"color":{"background":"#000000","text":"#ffffff"},"border":{"radius":"50px"}}} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-text-color has-background" style="border-radius:50px;background-color:#000000;color:#ffffff">Contact us</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:spacer {"height":64} -->
	<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->',
);
