<?php
/**
 * Hero-6 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-6', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}},"className":"background_3"} -->
	<div class="wp-block-group alignfull background_3" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","textColor":"background"} -->
	<h2 class="has-text-align-center has-background-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":3,"textColor":"background"} -->
	<h3 class="has-text-align-center has-background-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
	<!-- /wp:heading -->

	<!-- wp:columns {"className":"hero-block-2"} -->
	<div class="wp-block-columns hero-block-2"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"align":"center","textColor":"background"} -->
	<p class="has-text-align-center has-background-color has-text-color">In faucibus ex eget neque dapibus imperdiet. Nulla pretium vel augue a pulvinar. Phasellus convallis blandit turpis, sed porttitor quam congue vel. Aliquam quis pulvinar odio. Integer quis mauris ut dolor accumsan facilisis. Mauris pulvinar risus in risus vehicula interdum.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:paragraph -->
	<p></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	',	
);