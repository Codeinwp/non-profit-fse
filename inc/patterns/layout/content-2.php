<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: content-2
 * title: Content 2
 * categories: non-profit-fse
 * keywords: text, content, columns
 */

use NonProfitFSE\Assets_Manager;

$img06 = Assets_Manager::get_image_url( 'non-profit-06.webp' );

return array(
	'title'      => __( 'Content 2', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'text', 'content', 'columns' ),
	'content'    => '<!-- wp:group {"metadata":{"name":"content 2"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-color has-ti-bg-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:heading -->
<h2 class="wp-block-heading">How to Make a Difference</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels. Ball thrown? Best day ever! Ball not thrown? Still best day ever, because hooman home.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-style:none;border-width:0px">Button Text</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"ti-accent-secondary","textColor":"black","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-black-color has-ti-accent-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px">Button Text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":211,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","left":"0px","bottom":"0px","right":"0px"}},"border":{"left":{"width":"0px","style":"none"},"top":[],"right":{"color":"var:preset|color|ti-accent","width":"16px"},"bottom":[]}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><img src="' . esc_url( $img06 ) . '" alt="" class="wp-image-211" style="border-right-color:var(--wp--preset--color--ti-accent);border-right-width:16px;border-left-style:none;border-left-width:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
    ',
);
