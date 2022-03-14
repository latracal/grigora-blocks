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
	register_block_style(
		'core/query', [
		'name' => 'grigora-horizontalquery',
		'label' => __('Horizontal Query', 'grigora'),
	]);
}
add_action( 'init', 'grigora_register_block_styles' );



//Include conditional assets
add_filter('render_block', 'grigora_theme_conditional_assets', 10, 2);
function grigora_theme_conditional_assets($html, $block)
{
	$block_style = '';

	if(!is_admin()){//prevent loading conditional assets in admin
		//We use checking by class name until Wordpress will have proper inline style registration for block styles
		if (isset($block['blockName'])) {
			if (!empty($block['attrs']['className'])) {
				if ($block['blockName'] == 'core/query') {
					if (str_contains($block['attrs']['className'], 'is-style-grigora-horizontalquery') !== false) {
						$block_style .= '.is-style-grigora-horizontalquery {background-color:#000}';
					}
				}
			}
		}

		if ($block_style) {
			$html =  $html . '<style scoped>' . $block_style . '</style>';
		}
		
	}
	return $html;
}
