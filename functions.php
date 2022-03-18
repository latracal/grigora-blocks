<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'GRIGORA_DEBUG', false );
define( 'GRIGORA_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'GRIGORA_HOME', 'https://wpgrigora.com/');

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function grigora_setup() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );

	// Enqueue editor styles and fonts.
	add_editor_style(
		array(
			'./dist/css/grigora-editor.min.css'
		)
	);

	add_theme_support( 'post-thumbnails' ); 

	add_theme_support('title-tag');
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
		]
	);

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
	$ver = GRIGORA_DEBUG ? time() : GRIGORA_VERSION;
	wp_enqueue_style(
		'grigora-style',
		get_theme_file_uri('dist/css/global.min.css'),
		[],
		$ver
	);
	wp_register_script('grigora_main_js', get_theme_file_uri('js/main.js'), [], $ver, true);
	wp_enqueue_script('grigora_main_js');
	if(current_user_can('manage_options')){
		wp_register_script('grigora_editor_js', get_theme_file_uri('js/editor.js'), [], $ver, true);
		wp_enqueue_script('grigora_editor_js');
	}
}


add_action( 'wp_enqueue_scripts', 'grigora_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Webfonts.
// require_once get_theme_file_path( 'inc/fonts.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'patterns/register-block-patterns.php' );
