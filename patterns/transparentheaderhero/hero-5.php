<?php
/**
 * Request A Quote block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Request A Quote', 'grigora-blocks' ),
	'categories' => array( 'transparent-header-hero' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"url":"https://c.pxhere.com/photos/13/97/worker_construction_building_carpenter_male_job_build_helmet-893290.jpg!d","dimRatio":75,"overlayColor":"black","align":"full","className":"grigora-hero","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover alignfull grigora-hero" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="has-black-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://c.pxhere.com/photos/13/97/worker_construction_building_carpenter_male_job_build_helmet-893290.jpg!d" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:template-part {"slug":"transparent-header","theme":"grigora-blocks"} /-->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"5%","bottom":"5%","right":"5%","left":"5%"}}}} -->
	<div class="wp-block-columns" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:column {"width":""} -->
	<div class="wp-block-column"><!-- wp:group -->
	<div class="wp-block-group"></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"textColor":"background","fontSize":"medium"} -->
	<h2 class="has-background-color has-text-color has-medium-font-size">THIS IS YOUR</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textColor":"background","fontSize":"x-large"} -->
	<h2 class="has-background-color has-text-color has-x-large-font-size">PRIMARY HEADING.</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is your secondary message that supports your header.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"foreground","width":50,"style":{"spacing":{"padding":{"top":"5px","right":"5px","bottom":"5px","left":"5px"}}},"className":"is-style-grigora-flat-button","fontSize":"medium"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-grigora-flat-button has-medium-font-size"><a class="wp-block-button__link has-foreground-color has-luminous-vivid-amber-background-color has-text-color has-background" style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px">Request A Quote</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);