<?php
/**
 * Quote with cover image background
 * - https://wordpress.org/patterns/pattern/quote-with-cover-image-background/
 */
return array(
	'title'      => __( 'Quote with cover image backgroung', 'mcms-lite' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:cover {"url":"https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/pd36-1-jsc2011e067644_1.jpg?w=1200\u0026amp;h=1200\u0026amp;fit=clip\u0026amp;crop=default\u0026amp;dpr=1\u0026amp;q=75\u0026amp;vib=3\u0026amp;con=3\u0026amp;usm=15\u0026amp;cs=srgb\u0026amp;bg=F4F4F3\u0026amp;ixlib=js-2.2.1\u0026amp;s=f1d0295f29e4ac7acdcac3b20b82cfa4","id":null,"hasParallax":true,"dimRatio":60,"customOverlayColor":"#052436","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
    <div class="wp-block-cover alignfull has-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#052436"></span><div class="wp-block-cover__inner-container"><!-- wp:quote {"align":"center","className":"is-style-default","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large"} -->
    <blockquote class="wp-block-quote has-text-align-center is-style-default has-x-large-font-size" style="font-style:normal;font-weight:500"><p><strong>That`s one small step for man, one giant leap for mankind</strong>.</p><cite><em><sup>Neil Armstrong</sup></em></cite></blockquote>
    <!-- /wp:quote --></div></div>
    <!-- /wp:cover -->',
);
