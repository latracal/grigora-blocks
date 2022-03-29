<?php
/**
 * Shape Divider 1 block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Shape Divider 1', 'grigora-blocks' ),
	'categories' => array( 'Shape Divider' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:group {"className":"shape-1"} -->
    <div class="wp-block-group shape-1"><!-- wp:columns {"backgroundColor":"primary"} -->
    <div class="wp-block-columns has-primary-background-color has-background"><!-- wp:column {"style":{"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}}} -->
    <div class="wp-block-column" style="padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
	',	
);