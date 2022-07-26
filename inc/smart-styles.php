<?php

if(!function_exists("grigora_blocks_render_inline_styles")){
    function grigora_blocks_render_inline_styles($style_id, $style){
        if ( ! is_admin() ) {
            if(wp_script_is($style_id)){
                wp_add_inline_style( $style_id, $style );
            }
            else{
                wp_register_style( $style_id, false );
                wp_enqueue_style( $style_id );
                wp_add_inline_style( $style_id, $style );
            }
        }
    }
}

add_filter('render_block', 'grigora_load_block_styles_css', 10, 2);

if(!function_exists("grigora_load_block_styles_css")){
    function grigora_load_block_styles_css( $block_content, $block ){
        if(is_admin()){
            return $block_content;
        }
        if( isset($block['blockName']) && isset($block['attrs']['className']) && !empty($block['attrs']['className']) ){
            // button
            if ($block['blockName'] == 'core/button') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-flat-button') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", ".is-style-grigora-flat-button .wp-block-button__link,.is-style-grigora-flat-button .wp-block-button__link:active,.is-style-grigora-flat-button .wp-block-button__link:focus,.is-style-grigora-flat-button .wp-block-button__link:hover,.is-style-grigora-flat-button .wp-block-button__link:visited{box-shadow:none;border-radius:0;margin-top:0;margin-bottom:0}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-shadow') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", ".is-style-grigora-button-shadow .wp-block-button__link,.is-style-grigora-button-shadow .wp-block-button__link:focus,.is-style-grigora-button-shadow .wp-block-button__link:hover,.is-style-grigora-button-shadow .wp-block-button__link:visited{box-shadow:var(--wp--custom--button-shadow)}.is-style-grigora-button-shadow .wp-block-button__link:active{box-shadow:var(--wp--custom--button-highlight)}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-flat-outline') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-flat-shadow') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-rounded') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-swipe-right') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-diagonal-swipe') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-effect-1') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-effect-4') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-effect-5') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // list
            else if ($block['blockName'] == 'core/list') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-no-marker-list') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-ordered-list-style-1') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-ordered-list-style-2') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-ordered-list-style-3') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-no-marker-no-underline-hovereffect') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // categories
            else if ($block['blockName'] == 'core/categories') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-no-marker-list') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // page list
            else if ($block['blockName'] == 'core/page-list') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-no-marker-list') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // columns
            else if ($block['blockName'] == 'core/columns') {
                if (str_contains($block['attrs']['className'], 'is-style-columns-no-gap') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // column
            else if ($block['blockName'] == 'core/column') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-border') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-border') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-border-rounded') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-rounded') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-border-rounded') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-hover-elevate') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-type-2') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // heading
            else if ($block['blockName'] == 'core/heading') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-1') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-2') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-3') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-4') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-5') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-no-text-decoration') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // post title
            else if ($block['blockName'] == 'core/post-title') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-1') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-2') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-3') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-4') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-5') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-no-text-decoration') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // separator
            else if ($block['blockName'] == 'core/separator') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-1') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-2') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-3') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-4') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-5') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-6') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-separator-align-left') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-separator-align-right') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // quote
            else if ($block['blockName'] == 'core/quote') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-marks') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-mark-2') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-mark-3') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-mark-4') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // post terms
            else if ($block['blockName'] == 'core/post-terms') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-tag-style') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-tag-style-2') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-tag-style-3') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // query pagination
            else if ($block['blockName'] == 'core/query-pagination') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-query-pagination-buttons') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // navigation
            else if ($block['blockName'] == 'core/navigation') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-navigation-style-1') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // post author
            else if ($block['blockName'] == 'core/post-author') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-post-author-style-1') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // navigation link
            else if ($block['blockName'] == 'core/navigation-link') {
                if (str_contains($block['attrs']['className'], 'is-style-custom-link-button') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // site title
            else if ($block['blockName'] == 'core/no-underline') {
                if (str_contains($block['attrs']['className'], 'is-style-no-underline') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // group
            else if ($block['blockName'] == 'core/group') {
                if (str_contains($block['attrs']['className'], 'is-style-hover-shadow') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-hover-elevate') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-type-2') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // cover
            else if ($block['blockName'] == 'core/cover') {
                if (str_contains($block['attrs']['className'], 'is-style-cover-image-zoom') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // image
            else if ($block['blockName'] == 'core/image') {
                if (str_contains($block['attrs']['className'], 'is-style-image-image-zoom') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-image-border') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            // search
            else if ($block['blockName'] == 'core/search') {
                if (str_contains($block['attrs']['className'], 'is-style-transparent-background') !== false) {
                    grigora_blocks_render_inline_styles("grigora-used-styles", "");
                }
            }
            return $block_content;
        }
        return $block_content;
    }
}
