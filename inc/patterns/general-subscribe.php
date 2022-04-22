<?php
/**
 * Subscribe callout block pattern
 */
return array(
	'title'      => __( 'Subscribe callout', 'mcms-lite' ),
	'categories' => array( 'featured', 'buttons' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
	<h2>Subscribe</h2>
	<!-- /wp:heading -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"medium"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link">Join our mailing listt</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
	<!-- /wp:separator --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
