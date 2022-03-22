<?php
/**
 * Hero-4 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-4', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"overlayColor":"primary","isDark":false,"style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><span aria-hidden="true" class="has-primary-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","className":"hero-block-2"} -->
<div class="wp-block-columns are-vertically-aligned-center hero-block-2"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:heading {"textAlign":"center","textColor":"background"} -->
<h2 class="has-text-align-center has-background-color has-text-color">Heading / Title</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"background"} -->
<p class="has-text-align-center has-background-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin eros tempor ex varius placerat. Ut volutpat tortor a pretium interdum..<a href="https://templates.unbounce.com/flora/#"></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"color":{"background":"#a87bdb"}},"className":"is-style-grigora-flat-button"} -->
<div class="wp-block-button aligncenter is-style-grigora-flat-button"><a class="wp-block-button__link has-background" style="background-color:#a87bdb">Button</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem"}},"textColor":"background"} -->
<p class="has-text-align-center has-background-color has-text-color" style="font-size:0.8rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
	',	
);