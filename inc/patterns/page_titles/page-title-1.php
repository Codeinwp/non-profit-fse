<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package non-profit-fse
 * @since 1.0.0
 *
 * slug: page-title-1
 * title: Page Title - Simple
 * categories: non-profit-fse
 * keywords: Page Title, Post title
 */

return array(
	'title'      => __( 'Page Title - Simple', 'non-profit-fse' ),
	'categories' => array( 'non-profit-fse', 'posts' ),
	'keywords'   => array( 'Page Title', 'Post title' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"8px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:8px"><!-- wp:post-title {"textAlign":"center","level":1} /--></div>
<!-- /wp:group -->
        ',
);
