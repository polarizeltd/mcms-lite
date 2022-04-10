<?php
/**
 * Large list of names block pattern
 */
return array(
	'title'      => __( 'Large list of names', 'mcms-lite' ),
	'categories' => array( 'featured', 'text' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"tertiary","textColor":"primary","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-primary-color has-tertiary-background-color has-text-color has-background has-link-color" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:group {"align":"wide"} -->
					<div class="wp-block-group alignwide"><!-- wp:image {"width":175,"height":82,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/placeholder.jpg" alt="' . esc_attr__( 'A placeholder image', 'mcms-lite' ) . '" width="175" height="82"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:group -->

					<!-- wp:group {"align":"wide"} -->
					<div class="wp-block-group alignwide"><!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"300"}},"fontSize":"x-large"} -->
					<p class="has-x-large-font-size" style="font-weight:300">' . esc_html__( 'Aenean hendrerit tincidunt tellus, quis vehicula nibh pharetra ullamcorper. Ut bibendum pharetra metus. Etiam blandit sem vel quam convallis, ultricies suscipit turpis hendrerit. ', 'mcms-lite' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background">' . esc_html__( 'Read more', 'mcms-lite' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
