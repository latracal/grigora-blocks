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
define( 'GRIGORA_DEBUG', true );
define( 'GRIGORA_SLUG', get_option('stylesheet'));
define( 'GRIGORA_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'GRIGORA_HOME', 'https://wpgrigora.com/blocks/');
define( 
	'GRIGORA_KNOWN_TEMPLATES', 
	array(
		'templates' => 
		array( 
			'404' => array(
				'name' => '404'
			),
			'archive' => array(
				'name' => 'Archive'
			),
			'blank' => array(
				'name' => 'Blank'
			),
			'index' => array(
				'name' => 'Index'
			),
			'no-sidebar-fullwidth-page-template' => array(
				'name' => 'No Sidebar Page - Full Width'
			),
			'no-sidebar-page-template' => array(
				'name' => 'No Sidebar Page'
			),
			'no-sidebar-post-template' => array(
				'name' => 'No Sidebar Post'
			),
			'no-sidebar-widewidth-page-template' => array(
				'name' => 'No Sidebar Page - Wide Width'
			),
			'no-sidebar-widewidth-n-back-template' => array(
				'name' => 'No Sidebar No Background - Wide Width'
			),
			'no-sidebar-widewidth-post-template' => array(
				'name' => 'No Sidebar Post - Wide Width'
			),
			'no-title-template' => array(
				'name' => 'No title'
			),
			'page' => array(
				'name' => 'Page'
			),
			'search' => array(
				'name' => 'Search'
			),
			'single' => array(
				'name' => 'Single'
			)
		),
		'parts' => 
		array(
			'header' => array(
				'title' => 'Header',
				'area' => 'header'
			),
			'transparent-header' => array(
				'title' => 'Transparent Header',
				'area' => 'header'
			),
			'sidebar' => array(
				'title' => 'Sidebar',
				'area' => 'sidebar'
			),
			'footer' => array(
				'title' => 'Footer',
				'area' => 'footer'
			),
			'footer-1' => array(
				'title' => 'Footer-1',
				'area' => 'footer'
			),
			'footer-2' => array(
				'title' => 'Footer-2',
				'area' => 'footer'
			),
			'footer-3' => array(
				'title' => 'Footer-3',
				'area' => 'footer'
			),
			'footer-4' => array(
				'title' => 'Footer-4',
				'area' => 'footer'
			),
			'footer-5' => array(
				'title' => 'Footer-5',
				'area' => 'footer'
			),
			'footer-6' => array(
				'title' => 'Footer-6',
				'area' => 'footer'
			),
			'footer-7' => array(
				'title' => 'Footer-7',
				'area' => 'footer'
			)
		)
	)
);

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

// Custom Settings
require_once get_theme_file_path( 'inc/init.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'patterns/register-block-patterns.php' );