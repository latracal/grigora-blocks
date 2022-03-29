<?php
/**
 * Shape Divider 2 block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Shape Divider 2', 'grigora-blocks' ),
	'categories' => array( 'Shape Divider' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:group {"backgroundColor":"primary","className":"shape-2"} -->
	<div class="wp-block-group shape-2 has-primary-background-color has-background"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}}} -->
	<div class="wp-block-columns" style="padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	',	
);