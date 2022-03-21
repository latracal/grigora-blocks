<?php
/**
 * Hero-10 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-10', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"overlayColor":"primary","isDark":false,"style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><span aria-hidden="true" class="has-primary-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"width":"35%"} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:heading {"textColor":"background","fontSize":"xx-large"} -->
<h2 class="has-background-color has-text-color has-xx-large-font-size">Save yourself. Save each other.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color">Mauris pellentesque gravida amet dui tempor, diam nam sed eget semper ultrices tristique nibh id nec quam vestibulum consectetur ut lacus neque, scelerisque cras.<a href="https://websitedemos.net/covid-prevention-02/#"></a></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-grigora-flat-outline"} -->
<div class="wp-block-button is-style-grigora-flat-outline"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"textColor":"background"} -->
<h4 class="has-background-color has-text-color">+1 123 456 78 90</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
	',	
);