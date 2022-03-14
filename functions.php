<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grigora
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'GRIGORA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function grigora_setup() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	add_theme_support( 'wp-block-styles' );


	add_theme_support( 'editor-styles' );
		

		// Enqueue editor styles and fonts.
	add_editor_style(
		array(
			'./dist/editor.min.css'
		)
	);

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'file', 'latest-comments', 'latest-posts', 'post-title', 'quote', 'search'  ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "grigora-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			$args['path'] = get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'grigora_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function grigora_styles() {
	wp_enqueue_style(
		'grigora-style',
		get_theme_file_uri('dist/css/global.min.css'),
		[],
		GRIGORA_VERSION
	);
	wp_enqueue_style(
		'grigora-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		GRIGORA_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'grigora_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Webfonts.
require_once get_theme_file_path( 'inc/fonts.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'patterns/register-block-patterns.php' );
