<?php
/**
 * Color Hue Hero header block pattern
 *
 * @package grigora-blocks
 * @since 2.0.0
 */

return array(
	'title'      => esc_html__( 'Color Hue Transparent Header Hero', 'grigora-blocks' ),
	'categories' => array( 'transparent-header-hero' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"url":"'. esc_url( get_theme_file_uri( "assets/images/hero/colorhuebackground.jpg" ) ) .'","dimRatio":80,"customOverlayColor":"#0098db","focalPoint":{"x":"0.51","y":"0.00"},"align":"full","className":"grigora-hero","style":{"spacing":{"padding":{"top":"0%","right":"0%","bottom":"0%","left":"0%"}}}} -->
	<div class="wp-block-cover alignfull grigora-hero" style="padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%"><span aria-hidden="true" class="has-background-dim-80 wp-block-cover__gradient-background has-background-dim" style="background-color:#0098db"></span><img class="wp-block-cover__image-background" alt="" src="'. esc_url( get_theme_file_uri( "assets/images/hero/colorhuebackground.jpg" ) ) .'" style="object-position:51% 0%" data-object-fit="cover" data-object-position="51% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"transparent-header","theme":"grigora-blocks"} /-->

	<!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"large"} -->
	<h2 class="has-text-align-center has-background-color has-text-color has-large-font-size">The Best Block Theme For General Bloggers</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"medium"} -->
	<p class="has-text-align-center has-background-color has-text-color has-medium-font-size"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"className":"hero-block-2"} -->
	<div class="wp-block-columns hero-block-2"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"align":"center","textColor":"background"} -->
	<p class="has-text-align-center has-background-color has-text-color">In faucibus ex eget neque dapibus imperdiet. Nulla pretium vel augue a pulvinar. Phasellus convallis blandit turpis, sed porttitor quam congue vel. Aliquam quis pulvinar odio. Integer quis mauris ut dolor accumsan facilisis. Mauris pulvinar risus in risus vehicula interdum.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);