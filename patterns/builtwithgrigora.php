<?php
/**
 * Footer built with grigora pattern
 *
 * @package grigora-blocks
 * @since 2.02.001
 */

return array(
	'title'      => esc_html__( 'Built with Grigora', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
		<!-- wp:paragraph {"fontSize":"extra-small"} --> <p class="has-extra-small-font-size">' . esc_html__( 'Built with', 'grigora-blocks' ) .' <a href="'. GRIGORA_HOME .'">'. esc_html__( 'Grigora', 'grigora-blocks' ) . '</a></p><!-- /wp:paragraph -->
	',
);



