<?php
/**
 * Hero-4 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Parallax Centered', 'grigora-blocks' ),
	'categories' => array( 'transparent-header-hero' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"url":"https://c.pxhere.com/images/56/19/a3bf4da416a6d64c493b9d3b5d17-1656606.jpg!d","id":2306,"hasParallax":true,"dimRatio":30,"isDark":false,"align":"full","className":"grigora-hero","style":{"spacing":{"padding":{"top":"0%","right":"0%","bottom":"0%","left":"0%"}}}} -->
	<div class="wp-block-cover alignfull is-light has-parallax grigora-hero" style="padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%;background-image:url(https://c.pxhere.com/images/56/19/a3bf4da416a6d64c493b9d3b5d17-1656606.jpg!d)"><span aria-hidden="true" class="has-background-dim-30 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"transparent-header","theme":"grigora-blocks"} /-->
	
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}},"className":"hero-block-2"} -->
	<div class="wp-block-columns are-vertically-aligned-center hero-block-2" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:heading {"textAlign":"center","textColor":"background"} -->
	<h2 class="has-text-align-center has-background-color has-text-color">Heading / Title</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"background"} -->
	<p class="has-text-align-center has-background-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin eros tempor ex varius placerat. Ut volutpat tortor a pretium interdum..<a href="https://templates.unbounce.com/flora/#"></a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":50,"align":"center","style":{"color":{"background":"#a87bdb"}},"className":"is-style-grigora-flat-button"} -->
	<div class="wp-block-button aligncenter has-custom-width wp-block-button__width-50 is-style-grigora-flat-button"><a class="wp-block-button__link has-background" style="background-color:#a87bdb">Button</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem"}},"textColor":"background"} -->
	<p class="has-text-align-center has-background-color has-text-color" style="font-size:0.8rem">Terms &amp; Conditions Apply*</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);