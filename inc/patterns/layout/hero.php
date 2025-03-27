<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: hero
 * title: Hero Cover
 * categories: non-profit-fse
 * keywords: hero, cover
 */

use NonProfitFSE\Assets_Manager;

$img02 = Assets_Manager::get_image_url( 'non-profit-02.webp' );

return array(
	'title'      => __( 'Hero Cover', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'hero', 'cover' ),
	'content'    => '<!-- wp:group {"metadata":{"name":"hero"},"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url( $img02 ) . '","id":207,"dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"textColor":"ti-fg-alt","layout":{"type":"constrained","wideSize":"1140px"}} -->
<div class="wp-block-cover alignfull has-ti-fg-alt-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-207" alt="" src="' . esc_url( $img02 ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-text-align-center" style="font-style:normal;font-weight:700;text-transform:uppercase">Title goes here</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"typography":{"textTransform":"uppercase","fontSize":"6vw","fontStyle":"normal","fontWeight":"900"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-center" style="font-size:6vw;font-style:normal;font-weight:900;text-transform:uppercase">Rescue. Heal. Rehome</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels. Ball thrown? Best day ever! Ball not thrown? Still best day ever, because hooman home.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"border":{"width":"0px","style":"none"},"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-fill" style="text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-style:none;border-width:0px">Button Text</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"ti-accent-secondary","textColor":"black","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"width":"0px","style":"none"},"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-fill" style="text-transform:uppercase"><a class="wp-block-button__link has-black-color has-ti-accent-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px">Button Text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
