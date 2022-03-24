<?php
/**
 * Testimonial-2 block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Testimonial-2', 'grigora-blocks' ),
	'categories' => array( 'testimonial' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}}} -->
	<div class="wp-block-columns alignfull" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:column {"backgroundColor":"background","className":"grigora-testimonial-2 is-style-default"} -->
	<div class="wp-block-column grigora-testimonial-2 is-style-default has-background-background-color has-background"><!-- wp:columns {"className":"p-3 mb-0 bt-5"} -->
	<div class="wp-block-columns p-3 mb-0 bt-5"><!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:quote -->
	<blockquote class="wp-block-quote"><p>If you do the job badly enough, sometimes you don\'t get asked to do it again.</p><cite>Wisteria Ravenclaw</cite></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
	<div class="wp-block-column" style="flex-basis:100%"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"100%"} -->
	<div class="wp-block-column" style="flex-basis:100%"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
	<div class="wp-block-column" style="flex-basis:100%"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"100%"} -->
	<div class="wp-block-column" style="flex-basis:100%"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	',	
);