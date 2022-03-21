<?php
/**
 * Hero-7 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-7', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"overlayColor":"primary","isDark":false,"style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}}} -->
	<div class="wp-block-cover is-light" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><span aria-hidden="true" class="has-primary-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
	<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","textColor":"background","fontSize":"small"} -->
	<h2 class="has-text-align-left has-background-color has-text-color has-small-font-size">Welcome to wordpress</h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"left","level":3,"textColor":"background","fontSize":"large"} -->
	<h3 class="has-text-align-left has-background-color has-text-color has-large-font-size">Grigora Wordpress Theme</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">In faucibus ex eget neque dapibus imperdiet. Nulla pretium vel augue a pulvinar.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"foreground","className":"is-style-grigora-flat-button"} -->
	<div class="wp-block-button is-style-grigora-flat-button"><a class="wp-block-button__link has-foreground-color has-white-background-color has-text-color has-background">Button</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"33.34%"} -->
	<div class="wp-block-column" style="flex-basis:33.34%"></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);