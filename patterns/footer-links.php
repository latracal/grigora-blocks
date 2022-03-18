<?php
/**
 * Footer block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Footer links', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"}}}, "layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
		<div class="wp-block-group" style="padding-bottom:10px">
		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false, "justifyContent":"center"}} --><div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"extra-small"} --> <p class="has-extra-small-font-size">' . esc_html__( 'Copyright', 'grigora-blocks' ) . ' ' . esc_html( date_i18n( _x( 'Y', 'copyright date format', 'grigora-blocks' ) ) ) . '</p><!-- /wp:paragraph -->
		<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->
		<!-- wp:paragraph {"fontSize":"extra-small"} --> <p class="has-extra-small-font-size">' . esc_html__( 'Built with', 'grigora-blocks' ) .' <a href="'. GRIGORA_HOME .'">'. esc_html__( 'Grigora', 'grigora-blocks' ) . '</a></p><!-- /wp:paragraph -->
		</div><!-- /wp:group -->
		</div><!-- /wp:group -->
	',
);



