<?php
/**
 * Hero-8 header block pattern
 *
 * @package grigora-blocks
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero-8', 'grigora-blocks' ),
	'categories' => array( 'text' ),
	'inserter'   => true,
	'content'    => '
	<!-- wp:cover {"url":"http://127.0.0.1/grigora/wp-content/uploads/2022/03/502529199.mp4","id":2535,"dimRatio":50,"overlayColor":"foreground","backgroundType":"video","isDark":false,"align":"full","className":"grigora-hero","style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}}} -->
<div class="wp-block-cover alignfull is-light grigora-hero" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><span aria-hidden="true" class="has-foreground-background-color wp-block-cover__gradient-background has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="http://127.0.0.1/grigora/wp-content/uploads/2022/03/502529199.mp4" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"extra-small"} -->
<h2 class="has-text-align-center has-background-color has-text-color has-extra-small-font-size">we all love</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"xx-large"} -->
<h2 class="has-text-align-center has-background-color has-text-color has-xx-large-font-size">nature</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"background"} -->
<p class="has-text-align-center has-background-color has-text-color">Look deep into nature, and you will<br>understand everything better.<a href="https://websitedemos.net/love-nature-02/#"></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"foreground","style":{"border":{"radius":"5px"}},"className":"is-style-grigora-flat-button"} -->
<div class="wp-block-button is-style-grigora-flat-button"><a class="wp-block-button__link has-foreground-color has-luminous-vivid-amber-background-color has-text-color has-background" style="border-radius:5px">Button</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
	',	
);