<?php


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
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-shadow') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-flat-outline') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-flat-shadow') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-rounded') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-swipe-right') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-diagonal-swipe') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-effect-1') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-effect-4') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-effect-5') !== false) {
                }
            }
            // list
            else if ($block['blockName'] == 'core/list') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-no-marker-list') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-ordered-list-style-1') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-ordered-list-style-2') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-ordered-list-style-3') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-no-marker-no-underline-hovereffect') !== false) {
                }
            }
            // categories
            else if ($block['blockName'] == 'core/categories') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-no-marker-list') !== false) {
                }
            }
            // page list
            else if ($block['blockName'] == 'core/page-list') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-no-marker-list') !== false) {
                }
            }
            // columns
            else if ($block['blockName'] == 'core/columns') {
                if (str_contains($block['attrs']['className'], 'is-style-columns-no-gap') !== false) {
                }
            }
            // column
            else if ($block['blockName'] == 'core/column') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-border') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-border') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-border-rounded') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-rounded') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-border-rounded') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-hover-elevate') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-type-2') !== false) {
                }
            }
            // heading
            else if ($block['blockName'] == 'core/heading') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-1') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-2') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-3') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-4') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-5') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-no-text-decoration') !== false) {
                }
            }
            // post title
            else if ($block['blockName'] == 'core/post-title') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-1') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-2') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-3') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-4') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-5') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-no-text-decoration') !== false) {
                }
            }
            // separator
            else if ($block['blockName'] == 'core/separator') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-1') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-2') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-3') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-4') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-5') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-6') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-separator-align-left') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-separator-align-right') !== false) {
                }
            }
            // quote
            else if ($block['blockName'] == 'core/quote') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-marks') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-mark-2') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-mark-3') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-mark-4') !== false) {
                }
            }
            // post terms
            else if ($block['blockName'] == 'core/post-terms') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-tag-style') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-tag-style-2') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-tag-style-3') !== false) {
                }
            }
            // query pagination
            else if ($block['blockName'] == 'core/query-pagination') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-query-pagination-buttons') !== false) {
                }
            }
            // navigation
            else if ($block['blockName'] == 'core/navigation') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-navigation-style-1') !== false) {
                }
            }
            // post author
            else if ($block['blockName'] == 'core/post-author') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-post-author-style-1') !== false) {
                }
            }
            // navigation link
            else if ($block['blockName'] == 'core/navigation-link') {
                if (str_contains($block['attrs']['className'], 'is-style-custom-link-button') !== false) {
                }
            }
            // site title
            else if ($block['blockName'] == 'core/no-underline') {
                if (str_contains($block['attrs']['className'], 'is-style-no-underline') !== false) {
                }
            }
            // group
            else if ($block['blockName'] == 'core/group') {
                if (str_contains($block['attrs']['className'], 'is-style-hover-shadow') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-hover-elevate') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-type-2') !== false) {
                }
            }
            // cover
            else if ($block['blockName'] == 'core/cover') {
                if (str_contains($block['attrs']['className'], 'is-style-cover-image-zoom') !== false) {
                }
            }
            // image
            else if ($block['blockName'] == 'core/image') {
                if (str_contains($block['attrs']['className'], 'is-style-image-image-zoom') !== false) {
                }
                else if (str_contains($block['attrs']['className'], 'is-style-image-border') !== false) {
                }
            }
            // search
            else if ($block['blockName'] == 'core/search') {
                if (str_contains($block['attrs']['className'], 'is-style-transparent-background') !== false) {
                }
            }
            return $block_content;
        }
        return $block_content;
    }
}
