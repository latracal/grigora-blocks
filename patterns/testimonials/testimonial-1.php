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
	<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}}} -->
	<div class="wp-block-columns alignfull" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:cover {"url":"https://c.pxhere.com/photos/09/d3/light_music_crowd_concert_festival-145352.jpg!d","id":2491,"dimRatio":50,"className":"grigora-testimonial","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}}} -->
	<div class="wp-block-cover grigora-testimonial" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2491" alt="" src="https://c.pxhere.com/photos/09/d3/light_music_crowd_concert_festival-145352.jpg!d" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:quote {"className":"is-style-default","style":{"typography":{"fontSize":"1.5rem"}}} -->
	<blockquote class="wp-block-quote is-style-default" style="font-size:1.5rem"><p>Which is worse, that everyone has his price, or that the price is always so low.</p><cite>SUE SHEI</cite></blockquote>
	<!-- /wp:quote --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:cover {"url":"https://c.pxhere.com/photos/2a/bd/tattoo_woman_bottle_drinking_mineral_water-64946.jpg!d","id":2491,"dimRatio":50,"className":"grigora-testimonial","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}}} -->
	<div class="wp-block-cover grigora-testimonial" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2491" alt="" src="https://c.pxhere.com/photos/2a/bd/tattoo_woman_bottle_drinking_mineral_water-64946.jpg!d" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:quote {"className":"is-style-default","style":{"typography":{"fontSize":"1.5rem"}}} -->
	<blockquote class="wp-block-quote is-style-default" style="font-size:1.5rem"><p><em>\'m killing time while I wait for life to shower me with meaning and happiness.</em></p><cite>WILL BARROW</cite></blockquote>
	<!-- /wp:quote --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:cover {"url":"https://c.pxhere.com/photos/7f/1e/hitchhiker_traveler_forest_person_explorer-836.jpg!d","id":2491,"dimRatio":50,"className":"grigora-testimonial","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}}} -->
	<div class="wp-block-cover grigora-testimonial" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2491" alt="" src="https://c.pxhere.com/photos/7f/1e/hitchhiker_traveler_forest_person_explorer-836.jpg!d" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:quote {"className":"is-style-default","style":{"typography":{"fontSize":"1.5rem"}}} -->
	<blockquote class="wp-block-quote is-style-default" style="font-size:1.5rem"><p><em>The only skills I have the patience to learn are those that have no real application in life.</em></p><cite>INDIGO VIOLET</cite></blockquote>
	<!-- /wp:quote --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	',	
);