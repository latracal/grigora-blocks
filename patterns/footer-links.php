<?php
/**
 * Footer block pattern
 *
 * @package grigora
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Footer links', 'grigora' ),
	'categories' => array( 'text' ),
	'inserter'   => false,
	'content'    => '
		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
		<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false, "justifyContent":"center"}} --><div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"extra-small"} --> <p class="has-extra-small-font-size">' . __( 'Copyright', 'grigora' ) . ' ' . date_i18n( _x( 'Y', 'copyright date format', 'grigora' ) ) . '</p><!-- /wp:paragraph -->
		<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->
		<!-- wp:paragraph {"fontSize":"extra-small"} --> <p class="has-extra-small-font-size">' . __( 'Built with', 'grigora' ) .' <a href="https://wpgrigora.com/">'. __( 'Grigora', 'grigora' ) . '</a></p><!-- /wp:paragraph -->
		</div><!-- /wp:group -->
		</div><!-- /wp:group -->
	',
);



