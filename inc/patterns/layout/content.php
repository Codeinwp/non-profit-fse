<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: content
 * title: Content
 * categories: non-profit-fse
 * keywords: text, content, columns
 */

use NonProfitFSE\Assets_Manager;

$img05 = Assets_Manager::get_image_url( 'non-profit-05.webp' );

return array(
	'title'      => __( 'Content', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'text', 'content', 'columns' ),
	'content'    => '<!-- wp:group {"metadata":{"name":"content"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg-alt","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-color has-ti-bg-alt-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":210,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","left":"0px","bottom":"0px","right":"0px"}},"border":{"left":{"color":"var:preset|color|ti-accent-secondary","width":"16px"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><img src="' . esc_url( $img05 ) . '" alt="" class="wp-image-210" style="border-left-color:var(--wp--preset--color--ti-accent-secondary);border-left-width:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:heading -->
<h2 class="wp-block-heading">Why It Matters</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels. Ball thrown? Best day ever! Ball not thrown? Still best day ever, because hooman home.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 class="wp-block-heading">500+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Nap time in sunbeam, tail wag in sleep</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 class="wp-block-heading">1500+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Nap time in sunbeam, tail wag in sleep</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
