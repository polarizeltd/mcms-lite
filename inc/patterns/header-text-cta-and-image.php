<?php
/**
 * Header Text, CTA and Image
 * - https://wordpress.org/patterns/pattern/header-text-cta-and-image/
 */
return array(
	'title'      => __( 'Header Text, CTA and Image', 'mcms-lite' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:cover {"customOverlayColor":"#faf9f4","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
    <div class="wp-block-cover alignfull is-light" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#faf9f4"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textColor":"black"} -->
    <h2 class="has-black-color has-text-color">Lorem ipsum dolor sit amet</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"cyan-bluish-gray"} -->
    <p class="has-cyan-bluish-gray-color has-text-color">Quisque eu ligula tincidunt, viverra tellus ut, ornare nisl. Vestibulum ac justo at neque volutpat egestas.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-green-cyan","textColor":"black","style":{"border":{"radius":"5px"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-black-color has-vivid-green-cyan-background-color has-text-color has-background" style="border-radius:5px">Click here</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":null,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/pdwatercolorfruitbatch1-621-gloy-a_1.jpg?w=1200&amp;h=1200&amp;fit=clip&amp;crop=default&amp;dpr=1&amp;q=75&amp;vib=3&amp;con=3&amp;usm=15&amp;cs=srgb&amp;bg=F4F4F3&amp;ixlib=js-2.2.1&amp;s=515ae30114e8a1caa0665abff82dae0b" alt="" /></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover -->',
);
