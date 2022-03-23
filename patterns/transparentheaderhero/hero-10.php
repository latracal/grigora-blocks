<?php
/**
 * Hero-10 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Person Showcase Transparent Header', 'grigora-blocks' ),
	'categories' => array( 'transparent-header-hero' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"url":"https://wpgrigora.com/blocks/wp-content/assets/images/hero/clouds.jpg","dimRatio":0,"focalPoint":{"x":"0.87","y":"0.65"},"minHeight":50,"minHeightUnit":"vh","isDark":false,"align":"full","className":"grigora-hero hero-10","style":{"spacing":{"padding":{"top":"0%","right":"0%","bottom":"0%","left":"0%"}}}} -->
	<div class="wp-block-cover alignfull is-light grigora-hero hero-10" style="padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%;min-height:50vh"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://wpgrigora.com/blocks/wp-content/assets/images/hero/clouds.jpg" style="object-position:87% 65%" data-object-fit="cover" data-object-position="87% 65%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"transparent-header","theme":"grigora-blocks"} /-->

	<!-- wp:columns {"style":{"spacing":{"padding":{"right":"8%","left":"8%"}}}} -->
	<div class="wp-block-columns" style="padding-right:8%;padding-left:8%"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"textColor":"background","fontSize":"x-large"} -->
	<h2 class="has-background-color has-text-color has-x-large-font-size">Save yourself. Save each other.</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Mauris pellentesque gravida amet dui tempor, diam nam sed eget semper ultrices tristique nibh id nec quam vestibulum consectetur ut lacus neque, scelerisque cras.<a href="#"></a></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-grigora-flat-outline"} -->
	<div class="wp-block-button is-style-grigora-flat-outline"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4,"textColor":"background"} -->
	<h4 class="has-background-color has-text-color">+1 123 456 78 90</h4>
	<!-- /wp:heading --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:image {"align":"center"} -->
	<div class="wp-block-image"><figure class="aligncenter"><img src="https://wpgrigora.com/blocks/wp-content/assets/images/hero/hero-10-thumbnail.png" alt=""/></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);