<?php
/**
 * Testimonial-3 block pattern
 * 
 * Title: Testimonial-3
 * Slug: grigora/testimonials/testimonial-3
 * Categories: testimonials
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Testimonial-3', 'grigora-blocks' ),
	'categories' => array( 'testimonials' ),
	'inserter'   => true,
	'content'    => '<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}},"className":"grigora-testimonial-4"} -->
	<div class="wp-block-columns alignfull grigora-testimonial-4" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:column {"style":{"spacing":{"padding":{"top":"2%","right":"2%","bottom":"2%","left":"2%"}},"color":{"background":"#2c3447"}},"className":"background-image"} -->
	<div class="wp-block-column background-image has-background" style="background-color:#2c3447;padding-top:2%;padding-right:2%;padding-bottom:2%;padding-left:2%"><!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
	<div class="wp-block-image" style="border-radius:50%"><figure class="aligncenter size-full is-resized"><img src="'. esc_url( get_theme_file_uri( "assets/images/testimonial/face1.png" ) ) .'" alt="" width="200" height="200" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background"} -->
	<h2 class="has-text-align-center has-background-color has-text-color" style="font-style:normal;font-weight:400">Eleanor Crisp</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background"} -->
	<h4 class="has-text-align-center has-background-color has-text-color" style="font-style:normal;font-weight:400">UX Design</h4>
	<!-- /wp:heading -->
	
	<!-- wp:quote -->
	<blockquote class="wp-block-quote"><p>Dad buried in landslide! Jubilant throngs fill streets! Stunned father inconsolable - demands recount!</p></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"2%","right":"2%","bottom":"2%","left":"2%"}},"color":{"background":"#2c3447"}},"className":"background-image"} -->
	<div class="wp-block-column background-image has-background" style="background-color:#2c3447;padding-top:2%;padding-right:2%;padding-bottom:2%;padding-left:2%"><!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"large","style":{"border":{"radius":"50%"}}} -->
	<div class="wp-block-image" style="border-radius:50%"><figure class="aligncenter size-large is-resized"><img src="'. esc_url( get_theme_file_uri( "assets/images/testimonial/face2.png" ) ) .'" alt="" width="200" height="200" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background"} -->
	<h2 class="has-text-align-center has-background-color has-text-color" style="font-style:normal;font-weight:400">Gordon Norman</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background"} -->
	<h4 class="has-text-align-center has-background-color has-text-color" style="font-style:normal;font-weight:400">Accountant</h4>
	<!-- /wp:heading -->
	
	<!-- wp:quote -->
	<blockquote class="wp-block-quote"><p>Wormwood : Calvin, how about you? Calvin : Hard to say maam. I think my cerebellum has just fused.</p></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"2%","right":"2%","bottom":"2%","left":"2%"}},"color":{"background":"#2c3447"}},"className":"background-image"} -->
	<div class="wp-block-column background-image has-background" style="background-color:#2c3447;padding-top:2%;padding-right:2%;padding-bottom:2%;padding-left:2%"><!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"large","style":{"border":{"radius":"50%"}}} -->
	<div class="wp-block-image" style="border-radius:50%"><figure class="aligncenter size-large is-resized"><img src="'. esc_url( get_theme_file_uri( "assets/images/testimonial/face3.png" ) ) .'" alt="" width="200" height="200" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background"} -->
	<h2 class="has-text-align-center has-background-color has-text-color" style="font-style:normal;font-weight:400">Sue Shei</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background"} -->
	<h4 class="has-text-align-center has-background-color has-text-color" style="font-style:normal;font-weight:400">Public Relations</h4>
	<!-- /wp:heading -->
	
	<!-- wp:quote -->
	<blockquote class="wp-block-quote"><p>The strength to change what I can, the inability to accept what I cant and the incapacity to tell the difference.</p></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	',	
);