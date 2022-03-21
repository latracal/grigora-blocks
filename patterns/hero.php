<?php
/**
 * 404 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}},"gradient":"luminous-dusk"} -->
	<div class="wp-block-group alignfull has-luminous-dusk-gradient-background has-background" style="padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:columns {"verticalAlignment":null} -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">Grigora Theme</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Highly Customizable</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Unique and Responsive Blocks</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Crazy Fast</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2306,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="http://localhost/latracal/wp-content/uploads/2022/03/herobanner.webp" alt="" class="wp-image-2306"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	',
);