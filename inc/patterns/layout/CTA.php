<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: cta
 * title: Call to Action
 * categories: non-profit-fse
 * keywords: cta, call to action
 */

use NonProfitFSE\Assets_Manager;

$img09 = Assets_Manager::get_image_url( 'non-profit-09.webp' );

return array(
	'title'      => __( 'Call to Action', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'cta', 'call to action' ),
	'content'    => '<!-- wp:group {"metadata":{"name":"call to action"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|60"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}},"background":{"backgroundImage":{"url":"' . esc_url( $img09 ) . '","id":214,"source":"file","title":"non-profit-09"},"backgroundSize":"cover","backgroundPosition":"57.99999999999999% 48%"}},"backgroundColor":"ti-accent","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-color has-ti-accent-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"border":{"bottom":{"color":"var:preset|color|ti-bg-inv","width":"16px"},"top":[],"right":[],"left":[]}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background has-link-color" style="border-bottom-color:var(--wp--preset--color--ti-bg-inv);border-bottom-width:16px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"900"}},"fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:900;text-transform:uppercase">Be Their Hero. Make a donation</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"ti-accent-secondary","textColor":"black","width":50,"className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-fill"><a class="wp-block-button__link has-black-color has-ti-accent-secondary-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="border-style:none;border-width:0px">I want to donate</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
