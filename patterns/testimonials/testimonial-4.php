<?php
/**
 * Testimonial-4 block pattern
 * 
 * Title: Testimonial-4
 * Slug: grigora/testimonials/testimonial-4
 * Categories: testimonials
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Testimonial-4', 'grigora-blocks' ),
	'categories' => array( 'testimonials' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}},"className":"grigora-testimonial-5"} -->
	<div class="wp-block-columns alignfull grigora-testimonial-5" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:quote {"className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default"><p><em>Calvin: You know sometimes when Im talking, my words cant keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.</em></p></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:quote {"className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default"><p><em><em>Thank you. before I begin, Id like everyone to notice that my report is in a professional, clear plastic binder...When a report looks this good, you know itll get an A. Thats a tip kids. Write it down.</em></em></p></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:quote {"className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default"><p><em><em>My behaviour is addictive functioning in a disease process of toxic co-dependency. I need holistic healing and wellness before Ill accept any responsibility for my actions.</em></em></p></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	',	
);