<?php
/**
 * Hero-12 Slanting Cover
 * 
 * Title: Slanting Cover
 * Slug: grigora/transparentheaderhero/hero-12
 * Categories: transparent-header-hero
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Slanting Cover Transparent Header', 'grigora-blocks' ),
	'categories' => array( 'transparent-header-hero' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"url":"'. esc_url( get_theme_file_uri( "assets/images/hero/pencils.jpg" ) ) .'","minHeight":1030,"minHeightUnit":"px","customGradient":"linear-gradient(177deg,rgba(255,207,236,0.95) 0%,rgba(205,200,245,0.95) 89%,rgb(205,200,245) 89%,rgb(255,255,255) 89.2%)","contentPosition":"top center","align":"full","className":"grigora-hero","style":{"spacing":{"padding":{"top":"0%","right":"0%","bottom":"0%","left":"0%"}}}} -->
	<div class="wp-block-cover alignfull has-custom-content-position is-position-top-center grigora-hero" style="padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%;min-height:1030px"><span aria-hidden="true" class="has-background-dim-100 wp-block-cover__gradient-background has-background-dim has-background-gradient" style="background:linear-gradient(177deg,rgba(255,207,236,0.95) 0%,rgba(205,200,245,0.95) 89%,rgb(205,200,245) 89%,rgb(255,255,255) 89.2%)"></span><img class="wp-block-cover__image-background" alt="" src="'. esc_url( get_theme_file_uri( "assets/images/hero/pencils.jpg" ) ) .'" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"transparent-header","theme":"grigora-blocks"} /-->

	<!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"3%","right":"8%","bottom":"3%","left":"8%"}}},"layout":{"inherit":false,"contentSize":"1600px"}} -->
	<div class="wp-block-group" style="padding-top:3%;padding-right:8%;padding-bottom:3%;padding-left:8%"><!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"verticalAlignment":"center","className":"hero-block-2"} -->
	<div class="wp-block-columns are-vertically-aligned-center hero-block-2"><!-- wp:column {"verticalAlignment":"center","width":"900px","className":"wow animate__animated animate__bounceInLeft"} -->
	<div class="wp-block-column is-vertically-aligned-center wow animate__animated animate__bounceInLeft" style="flex-basis:900px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"6rem","lineHeight":"1.1","fontStyle":"normal","fontWeight":"400"}},"textColor":"black"} -->
	<h2 class="has-black-color has-text-color" style="font-size:6rem;font-style:normal;font-weight:400;line-height:1.1;text-transform:uppercase">turn your <strong>creativity</strong> into reality</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"15px"} -->
	<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"border":{"radius":"10px"},"color":{"gradient":"linear-gradient(90deg,rgb(169,7,227) 0%,rgb(121,0,234) 100%)"},"spacing":{"padding":{"top":"1.4vw","bottom":"1.4vw","left":"3.6vw","right":"3.6vw"}}},"className":"is-style-grigora-button-shadow grigora-download-button","fontSize":"lx-large"} -->
	<div class="wp-block-button has-custom-font-size is-style-grigora-button-shadow grigora-download-button has-lx-large-font-size"><a class="wp-block-button__link has-white-color has-text-color has-background" href="#" style="border-radius:10px;background:linear-gradient(90deg,rgb(169,7,227) 0%,rgb(121,0,234) 100%);padding-top:1.4vw;padding-right:3.6vw;padding-bottom:1.4vw;padding-left:3.6vw"><strong>CREATE WEBSITES</strong></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"70%"} -->
	<div class="wp-block-column" style="flex-basis:70%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="'. esc_url( get_theme_file_uri( "assets/images/hero/banner-illustration.png" ) ) .'" alt=""/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
	',	
);