<?php
/**
 * Footer with social widget, subscribe to newsletter and about section below the site logo.
 */
return array(
	'title'      => __( 'Footer with Social, About and Newsletter', 'mcms-lite' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"70px","right":"30px","left":"30px"}},"color":{"background":"#2a2a2a"}},"textColor":"white","layout":{"contentSize":"1280px"}} -->
    <div class="wp-block-group alignfull has-white-color has-text-color has-background" style="background-color:#2a2a2a;padding-top:100px;padding-right:30px;padding-bottom:70px;padding-left:30px"><!-- wp:separator -->
    <hr class="wp-block-separator has-alpha-channel-opacity" />
    <!-- /wp:separator -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}}} -->
    <h2 style="font-style:normal;font-weight:700;text-transform:uppercase">LOGO</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
    <p style="font-size:16px">Donec malesuada eros eu dictum tristique. Maecenas nec mollis urna. Nunc dui ex, cursus non mollis et, accumsan nec tellus. Pellentesque accumsan lacinia felis nec viverra.</p>
    <!-- /wp:paragraph -->
    
   
	<!-- wp:paragraph {"align":"right"} -->
	<p class="has-text-align-right">' .sprintf(esc_html__( 'Proudly powered by %s', 'mcms-lite' ),'<a href="' . esc_url( __( 'https://wordpress.org', 'mcms-lite' ) ) . '" rel="nofollow">WordPress</a> & <a href="' . esc_url( __( 'https://mcms.io', 'mcms-lite' ) ) . '" rel="nofollow">mcms</a>') . '</p>
	<!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}}} -->
    <h4 style="font-size:30px;font-style:normal;font-weight:700;text-transform:uppercase">Newsletter</h4>
    <!-- /wp:heading -->
    
    <!-- wp:search {"label":"SUBSCRIBE","placeholder":"Enter Your Email...","buttonText":"Subscribe","buttonPosition":"button-inside","style":{"border":{"width":"2px"}},"borderColor":"pale-cyan-blue","backgroundColor":"pale-cyan-blue","textColor":"white"} /-->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
    <p style="font-size:16px">Pellentesque lobortis, tortor quis finibus lobortis, nulla metus porta enim, euismod hendrerit dolor leo a nunc. </p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","fontSize":"30px"}}} -->
    <h4 style="font-size:30px;font-style:normal;font-weight:700;text-transform:uppercase">Contact Us</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.2"}}} -->
    <p style="font-size:16px;line-height:1.2">123 London, United Kingdom<br><br>+ 44 (0) 7 123-456-789</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
    <p style="font-size:16px;line-height:1">hi@example.com</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
    <p style="font-size:16px;line-height:1">Opening Hours: 9:00am - 17:00pm <sup>| MON. - THUR.</sup></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}}} -->
    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"wordpress"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
    
    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
    
    <!-- wp:social-link {"url":"#","service":"tiktok"} /-->
    
    <!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
