<?php
/**
 * Gradient Card block pattern
 *
 * @package grigora-blocks
 * @since 2.0.0
 */

return array(
	'title'      => esc_html__( 'Gradient Card Transparent Header', 'grigora-blocks' ),
	'categories' => array( 'transparent-header-hero' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"customGradient":"linear-gradient(135deg,rgb(0,166,252) 0%,rgb(241,0,255) 95%)","isDark":false,"align":"full","className":"grigora-hero","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover alignfull is-light grigora-hero" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="has-background-dim-100 wp-block-cover__gradient-background has-background-dim has-background-gradient" style="background:linear-gradient(135deg,rgb(0,166,252) 0%,rgb(241,0,255) 95%)"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"transparent-header","theme":"grigora-blocks"} /-->

	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"8%","left":"5%"}}},"className":"hero-block-2"} -->
	<div class="wp-block-columns hero-block-2" style="padding-top:5%;padding-right:5%;padding-bottom:8%;padding-left:5%"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"bottom":"30px","top":"30px"}}},"backgroundColor":"background","className":"is-style-grigora-shadow"} -->
	<div class="wp-block-column is-style-grigora-shadow has-background-background-color has-background" style="padding-top:30px;padding-bottom:30px;flex-basis:30%"><!-- wp:heading {"textAlign":"center"} -->
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
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);