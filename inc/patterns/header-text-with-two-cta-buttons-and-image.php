<?php
/**
 * Header text with 2x CTA buttons and image
 * - https://wordpress.org/patterns/pattern/header-text-with-2x-cta-buttons-and-image/
 */
return array(
	'title'      => __( 'Header text with 2x CTA buttons and image', 'mcms-lite' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:cover {"overlayColor":"white","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
    <div class="wp-block-cover alignfull is-light" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"800px","layout":{"inherit":true}} -->
    <div class="wp-block-column" style="flex-basis:800px"><!-- wp:media-text {"mediaPosition":"right","mediaType":"image","imageFill":false} -->
    <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/-a010-markuss-0262.jpg?w=1200&amp;h=1200&amp;fit=clip&amp;crop=default&amp;dpr=1&amp;q=75&amp;vib=3&amp;con=3&amp;usm=15&amp;cs=srgb&amp;bg=F4F4F3&amp;ixlib=js-2.2.1&amp;s=1774332883ee68c7bfd9f3807bfec7a6" alt="" /></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","style":{"color":{"text":"#28173d"}},"fontSize":"large"} -->
    <p class="has-text-color has-large-font-size" style="color:#28173d">Lorem Ipsum</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"textColor":"cyan-bluish-gray","fontSize":"small"} -->
    <p class="has-cyan-bluish-gray-color has-text-color has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quam dui, suscipit sodales neque vitae, bibendum vehicula elit. Duis blandit, eros sed dapibus sodales, erat neque tincidunt dolor, a faucibus magna sem a dui. Aliquam blandit a nulla at sodales. Aenean fringilla risus enim, ac rutrum ligula lacinia quis.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"border":{"radius":"5px"},"color":{"text":"#28173d"}},"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color" style="border-radius:5px;color:#28173d;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px">Button 1</a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"textColor":"white","style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"border":{"radius":"5px"},"color":{"background":"#28173d"}},"className":"is-style-fill"} -->
    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-text-color has-background" style="border-radius:5px;background-color:#28173d;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px">Button 2</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div></div>
    <!-- /wp:media-text --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover -->',
);
