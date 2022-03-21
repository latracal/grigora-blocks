<?php
/**
 * Hero-4 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-4', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}},"className":"work"} -->
	<div class="wp-block-group alignfull background_1" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
	<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">Heading / Title</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin eros tempor ex varius placerat. Ut volutpat tortor a pretium interdum..<a href="https://templates.unbounce.com/flora/#"></a></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#a87bdb"}},"className":"is-style-grigora-flat-button"} -->
	<div class="wp-block-button is-style-grigora-flat-button"><a class="wp-block-button__link has-background" style="background-color:#a87bdb">Button</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"70%"} -->
	<div class="wp-block-column" style="flex-basis:70%"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	',	
);