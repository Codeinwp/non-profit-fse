<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: 404
 * title: 404
 * categories: non-profit-fse
 * keywords: campaigns, content, columns
 */

use NonProfitFSE\Assets_Manager;

$img09 = Assets_Manager::get_image_url( 'non-profit-09.webp' );

return array(
	'title'      => __( '404', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'content' ),
	'inserter'   => false,
	'content'    => '
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ti-bg-inv"} -->
<main class="wp-block-group has-ti-bg-inv-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url( $img09 ) . '","id":214,"dimRatio":80,"overlayColor":"ti-bg-inv","isUserOverlayColor":true,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-214" alt="" src="' . esc_url( $img09 ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"40px"}},"textColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-color has-text-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"typography":{"textTransform":"uppercase","fontSize":"7vw","fontStyle":"normal","fontWeight":"900"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-center" style="font-size:7vw;font-style:normal;font-weight:900;text-transform:uppercase">Ooops! Page not Found!</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Looks like this page ran off chasing squirrels! But don\'t worry, we\'re here to help you find your way back.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/">Return to Homepage</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Support Our Mission</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->',
);
