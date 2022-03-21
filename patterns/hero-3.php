<?php
/**
 * Hero-3 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-3', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}},"className":"mountain"} -->
	<div class="wp-block-group alignfull mountain" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><!-- wp:columns {"className":"hero-block-2"} -->
	<div class="wp-block-columns hero-block-2"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"bottom":"30px"}},"color":{"background":"#ffffff99"}},"className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-background" style="background-color:#ffffff99;padding-bottom:30px;flex-basis:30%"><!-- wp:heading {"textAlign":"center"} -->
	<h2 class="has-text-align-center">Heading / Title</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Subtitle / Tagline</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":75} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-75"><a class="wp-block-button__link">Button</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	',	
);