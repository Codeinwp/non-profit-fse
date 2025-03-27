<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: features
 * title: Features
 * categories: non-profit-fse
 * keywords: features, columns
 */

use NonProfitFSE\Assets_Manager;

$img03 = Assets_Manager::get_image_url( 'non-profit-03.webp' );
$img04 = Assets_Manager::get_image_url( 'non-profit-04.webp' );
$img07 = Assets_Manager::get_image_url( 'non-profit-07.webp' );

return array(
	'title'      => __( 'Features', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'features', 'columns' ),
	'content'    => '<!-- wp:group {"metadata":{"name":"features"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|60"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg-alt","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-color has-ti-bg-alt-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Ways to help</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:image {"id":208,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|ti-accent-secondary","width":"16px"},"top":[],"right":[],"left":[]}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $img03 ) . '" alt="" class="wp-image-208" style="border-bottom-color:var(--wp--preset--color--ti-accent-secondary);border-bottom-width:16px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Make a donation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:image {"id":212,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|ti-accent-secondary","width":"16px"},"top":[],"right":[],"left":[]}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $img07 ) . '" alt="" class="wp-image-212" style="border-bottom-color:var(--wp--preset--color--ti-accent-secondary);border-bottom-width:16px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Sponsor a Dog</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:image {"id":209,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|ti-accent-secondary","width":"16px"},"top":[],"right":[],"left":[]}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $img04 ) . '" alt="" class="wp-image-209" style="border-bottom-color:var(--wp--preset--color--ti-accent-secondary);border-bottom-width:16px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Adopt a Friend</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
