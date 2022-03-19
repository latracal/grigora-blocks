<?php
/**
 * hero header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero', 'grigora-blocks' ),
	// 'categories' => array( 'text' ),
	// 'inserter'   => false,
	'content'    => '
		<!-- wp:heading {"className":"is-style-hero","background":"linear-gradient(90deg, #6a8dde 0%, #68c6df 100%)","min-height":"800px"} -->
		<div class="is-style-hero"></div>
		<!-- /wp:heading -->		
	',
);