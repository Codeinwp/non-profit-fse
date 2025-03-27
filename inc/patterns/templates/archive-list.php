<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: archive-list
 * title: Archive List
 * categories: non-profit-fse
 * keywords: archive, posts, list
 */

return array(
	'title'      => __( 'Archive List', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse-layouts' ),
	'keywords'   => array( 'archive', 'posts', 'list' ),
	'content'    => '<!-- wp:group {"tagName":"main","metadata":{"categories":["non-profit-fse-layouts"],"patternName":"non-profit-fse/templates/archive-list","name":"Archive List"},"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}},"border":{"bottom":{"color":"var:preset|color|ti-bg-alt","width":"16px"},"top":{},"right":{},"left":{}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="border-bottom-color:var(--wp--preset--color--ti-bg-alt);border-bottom-width:16px;margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:query-title {"type":"archive","textAlign":"center","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-columns has-ti-bg-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"8px","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":36} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","backgroundColor":"ti-bg-alt"} -->
<p class="has-text-align-center has-ti-bg-alt-background-color has-background">No Posts were found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous","style":{"typography":{"textTransform":"none"}}} /-->

<!-- wp:query-pagination-next {"label":"Next","style":{"typography":{"textTransform":"none"}}} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->',
);
