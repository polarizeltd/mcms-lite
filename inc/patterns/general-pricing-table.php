<?php
/**
 * Pricing table block pattern
 */
return array(
	'title'      => __( 'Pricing table', 'mcms-lite' ),
	'categories' => array( 'featured', 'columns', 'buttons' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:heading {"style":{"typography":{"fontSize":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtypography\u002d\u002dfont-size\u002d\u002dgigantic, clamp(2.75rem, 6vw, 3.25rem))","lineHeight":"0.5"}}} -->
	<h2 id="1" style="font-size:var(--wp--custom--typography--font-size--gigantic, clamp(2.75rem, 6vw, 3.25rem));line-height:0.5">Lorem Ipsum</h2>
	<!-- /wp:heading -->
	<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
	<h3 class="has-x-large-font-size" id="heading"><em>Product 1</em></h3>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>Aenean hendrerit tincidunt tellus, quis vehicula nibh pharetra ullamcorper. Ut bibendum pharetra metus. Etiam blandit sem vel quam convallis, ultricies suscipit turpis hendrerit.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","width":100} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-background-color has-background">£49</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	<!-- wp:spacer {"height":"16px"} -->
	<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(2.75rem, 6vw, 3.25rem)","lineHeight":"0.5"}}} -->
	<h2 id="2" style="font-size:clamp(2.75rem, 6vw, 3.25rem);line-height:0.5">Lorem Ipsum</h2>
	<!-- /wp:heading -->
	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="has-x-large-font-size" id="mcms"><meta charset="utf-8"><em>Product 2</em></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>Aenean hendrerit tincidunt tellus, quis vehicula nibh pharetra ullamcorper. Ut bibendum pharetra metus. Etiam blandit sem vel quam convallis, ultricies suscipit turpis hendrerit.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","width":100} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-background-color has-background">£99</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	<!-- wp:spacer {"height":"16px"} -->
	<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(2.75rem, 6vw, 3.25rem)","lineHeight":"0.5"}}} -->
	<h2 id="3" style="font-size:clamp(2.75rem, 6vw, 3.25rem);line-height:0.5">Lorem Ipsum</h2>
	<!-- /wp:heading -->
	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="has-x-large-font-size" id="wordpress"><meta charset="utf-8"><em>Product 3</em></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>Aenean hendrerit tincidunt tellus, quis vehicula nibh pharetra ullamcorper. Ut bibendum pharetra metus. Etiam blandit sem vel quam convallis, ultricies suscipit turpis hendrerit.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","width":100} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-background-color has-background">£199</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	<!-- wp:spacer {"height":"16px"} -->
	<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
