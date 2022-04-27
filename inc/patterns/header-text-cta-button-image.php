<?php
/**
 * Header with text, cta button and image on the left
 */
return array(
	'title'      => __( 'Header with text, cta button and image on the left', 'mcms-lite' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full"} -->
    <div class="wp-block-group alignfull"><!-- wp:media-text {"align":"full","mediaType":"image","mediaWidth":51,"imageFill":true} -->
    <div class="wp-block-media-text alignfull is-stacked-on-mobile is-image-fill" style="grid-template-columns:51% auto"><figure class="wp-block-media-text__media" style="background-position:50% 50%"><img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/pd36-1-jsc2011e067644_1.jpg?w=1200&amp;h=1200&amp;fit=clip&amp;crop=default&amp;dpr=1&amp;q=75&amp;vib=3&amp;con=3&amp;usm=15&amp;cs=srgb&amp;bg=F4F4F3&amp;ixlib=js-2.2.1&amp;s=f1d0295f29e4ac7acdcac3b20b82cfa4" alt="" /></figure><div class="wp-block-media-text__content"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"layout":{"contentSize":"500px"}} -->
    <div class="wp-block-column"><!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"fontSize":"16px"}}} -->
    <p style="font-size:16px">Vestibulum tincidunt..</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"50px","textTransform":"capitalize"}}} -->
    <h2 style="font-size:50px;font-style:normal;font-weight:600;text-transform:capitalize">Lorem ipsum dolor sit amet</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
    <p style="font-size:16px">Proin viverra ligula massa, quis pretium eros hendrerit in. Vestibulum eu pretium nisl. Vestibulum eget tristique risus.&nbsp;</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-green-cyan","textColor":"white","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"25px","right":"25px"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-vivid-green-cyan-background-color has-text-color has-background" style="padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px">Get Started</a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"backgroundColor":"white","textColor":"vivid-green-cyan","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"25px","right":"25px"}}},"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-vivid-green-cyan-color has-white-background-color has-text-color has-background" style="padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px">See Pricing</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:media-text --></div>
    <!-- /wp:group -->',
);
