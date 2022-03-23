<?php
/**
 * Hero-11 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Dark Color Highlight', 'grigora-blocks' ),
	'categories' => array( 'transparent-header-hero' ),
	'inserter'   => true,
	'content'    => '
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
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-green-cyan","style":{"border":{"radius":"49px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-vivid-green-cyan-background-color has-background" style="border-radius:49px">GET A FREE GUIDE</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
	',	
);