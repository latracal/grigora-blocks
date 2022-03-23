<?php
/**
 * Hero-3 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Parallax Card Transparent Header', 'grigora-blocks' ),
	'categories' => array( 'transparent-header-hero' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"url":"https://wpgrigora.com/blocks/wp-content/assets/images/hero/parallaxcardbackground.jpg","hasParallax":true,"dimRatio":20,"overlayColor":"black","isDark":false,"align":"full","className":"grigora-hero grigora_align_top","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover alignfull is-light has-parallax grigora-hero grigora_align_top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;background-image:url(https://wpgrigora.com/blocks/wp-content/assets/images/hero/parallaxcardbackground.jpg)"><span aria-hidden="true" class="has-black-background-color has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"transparent-header","theme":"grigora-blocks"} /-->

	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"8%","left":"5%"}}},"className":"hero-block-2"} -->
	<div class="wp-block-columns hero-block-2" style="padding-top:5%;padding-right:5%;padding-bottom:8%;padding-left:5%"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"bottom":"30px","top":"30px"}},"color":{"background":"#ffffff99"}},"className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-background" style="background-color:#ffffff99;padding-top:30px;padding-bottom:30px;flex-basis:30%"><!-- wp:heading {"textAlign":"center"} -->
	<h2 class="has-text-align-center">Heading / Title</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Subtitle / Tagline</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"black","width":75,"className":"is-style-grigora-flat-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-75 is-style-grigora-flat-outline"><a class="wp-block-button__link has-black-color has-text-color">Button</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);