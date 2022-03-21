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
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"8%","left":"8%"}},"color":{"background":"#fefafa"}}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fefafa;padding-right:8%;padding-left:8%"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:columns {"verticalAlignment":null} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.34%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.34%"><!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","textColor":"foreground","fontSize":"x-large"} -->
<h2 class="has-text-align-left has-foreground-color has-text-color has-x-large-font-size">I\'m Web Developer</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","textColor":"foreground","fontSize":"x-large"} -->
<h2 class="has-text-align-left has-foreground-color has-text-color has-x-large-font-size">Natalie E. Watson</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color">In faucibus ex eget neque dapibus imperdiet. Nulla pretium vel augue a pulvinar.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"foreground","className":"is-style-grigora-flat-button"} -->
<div class="wp-block-button is-style-grigora-flat-button"><a class="wp-block-button__link has-foreground-color has-white-background-color has-text-color has-background">Button</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="https://websitedemos.net/personal-portfolio-02/wp-content/uploads/sites/770/2022/02/h1_hero-bg.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
	',	
);