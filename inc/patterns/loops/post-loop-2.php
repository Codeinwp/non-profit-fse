<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: posts-loop-2
 * title: Posts loop 2
 * categories: non-profit-fse
 * keywords: posts, query
 */

return array(
	'title'      => __( 'Posts loop 2', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse' ),
	'keywords'   => array( 'posts', 'query' ),
	'content'    => '<!-- wp:group {"metadata":{"name":"posts loop 2"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|60"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg-alt","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-color has-ti-bg-alt-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Latest News</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"bottom":{"color":"var:preset|color|ti-accent-secondary","width":"16px"},"top":[],"right":[],"left":[]}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->',
);
