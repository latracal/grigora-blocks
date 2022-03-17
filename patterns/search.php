<?php
/**
 * Search page block pattern
 *
 * @package grigora
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Search', 'grigora' ),
	'categories' => array( 'text' ),
	'inserter'   => false,
	'content'    => '<!-- wp:heading {"className":"is-style-default","fontSize":"large"} -->
	<h2 class="is-style-default has-large-font-size">' . grigora_search_title() . '</h2>
	<!-- /wp:heading -->',
);
