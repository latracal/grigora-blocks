<?php
/**
 * Color Hue Hero header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Color Hue Hero', 'grigora-blocks' ),
	'categories' => array( 'transparent-header-hero' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:group {"className":"grigora-hero"} -->
<div class="wp-block-group grigora-hero"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:100%"><!-- wp:cover {"url":"https://c.pxhere.com/photos/66/6e/mountain_lake_landscape_nature_abendstimmung_sky_clouds-591898.jpg!d","dimRatio":80,"customOverlayColor":"#0098db","focalPoint":{"x":"0.51","y":"0.00"},"minHeight":600,"align":"full","className":"grigora-hero","style":{"spacing":{"padding":{"top":"0%","right":"8%","bottom":"8.1%","left":"8%"}}}} -->
<div class="wp-block-cover alignfull grigora-hero" style="padding-top:0%;padding-right:8%;padding-bottom:8.1%;padding-left:8%;min-height:600px"><span aria-hidden="true" class="has-background-dim-80 wp-block-cover__gradient-background has-background-dim" style="background-color:#0098db"></span><img class="wp-block-cover__image-background" alt="" src="https://c.pxhere.com/photos/66/6e/mountain_lake_landscape_nature_abendstimmung_sky_clouds-591898.jpg!d" style="object-position:51% 0%" data-object-fit="cover" data-object-position="51% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"transparent-header","theme":"grigora-blocks"} /-->

<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"8%"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:8%"><!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"large"} -->
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

<!-- wp:cover {"overlayColor":"black","contentPosition":"center center","align":"full","className":"grigora-hero","style":{"spacing":{"padding":{"top":"0%","right":"0%","bottom":"0%","left":"0%"}}}} -->
<div class="wp-block-cover alignfull grigora-hero" style="padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%"><span aria-hidden="true" class="has-black-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"transparent-header","theme":"grigora-blocks"} /-->

<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"style":{"spacing":{"padding":{"top":"8%","bottom":"8%"}}}} -->
<div class="wp-block-column" style="padding-top:8%;padding-bottom:8%"><!-- wp:columns -->
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
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
	',	
);