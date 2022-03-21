<?php
/**
 * Hero-5 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-5', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10%","right":"8%","bottom":"10%","left":"8%"}}},"className":"background_2"} -->
	<div class="wp-block-group alignfull background_2" style="padding-top:10%;padding-right:8%;padding-bottom:10%;padding-left:8%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
	<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group -->
	<div class="wp-block-group"></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"33.34%"} -->
	<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">THIS IS YOUR</h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">PRIMARY HEADING.</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is your secondary message that supports your header.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-amber","width":50} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-luminous-vivid-amber-background-color has-background">Button</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	',	
);