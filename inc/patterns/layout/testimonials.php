<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: testimonials
 * title: Testimonials
 * categories: non-profit-fse
 * keywords: Testimonials, review
 */

use NonProfitFSE\Assets_Manager;

return array(
	'title'      => __( 'Testimonials', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'Testimonials', 'review' ),
	'content'    => '<!-- wp:group {"metadata":{"name":"testimonials"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|80"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-color has-ti-bg-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size">Testimonial Section Title</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"left":{"color":"var:preset|color|ti-accent-secondary","width":"16px"}},"spacing":{"padding":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--ti-accent-secondary);border-left-width:16px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">"Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels. Ball thrown? Best day ever! Ball not thrown? Still best day ever, because hooman home."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><em>Cite</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50"}},"border":{"left":{"color":"var:preset|color|ti-accent-secondary","width":"16px"},"top":{},"right":{},"bottom":{}}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--ti-accent-secondary);border-left-width:16px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">"Nap time in sunbeam, tail wag in sleep—dreaming of chasing squirrels. Ball thrown? Best day ever! Ball not thrown? Still best day ever, because hooman home."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><em>Cite</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"ti-accent","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-ti-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|ti-bg"}}}},"textColor":"ti-bg","fontSize":"large"} -->
<p class="has-ti-bg-color has-text-color has-link-color has-large-font-size">Nap time in sunbeam, tail wag in sleep</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"ti-accent-secondary","textColor":"black","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-ti-accent-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">Button Text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
