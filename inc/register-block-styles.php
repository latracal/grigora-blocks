<?php
/**
 * Block styles.
 *
 * @package grigora-blocks
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

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-flat-button',
			'label' => __( 'Flat button', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-button-shadow',
			'label' => __( 'Button with shadow', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-flat-outline',
			'label' => __( 'Button with flat outline', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-flat-shadow',
			'label' => __( 'Button with flat shadow', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-button-rounded',
			'label' => __( 'Rounded Button', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-button-swipe-right',
			'label' => __( 'Button with swipe right hover', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-button-diagonal-swipe',
			'label' => __( 'Button with diagonal swipe', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-button-effect-1',
			'label' => __( 'Button with exapanding background color', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-button-effect-4',
			'label' => __( 'Button with effect background', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grigora-button-effect-5',
			'label' => __( 'Button with effect glitch', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'grigora-no-marker-list',
			'label' => __( 'No markers', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/categories',
		array(
			'name'  => 'grigora-no-marker-list',
			'label' => __( 'No markers', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/page-list',
		array(
			'name'  => 'grigora-no-marker-list',
			'label' => __( 'No markers', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'grigora-shadow',
			'label' => __( 'Column with shadow', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'grigora-border',
			'label' => __( 'Column with border', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'grigora-shadow-border',
			'label' => __( 'Column with shadow and border', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'grigora-border-rounded',
			'label' => __( 'Column with rounded border', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'grigora-shadow-rounded',
			'label' => __( 'Column with shadow border', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'grigora-shadow-border-rounded',
			'label' => __( 'Column with rounded shadow and border', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'grigora-heading-1',
			'label' => __( 'Red Center', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'grigora-heading-2',
			'label' => __( 'Red Left Align', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'grigora-heading-3',
			'label' => __( 'Bottom Line Darked', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'grigora-heading-4',
			'label' => __( 'Bottom Line', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'grigora-heading-5',
			'label' => __( 'Line Around', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'grigora-heading-1',
			'label' => __( 'Red Center', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'grigora-heading-2',
			'label' => __( 'Red Left Align', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'grigora-heading-3',
			'label' => __( 'Bottom Line Darked', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'grigora-heading-4',
			'label' => __( 'Bottom Line', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'grigora-heading-5',
			'label' => __( 'Line Around', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/separator',
		array(
			'name'  => 'grigora-separator-1',
			'label' => __( 'Separator Style 1', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/separator',
		array(
			'name'  => 'grigora-separator-2',
			'label' => __( 'Separator Style 2', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/separator',
		array(
			'name'  => 'grigora-separator-3',
			'label' => __( 'Separator Style 3', 'grigora-blocks' ),
		)
	);
	
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/separator',
		array(
			'name'  => 'grigora-separator-4',
			'label' => __( 'Separator Style 4', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/separator',
		array(
			'name'  => 'grigora-separator-5',
			'label' => __( 'Separator Style 5', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/separator',
		array(
			'name'  => 'grigora-separator-6',
			'label' => __( 'Separator Style 6', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/quote',
		array(
			'name'  => 'grigora-quote-quotation-marks',
			'label' => __( 'Quote Style 1', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/quote',
		array(
			'name'  => 'grigora-quote-quotation-mark-2',
			'label' => __( 'Quote Style 2', 'grigora-blocks' ),
		)
	);
	
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/quote',
		array(
			'name'  => 'grigora-quote-quotation-mark-3',
			'label' => __( 'Quote Style 3', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/quote',
		array(
			'name'  => 'grigora-quote-quotation-mark-4',
			'label' => __( 'Quote Style 4', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-terms',
		array(
			'name'  => 'grigora-tag-style',
			'label' => __( 'Tag Style 1', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-terms',
		array(
			'name'  => 'grigora-tag-style-2',
			'label' => __( 'Tag Style 2', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-terms',
		array(
			'name'  => 'grigora-tag-style-3',
			'label' => __( 'Tag Style 3', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/query-pagination',
		array(
			'name'  => 'grigora-query-pagination-buttons',
			'label' => __( 'Buttons', 'grigora-blocks' ),
		)
	);


	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'grigora-ordered-list-style-1',
			'label' => __( 'Ordered List Style 1', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'grigora-ordered-list-style-2',
			'label' => __( 'Ordered List Style 2', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'grigora-list-style-3',
			'label' => __( 'List Style 3', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'grigora-navigation-style-1',
			'label' => __( 'Navigation Style 1', 'grigora-blocks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-author',
		array(
			'name'  => 'grigora-post-author-style-1',
			'label' => __( 'Post Author Style 1', 'grigora-blocks' ),
		)
	);	

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grigora-shape-divider-1',
			'label' => __( 'Shape Divider 1', 'grigora-blocks' ),
		)
	);	

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grigora-shape-divider-2',
			'label' => __( 'Shape Divider 2', 'grigora-blocks' ),
		)
	);	

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grigora-shape-divider-3',
			'label' => __( 'Shape Divider 3', 'grigora-blocks' ),
		)
	);	

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grigora-shape-divider-4',
			'label' => __( 'Shape Divider 4', 'grigora-blocks' ),
		)
	);	

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grigora-shape-divider-5',
			'label' => __( 'Shape Divider 5', 'grigora-blocks' ),
		)
	);	

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grigora-shape-divider-6',
			'label' => __( 'Shape Divider 6', 'grigora-blocks' ),
		)
	);	

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grigora-shape-divider-7',
			'label' => __( 'Shape Divider 7', 'grigora-blocks' ),
		)
	);	

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grigora-shape-divider-8',
			'label' => __( 'Shape Divider 8', 'grigora-blocks' ),
		)
	);	
}

add_action( 'init', 'grigora_register_block_styles' );