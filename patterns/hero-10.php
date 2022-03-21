<?php
/**
 * Hero-10 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-10', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"url":"'.esc_url( get_theme_file_uri( 'assets/images/hero10cover.jpg' ) ).'","id":2531,"dimRatio":0,"focalPoint":{"x":"0.87","y":"0.65"},"minHeight":50,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"3%","right":"8%","bottom":"0%","left":"8%"}}}} -->
	<div class="wp-block-cover alignfull is-light" style="padding-top:3%;padding-right:8%;padding-bottom:0%;padding-left:8%;min-height:50vh"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2531" alt="" src="'.esc_url( get_theme_file_uri( 'assets/images/hero10cover.jpg' ) ).'" style="object-position:87% 65%" data-object-fit="cover" data-object-position="87% 65%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":null} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"40%", "verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"textColor":"background","fontSize":"x-large"} -->
	<h2 class="has-background-color has-text-color has-x-large-font-size">Save yourself. Save each other.</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Mauris pellentesque gravida amet dui tempor, diam nam sed eget semper ultrices tristique nibh id nec quam vestibulum consectetur ut lacus neque, scelerisque cras.<a href="#"></a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"verticalAlignment":null} -->
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
	
	<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:image {"align":"center","id":2530,"sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="'.esc_url( get_theme_file_uri( 'assets/images/hero10featured.png' ) ).'" alt="" class="wp-image-2530"/></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);