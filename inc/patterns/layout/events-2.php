<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: events-2
 * title: Events 2
 * categories: non-profit-fse
 * keywords: events, features, columns
 */

use NonProfitFSE\Assets_Manager;

$img05 = Assets_Manager::get_image_url( 'non-profit-05.webp' );
$img06 = Assets_Manager::get_image_url( 'non-profit-06.webp' );

return array(
	'title'      => __( 'Events 2', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'events', 'features', 'columns' ),
	'content'    => '<!-- wp:group {"metadata":{"name":"events 2"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Upcoming Events</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels. Ball thrown? Best day ever! Ball not thrown? Still best day ever, because hooman home.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":211,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|ti-accent-secondary","width":"16px"},"top":[],"right":[],"left":[]}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $img06 ) . '" alt="" class="wp-image-211" style="border-bottom-color:var(--wp--preset--color--ti-accent-secondary);border-bottom-width:16px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Event title goes here</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Event info</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Join us for a fun-filled day of meeting adorable, adoptable dogs! Find your new best friend and give a rescue dog a forever home.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":210,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|ti-accent-secondary","width":"16px"},"top":[],"right":[],"left":[]}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $img05 ) . '" alt="" class="wp-image-210" style="border-bottom-color:var(--wp--preset--color--ti-accent-secondary);border-bottom-width:16px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Event title goes here</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Event info</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Enjoy craft beer, live music, and raffle prizes—all while supporting a great cause! Meet our rescue pups and help us raise funds for food and adoption programs.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
