<?php
/**
 * Query list with horizontal flex
 *
 * @package grigora
 */

return array(
	'title'         => __( 'Horizontal Posts', 'grigora' ),
	'categories'    => array( 'query' ),
	'blockTypes'    => array('core/query'),
	'content'       => '<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"inherit":true}} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
        <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
        <div class="wp-block-group">
        
        <!-- wp:post-featured-image {"width":"30%","scale":"fill"} /-->

        <!-- wp:group -->
        <div class="wp-block-group">
        <!-- wp:post-title {"className":"is-style-default","fontSize":"large","isLink":true} /-->

        <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
        <div class="wp-block-group">
            <!-- wp:post-author {"showAvatar":false} /-->
            <!-- wp:post-date /-->
            <!-- wp:post-terms {"term":"category"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:post-excerpt {"showMoreOnNewLine":true, "moreText":"Read More" } /-->
        </div>
        <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous {"label":"Previous"} /-->
        <!-- wp:query-pagination-numbers /-->
        <!-- wp:query-pagination-next {"label":"Next"} /-->
        <!-- /wp:query-pagination -->

    </div><!-- /wp:query -->',
);
