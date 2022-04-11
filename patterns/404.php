<?php
/**
 * 404 header block pattern
 *
 * @package grigora-blocks
 * @since 2.0.0
 */

return array(
	'title'      => esc_html__( '404', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => false,
	'content'    => '
		<!-- wp:heading {"className":"is-style-default","textAlign":"center","fontSize":"x-large"} -->
		<h2 class="has-text-align-center has-x-large-font-size is-style-default">' . esc_html__( 'Page Not Found', 'grigora-blocks' ) . '</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html__( 'The page you requested does not exist or has moved. Maybe try a search?', 'grigora-blocks' ) . '</p><!-- /wp:paragraph -->
		<!-- wp:search {"label":"Search", "placeholder":"'.esc_html__( 'Search …', 'grigora-blocks' ).'" ,"showLabel":false,"buttonText":"Search"} /-->
		<!-- wp:spacer {"height":40} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	',
);
