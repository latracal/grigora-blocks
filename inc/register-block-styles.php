<?php
/**
 * Block styles.
 *
 * @package grigora
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function grigora_register_block_styles() {

	// register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
	// 	'core/navigation',
	// 	array(
	// 		'name'  => 'grigora-sticky',
	// 		'label' => __( 'Sticky menu button', 'grigora' ),
	// 	)
	// );

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-flat-button',
			'label' => __( 'Flat button', 'grigora' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-button-shadow',
			'label' => __( 'Button with shadow', 'grigora' ),
		)
	);

	// register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
	// 	'core/navigation',
	// 	array(
	// 		'name'  => 'grigora-navigation-button',
	// 		'label' => __( 'Button style', 'grigora' ),
	// 	)
	// );

	// register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
	// 	'core/navigation',
	// 	array(
	// 		'name'  => 'grigora-navigation-button-shadow',
	// 		'label' => __( 'Button with shadow', 'grigora' ),
	// 	)
	// );

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'grigora-list-underline',
			'label' => __( 'Underlined list items', 'grigora' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grigora-box-shadow',
			'label' => __( 'Box shadow', 'grigora' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'grigora-box-shadow',
			'label' => __( 'Box shadow', 'grigora' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'grigora-box-shadow',
			'label' => __( 'Box shadow', 'grigora' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'grigora-text-shadow',
			'label' => __( 'Text shadow', 'grigora' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'grigora-text-shadow',
			'label' => __( 'Text shadow', 'grigora' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'grigora-text-shadow',
			'label' => __( 'Text shadow', 'grigora' ),
		)
	);
}
add_action( 'init', 'grigora_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function grigora_unregister_block_style() {
	wp_enqueue_script(
		'grigora-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		GRIGORA_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'grigora_unregister_block_style' );
