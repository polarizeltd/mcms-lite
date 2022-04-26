<?php
/**
 * Bakery Page Demo
 */
return array(
	'title'      => __( 'Bakery Page Demo', 'mcms-lite' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg","id":1834,"hasParallax":true,"dimRatio":50,"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(90deg,rgba(255,0,0,0.4) 4%,rgba(0,0,0,0.58) 98%)","contentPosition":"center center","isDark":false,"align":"full","noBottomMargin":true} -->
    <div class="wp-block-cover alignfull is-light has-parallax mb-0" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim has-background-gradient" style="background:linear-gradient(90deg,rgba(255,0,0,0.4) 4%,rgba(0,0,0,0.58) 98%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"background","layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group has-background-color has-text-color"><!-- wp:separator -->
    <hr class="wp-block-separator"/>
    <!-- /wp:separator -->
    <!-- wp:paragraph {"textColor":"background"} -->
    <p class="has-background-color has-text-color"><strong>Welcome to</strong></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    <!-- wp:heading {"style":{"typography":{"fontSize":"52px","lineHeight":"1.2"}},"className":"alignwide has-white-color has-text-color"} -->
    <h2 class="alignwide has-white-color has-text-color" style="font-size:52px;line-height:1.2"><strong><em>BAKER</em></strong>Y, <sub><em>NYC</em></sub></h2>
    <!-- /wp:heading -->
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis:60%"><!-- wp:quote {"align":"left","className":"is-style-large","customTextColor":"#ffffff"} -->
    <blockquote class="wp-block-quote has-text-align-left is-style-large" style="color:#ffffff"><p>We are a small bakery based in Brooklyn, NYC serving delicious homemade bakes and pastries. </p><cite><em>―  Since 1999</em></cite></blockquote>
    <!-- /wp:quote -->
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"border":{"radius":0}},"className":"is-style-outline border-0"} -->
    <div class="wp-block-button is-style-outline border-0"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background no-border-radius" href="https://www.google.com/maps/place/Brooklyn,+NY,+USA/@40.645353,-74.0152092,12z/data=!3m1!4b1!4m5!3m4!1s0x89c24416947c2109:0x82765c7404007886!8m2!3d40.6781784!4d-73.9441579">Visit Us</a></div>
    <!-- /wp:button -->
    <!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color" href="tel:01000000000">Call Now</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    <!-- wp:column -->
    <div class="wp-block-column"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover -->
    <!-- wp:group {"align":"full","style":{"color":{"background":"#f8f4e4"}},"noTopMargin":true} -->
    <div class="wp-block-group alignfull has-background mt-0" style="background-color:#f8f4e4"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:separator -->
    <hr class="wp-block-separator"/>
    <!-- /wp:separator -->
    <!-- wp:paragraph -->
    <p>ABOUT US</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1","fontSize":"5vw"},"color":{"text":"#000000"}}} -->
    <p class="has-text-color" style="color:#000000;font-size:5vw;line-height:1.1"><strong>T</strong>he <strong>B</strong>akers</p>
    <!-- /wp:paragraph -->
    <!-- wp:spacer {"height":"5px"} -->
    <div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.38%"} -->
    <div class="wp-block-column" style="flex-basis:33.38%"><!-- wp:paragraph {"style":{"color":{"text":"#000000"}},"fontSize":"extra-small"} -->
    <p class="has-text-color has-extra-small-font-size" style="color:#000000"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam molestie urna lectus, et feugiat orci elementum sit amet. Donec sagittis eleifend dignissim. Praesent at velit placerat, bibendum ligula nec, semper libero. Praesent ac nunc vel enim tempus hendrerit id a eros. Sed vulputate urna ac lacus lacinia molestie. Morbi turpis nisl, gravida ac pellentesque et, cursus vel magna. In ipsum ex, ultrices eu dignissim eu, sagittis ac eros.</em></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    <!-- wp:column {"width":"33%"} -->
    <div class="wp-block-column" style="flex-basis:33%"><!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:image {"id":1850,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="" class="wp-image-1850"/><figcaption>Portrait of a young baker in mask looking at camera while working in bakery</figcaption></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    <!-- wp:column {"width":"33.62%"} -->
    <div class="wp-block-column" style="flex-basis:33.62%"><!-- wp:image {"id":1852,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="" class="wp-image-1852"/><figcaption>Portrait of young saleswoman in uniform and mask standing in bakery shop</figcaption></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"67%"} -->
    <div class="wp-block-column" style="flex-basis:67%"><!-- wp:image {"align":"right","id":1853,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="alignright size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="" class="wp-image-1853"/><figcaption>Two young women baking bread they working in bakery</figcaption></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    <!-- wp:column {"verticalAlignment":"center","width":"33%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33%"><!-- wp:paragraph {"style":{"color":{"text":"#000000"}},"fontSize":"extra-small"} -->
    <p class="has-text-color has-extra-small-font-size" style="color:#000000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam molestie urna lectus, et feugiat orci elementum sit amet. Donec sagittis eleifend dignissim. Praesent at velit placerat, bibendum ligula nec, semper libero. Praesent ac nunc vel enim tempus hendrerit id a eros. Sed vulputate urna ac lacus lacinia molestie. Morbi turpis nisl, gravida ac pellentesque et, cursus vel magna. In ipsum ex, ultrices eu dignissim eu, sagittis ac eros.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:cover {"overlayColor":"white","isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="has-white-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"typography":{"fontSize":38,"lineHeight":"1.4"}}} -->
    <h2 style="font-size:38px;line-height:1.4"><strong><span class="has-inline-color has-black-color"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </em></span></strong></h2>
    <!-- /wp:heading -->
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":18}}} -->
    <p style="font-size:18px"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-black-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam molestie urna lectus, et feugiat orci elementum sit amet. Donec sagittis eleifend dignissim. Praesent at velit placerat, bibendum ligula nec, semper libero. Praesent ac nunc vel enim tempus hendrerit id a eros. Sed vulputate urna ac lacus lacinia molestie. Morbi turpis nisl, gravida ac pellentesque et, cursus vel magna. In ipsum ex, ultrices eu dignissim eu, sagittis ac eros.</mark></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":18}}} -->
    <p style="font-size:18px"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-black-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam molestie urna lectus, et feugiat orci elementum sit amet. Donec sagittis eleifend dignissim. Praesent at velit placerat, bibendum ligula nec, semper libero. Praesent ac nunc vel enim tempus hendrerit id a eros. Sed vulputate urna ac lacus lacinia molestie. Morbi turpis nisl, gravida ac pellentesque et, cursus vel magna. In ipsum ex, ultrices eu dignissim eu, sagittis ac eros.</mark></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div></div>
    <!-- /wp:cover -->
    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":1849,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg","mediaType":"image","mediaWidth":56,"verticalAlignment":"center","className":"is-style-default"} -->
    <div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center is-style-default" style="grid-template-columns:auto 56%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="" class="wp-image-1849 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"style":{"color":{"text":"#000000"}}} -->
    <h2 class="has-text-color" style="color:#000000"><strong>OPENING TIMES</strong></h2>
    <!-- /wp:heading -->
    <!-- wp:spacer {"height":"30px"} -->
    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1","fontSize":"17px"},"color":{"text":"#636363"}}} -->
    <p class="has-text-color" style="color:#636363;font-size:17px;line-height:1.1">Monday - Friday 9:00 - 16:00</p>
    <!-- /wp:paragraph -->
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1","fontSize":"17px"},"color":{"text":"#636363"}}} -->
    <p class="has-text-color" style="color:#636363;font-size:17px;line-height:1.1">Saturday - Sunday 10:00 - 12:00</p>
    <!-- /wp:paragraph -->
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"border":{"radius":0}},"className":"is-style-outline border-0"} -->
    <div class="wp-block-button is-style-outline border-0"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background no-border-radius" href="https://www.google.com/maps/place/Brooklyn,+NY,+USA/@40.645353,-74.0152092,12z/data=!3m1!4b1!4m5!3m4!1s0x89c24416947c2109:0x82765c7404007886!8m2!3d40.6781784!4d-73.9441579">Visit Us</a></div>
    <!-- /wp:button -->
    <!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius" href="tel:01000000000">Call Now</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div></div>
    <!-- /wp:media-text -->
    <!-- wp:spacer {"height":"149px"} -->
    <div style="height:149px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg","id":1866,"hasParallax":true,"dimRatio":40,"minHeight":1000,"isDark":false,"align":"full","className":"is-style-top-wave"} -->
    <div class="wp-block-cover alignfull is-light has-parallax is-style-top-wave" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg);min-height:1000px"><span aria-hidden="true" class="has-background-dim-40 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size"></p>
    <!-- /wp:paragraph --></div></div>
    <!-- /wp:cover -->
    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:gallery {"linkTo":"none","align":"wide"} -->
    <figure class="wp-block-gallery alignwide has-nested-images columns-default is-cropped"><!-- wp:image {"id":1863,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="" class="wp-image-1863"/><figcaption>Background of coffee cafe and bakery with coffee making equipment and pastry shop window.</figcaption></figure>
    <!-- /wp:image -->
    <!-- wp:image {"id":1851,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="" class="wp-image-1851"/><figcaption>Portrait of a handsome seller in uniform standing with bread at the bakery shop</figcaption></figure>
    <!-- /wp:image --></figure>
    <!-- /wp:gallery -->
    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:cover {"overlayColor":"white","isDark":false,"align":"wide"} -->
    <div class="wp-block-cover alignwide is-light"><span aria-hidden="true" class="has-white-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <!-- wp:paragraph -->
    <p>Insert Map Here</p>
    <!-- /wp:paragraph -->
    <!-- /wp:column -->
    <!-- wp:column {"textColor":"black"} -->
    <div class="wp-block-column has-black-color has-text-color"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:separator -->
    <hr class="wp-block-separator"/>
    <!-- /wp:separator -->
    <!-- wp:paragraph -->
    <p>Say Hi!</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->    
    <!-- wp:heading -->
    <h2><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-black-color">Contact Us</mark></h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph -->
    <p>Insert Form Here</p>
    <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover -->',
);
