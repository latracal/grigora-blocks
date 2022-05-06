<?php
/**
 * Hero-11 header block pattern
 *
 * Title: Dark Color Highlight
 * Slug: grigora/hero/hero-11
 * Categories: hero
 * 
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Dark Color Highlight', 'grigora-blocks' ),
	'categories' => array( 'hero' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"overlayColor":"black","contentPosition":"center center","align":"full","className":"grigora-hero","style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}}} -->
	<div class="wp-block-cover alignfull grigora-hero" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><span aria-hidden="true" class="has-black-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"x-large"} -->
	<h2 class="has-text-align-center has-background-color has-text-color has-x-large-font-size">Get exclusive travel tips</h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":3,"textColor":"background"} -->
	<h3 class="has-text-align-center has-background-color has-text-color">in our destination-specific e-guides</h3>
	<!-- /wp:heading -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-green-cyan","width":25,"style":{"border":{"radius":"49px"}}} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-25"><a class="wp-block-button__link has-vivid-green-cyan-background-color has-background" style="border-radius:49px">GET A FREE GUIDE</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);