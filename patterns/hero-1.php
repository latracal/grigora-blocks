<?php
/**
 * Hero-1 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-1', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5%","right":"10%","bottom":"5%","left":"10%"}}},"gradient":"luminous-dusk"} -->
	<div class="wp-block-group alignfull has-luminous-dusk-gradient-background has-background" style="padding-top:5%;padding-right:10%;padding-bottom:5%;padding-left:10%"><!-- wp:columns -->
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
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"background","className":"is-style-grigora-flat-outline"} -->
	<div class="wp-block-button is-style-grigora-flat-outline"><a class="wp-block-button__link has-background-color has-text-color">Download Now!</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="https://wpgrigora.com/wp-content/uploads/landing/herobanner.webp" alt=""/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	',	
);