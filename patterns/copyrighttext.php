<?php
/**
 * Footer Copyright Text
 *
 * @package grigora-blocks
 * @since 2.02.001
 */

return array(
	'title'      => esc_html__( 'Copyright Text', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:paragraph {"fontSize":"extra-small"} --> <p class="has-extra-small-font-size">' . esc_html__( 'Copyright', 'grigora-blocks' ) . ' © ' . esc_html( date_i18n( _x( 'Y', 'copyright date format', 'grigora-blocks' ) ) ) . " " . get_bloginfo("name") . '</p><!-- /wp:paragraph -->
	',
);



