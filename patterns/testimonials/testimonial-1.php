<?php
/**
 * Testimonial-1 block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Testimonial-1', 'grigora-blocks' ),
	'categories' => array( 'testimonial' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull"><!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column -->

	<!-- wp:column {"className":"grigora-testimonial"} -->
	<div class="wp-block-column grigora-testimonial"><!-- wp:cover {"url":"http://localhost/latracal/wp-content/uploads/2022/03/sq-sample40.jpeg","id":2491,"dimRatio":50,"style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}}} -->
	<div class="wp-block-cover" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2491" alt="" src="http://localhost/latracal/wp-content/uploads/2022/03/sq-sample40.jpeg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:quote {"className":"is-style-default","style":{"typography":{"fontSize":"1.5rem"}}} -->
	<blockquote class="wp-block-quote is-style-default" style="font-size:1.5rem"><p>Which is worse, that everyone has his price, or that the price is always so low.</p><cite>SUE SHEI</cite></blockquote>
	<!-- /wp:quote --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	',	
);