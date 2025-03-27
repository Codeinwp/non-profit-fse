<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: content-4
 * title: Content 4
 * categories: non-profit-fse
 * keywords: content
 */

use NonProfitFSE\Assets_Manager;

$img03 = Assets_Manager::get_image_url( 'non-profit-03.webp' );
$img06 = Assets_Manager::get_image_url( 'non-profit-06.webp' );

return array(
	'title'      => __( 'Content 4', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'content' ),
	'content'    => '<!-- wp:group {"metadata":{"name":"content 4"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|60"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":211,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"left":{"color":"var:preset|color|ti-accent-secondary","width":"16px"},"top":{},"right":{},"bottom":{}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $img06 ) . '" alt="" class="wp-image-211" style="border-left-color:var(--wp--preset--color--ti-accent-secondary);border-left-width:16px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:heading -->
<h2 class="wp-block-heading">From Abandoned to Adored: Luna\'s Journey</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Pupperino sees mailman, loud borking commences. Such guard dog, very brave! But wait—mailman gives treat. Mailman now best friend. Flop on back for maximum belly rubs, hooman obliged. Boof boof, tiny yapper acts like big doggo, much intimidation, very smol.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels. Ball thrown? Best day ever! Ball not thrown? Still best day ever, because hooman home.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:paragraph -->
<p>Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels. Ball thrown? Best day ever! Ball not thrown? Still best day ever, because hooman home.</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels."</p>
<!-- /wp:paragraph --><cite><em>Cite</em></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels. Ball thrown? Best day ever! Ball not thrown? Still best day ever, because hooman home.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":208,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"right":{"color":"var:preset|color|ti-accent","width":"16px"},"top":{},"bottom":{},"left":{}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $img03 ) . '" alt="" class="wp-image-208" style="border-right-color:var(--wp--preset--color--ti-accent);border-right-width:16px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
    ',
);
