<?php
/**
 * Block patterns
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

/**
 * Display the search term in the heading on the search page.
 * Todo: Remove when the query title block is updated to work for the search page.
 *
 * @since 1.0.0
 *
 * @return string Search page title
 */
function grigora_search_title() {
	if ( isset( $_GET['s'] ) ) {
		$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
		/* translators: %s: Search term. */
		return isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'grigora-blocks' ), esc_html( $search_term ) ) : __( 'Search results', 'grigora-blocks' );
	}
}

/**
 * Display a link to the privacy policy page, if one is published.

 * @since 1.0.0
 *
 * @return string Link to the privacy policy page, if one is published.
 */
function grigora_privacy() {
	if ( get_the_privacy_policy_link() ) {
		return '<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size">' . get_the_privacy_policy_link() . '</p><!-- /wp:paragraph -->';
	}
}

/**
 * Registers block patterns and block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
function grigora_register_block_patterns() {

	/**
	 * Register an block pattern category.
	 *
	 * @since 1.0.0
	 */

	register_block_pattern_category(
		'hero',
		array( 'label' => __( 'Grigora Heros', 'grigora-blocks' ) )
	);

	register_block_pattern_category(
		'transparent-header-hero',
		array( 'label' => __( 'Grigora Transparent Header Heros', 'grigora-blocks' ) )
	);

	register_block_pattern_category(
		'testimonials',
		array( 'label' => __( 'Grigora Testimonials', 'grigora-blocks' ) )
	);

	// Array of block pattern names.
	$block_patterns = array(
		'404',
		'footer-links',
		'hero/hero-2',
		'hero/hero-3',
		'hero/hero-4',
		'hero/hero-5',
		'hero/hero-7',
		'hero/hero-10',
		'hero/hero-11',
		'transparentheaderhero/hero-2',
		'transparentheaderhero/hero-3',
		'transparentheaderhero/hero-4',
		'transparentheaderhero/hero-5',
		'transparentheaderhero/hero-7',
		'transparentheaderhero/hero-10',
		'transparentheaderhero/hero-11',
		'search',
		'testimonials/testimonial-1',
		'testimonials/testimonial-2'
	);

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( 'patterns/' . $block_pattern . '.php' );
		register_block_pattern(
			'grigora/' . $block_pattern,
			require $pattern_file
		);
	}

}
add_action( 'init', 'grigora_register_block_patterns', 9 );