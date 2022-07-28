<?php

if(!class_exists("Grigora_Used_Styles")){
    class Grigora_Used_Styles {
    
        public $styles = array();
    
        public function is_already_added( $style ){
            return in_array( $style, $this->styles );
        }
    
        public function add_style( $style ){
            array_push( $this->styles, $style );
        }
    
        public function render_inline_styles( $style_id, $style, $style_css ){
            if ( ! is_admin() && ! $this->is_already_added( $style ) ) {
                if(wp_script_is($style_id)){
                    $this->add_style($style);
                    wp_add_inline_style( $style_id, $style_css );
                }
                else{
                    $this->add_style($style);
                    wp_register_style( $style_id, false );
                    wp_enqueue_style( $style_id );
                    wp_add_inline_style( $style_id, $style_css );
                }
            }
        }
    
    }
}

$used_styles = new Grigora_Used_Styles;

add_filter('render_block', 'grigora_load_block_styles_css', 10, 2);

if(!function_exists("grigora_load_block_styles_css")){
    function grigora_load_block_styles_css( $block_content, $block ){
        global $used_styles;
        if(is_admin()){
            return $block_content;
        }
        if( isset($block['blockName']) && isset($block['attrs']['className']) && !empty($block['attrs']['className']) ){
            // button
            if ($block['blockName'] == 'core/button') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-flat-button') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-flat-button', ".is-style-grigora-flat-button .wp-block-button__link,.is-style-grigora-flat-button .wp-block-button__link:active,.is-style-grigora-flat-button .wp-block-button__link:focus,.is-style-grigora-flat-button .wp-block-button__link:hover,.is-style-grigora-flat-button .wp-block-button__link:visited{box-shadow:none;border-radius:0;margin-top:0;margin-bottom:0}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-shadow') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-button-shadow', ".is-style-grigora-button-shadow .wp-block-button__link,.is-style-grigora-button-shadow .wp-block-button__link:focus,.is-style-grigora-button-shadow .wp-block-button__link:hover,.is-style-grigora-button-shadow .wp-block-button__link:visited{box-shadow:var(--wp--custom--button-shadow)}.is-style-grigora-button-shadow .wp-block-button__link:active{box-shadow:var(--wp--custom--button-highlight)}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-flat-outline') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-flat-outline', ".is-style-grigora-flat-outline .wp-block-button__link,.is-style-grigora-flat-outline .wp-block-button__link:active,.is-style-grigora-flat-outline .wp-block-button__link:focus,.is-style-grigora-flat-outline .wp-block-button__link:hover,.is-style-grigora-flat-outline .wp-block-button__link:visited{color:var(--wp--preset--color--buttontext);background-color:var(--wp--preset--color--button);border:1px solid currentColor;border-radius:0}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-flat-shadow') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-flat-shadow', ".is-style-grigora-flat-shadow .wp-block-button__link,.is-style-grigora-flat-shadow .wp-block-button__link:active,.is-style-grigora-flat-shadow .wp-block-button__link:focus,.is-style-grigora-flat-shadow .wp-block-button__link:hover,.is-style-grigora-flat-shadow .wp-block-button__link:visited{color:var(--wp--preset--color--buttontext);background-color:var(--wp--preset--color--button);box-shadow:0 4px 4px 0 rgba(0,0,0,.2)}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-rounded') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-button-rounded', '.is-style-grigora-button-rounded .wp-block-button__link{border:none;border-radius:10rem;transition:all .3s;position:relative;overflow:hidden;z-index:1}.is-style-grigora-button-rounded .wp-block-button__link:after{content:"";position:absolute;bottom:0;left:0;width:100%;height:100%;border-radius:10rem;z-index:-2}.is-style-grigora-button-rounded .wp-block-button__link:before{content:"";position:absolute;bottom:0;left:0;width:0%;height:100%;background-color:rgba(0,0,0,.2);transition:all .3s;border-radius:10rem;z-index:-1}.is-style-grigora-button-rounded .wp-block-button__link:hover{color:#fff}.is-style-grigora-button-rounded .wp-block-button__link:hover:before{width:100%}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-swipe-right') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-button-swipe-right', '.is-style-grigora-button-swipe-right .wp-block-button__link{position:relative;color:currentColor;background-color:var(--wp--preset--color--button);border:1px solid currentColor;border-radius:0;z-index:2;transition:all .35s}.is-style-grigora-button-swipe-right .wp-block-button__link:after{position:absolute;content:"";top:0;left:0;width:0;height:100%;background:rgba(0,0,0,.2);transition:all .35s;z-index:-1}.is-style-grigora-button-swipe-right .wp-block-button__link:hover{color:#fff;border:1px solid #404040}.is-style-grigora-button-swipe-right .wp-block-button__link:hover:after{width:100%}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-diagonal-swipe') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-button-diagonal-swipe', '.is-style-grigora-button-diagonal-swipe .wp-block-button__link{position:relative;overflow:hidden;color:currentColor;background-color:rgba(0,0,0,0);border:1px solid currentColor;border-radius:0;transition:.5s ease-in-out;z-index:2}.is-style-grigora-button-diagonal-swipe .wp-block-button__link:before{content:"";position:absolute;top:0;right:-50px;bottom:0;left:0;border-right:50px solid rgba(0,0,0,0);border-bottom:80px solid var(--wp--preset--color--button);transform:translateX(-100%);transition:.5s ease-in-out;z-index:-1}.is-style-grigora-button-diagonal-swipe .wp-block-button__link:hover{color:var(--wp--preset--color--buttontext);border:1px solid #404040}.is-style-grigora-button-diagonal-swipe .wp-block-button__link:hover:before{transform:translateX(0)}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-effect-1') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-button-effect-1', '.is-style-grigora-button-effect-1 .wp-block-button__link{color:currentColor;position:relative;transition:all .3s;background-color:rgba(0,0,0,0);box-shadow:none;border-style:none;z-index:2}.is-style-grigora-button-effect-1 .wp-block-button__link:hover{color:var(--wp--preset--color--buttontext)}.is-style-grigora-button-effect-1 .wp-block-button__link:before,.is-style-grigora-button-effect-1 .wp-block-button__link:after{content:"";position:absolute;transition:all .3s;bottom:0;left:0;width:100%;height:100%;z-index:1}.is-style-grigora-button-effect-1 .wp-block-button__link:before{left:0;z-index:-1;opacity:0;background:var(--wp--preset--color--button);transform:scale(0.1, 1)}.is-style-grigora-button-effect-1 .wp-block-button__link:after{transition:all .3s;border:1px solid currentColor}.is-style-grigora-button-effect-1 .wp-block-button__link:hover::before{opacity:1;transform:scale(1, 1)}.is-style-grigora-button-effect-1 .wp-block-button__link:hover::after{transform:scale(1, 0.1);opacity:0}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-effect-4') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles",  'is-style-grigora-button-effect-4', ".is-style-grigora-button-effect-4 .wp-block-button__link{transition:.3s}.is-style-grigora-button-effect-4 .wp-block-button__link:hover{box-shadow:8px 8px rgba(0,0,0,.2);transition:.3s}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-button-effect-5') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-button-effect-5', '.is-style-grigora-button-effect-5 .wp-block-button__link,.is-style-grigora-button-effect-5 .wp-block-button__link::after{background-color:inherit;border:0;color:#fff;box-shadow:6px 0px 0px #00e6f6;outline:rgba(0,0,0,0);position:relative}.is-style-grigora-button-effect-5 .wp-block-button__link{background-color:#ff013c}.is-style-grigora-button-effect-5 .wp-block-button__link::after{content:"";display:block;position:absolute;top:0;left:0;right:0;bottom:0;text-shadow:-3px -3px 0px #f8f005,3px 3px 0px #00e6f6;clip-path:inset(50% 50% 50% 50%)}.is-style-grigora-button-effect-5 .wp-block-button__link:hover::after{animation:1s glitch;animation-timing-function:steps(2, end)}@keyframes glitch{0%{clip-path:inset(80% -6px 0 0);transform:translate(-20px, -10px)}10%{clip-path:inset(10% -6px 85% 0);transform:translate(10px, 10px)}20%{clip-path:inset(80% -6px 0 0);transform:translate(-10px, 10px)}30%{clip-path:inset(10% -6px 85% 0);transform:translate(0px, 5px)}40%{clip-path:inset(50% -6px 30% 0);transform:translate(-5px, 0px)}50%{clip-path:inset(10% -6px 85% 0);transform:translate(5px, 0px)}60%{clip-path:inset(40% -6px 43% 0);transform:translate(5px, 10px)}70%{clip-path:inset(50% -6px 30% 0);transform:translate(-10px, 10px)}80%{clip-path:inset(80% -6px 5% 0);transform:translate(20px, -10px)}90%{clip-path:inset(80% -6px 0 0);transform:translate(-10px, 0px)}100%{clip-path:inset(80% -6px 0 0);transform:translate(0)}}');
                }
            }
            // list
            else if ($block['blockName'] == 'core/list') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-no-marker-list') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-no-marker-list', "ul.is-style-grigora-no-marker-list,ol.is-style-grigora-no-marker-list{list-style:none;margin:0;padding:0}ul.is-style-grigora-no-marker-list li ul{margin-left:1em}.is-style-grigora-no-marker-list ul,.is-style-grigora-no-marker-list ol{list-style:none;margin:0;padding:0}.is-style-grigora-no-marker-list ul li ul{margin-left:1em}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-ordered-list-style-1') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-ordered-list-style-1', ".is-style-grigora-ordered-list-style-1{counter-reset:li;list-style:none;*list-style:decimal;padding:0;margin-bottom:4em;text-shadow:0 1px 0 rgba(255,255,255,.5)}.is-style-grigora-ordered-list-style-1 ol{list-style:none}.is-style-grigora-ordered-list-style-1 li{position:relative;display:block;padding:.4em .4em .4em 2em;*padding:.4em;margin:.5em 0;background:#ddd;color:currentColor;text-decoration:none;border-radius:.3em;transition:all .3s ease-out}.is-style-grigora-ordered-list-style-1 li:before{content:counter(li);counter-increment:li;position:absolute;color:var(--wp--preset--color--buttontext);left:-1.3em;top:50%;margin-top:-1.3em;background:var(--wp--preset--color--button);height:2em;width:2em;line-height:1.75em;border:.15em solid var(--wp--preset--color--buttontext);text-align:center;font-weight:bold;border-radius:2em;transition:all .3s ease-out}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-ordered-list-style-2') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-ordered-list-style-2', '.is-style-grigora-ordered-list-style-2{counter-reset:li;list-style:none;*list-style:decimal;padding:0;margin-bottom:4em;text-shadow:0 1px 0 rgba(255,255,255,.5)}.is-style-grigora-ordered-list-style-2 ol{list-style:none}.is-style-grigora-ordered-list-style-2 li{position:relative;display:block;padding:.4em .4em .4em .8em;*padding:.4em;margin:.5em 0 .5em 2.5em;background:#ddd;color:currentColor;text-decoration:none;transition:all .3s ease-out}.is-style-grigora-ordered-list-style-2 li:before{content:counter(li);counter-increment:li;position:absolute;left:-2.5em;top:50%;margin-top:-1em;color:var(--wp--preset--color--buttontext);background:var(--wp--preset--color--button);height:2em;width:2em;line-height:2em;text-align:center;font-weight:bold}.is-style-grigora-ordered-list-style-2 li:after{position:absolute;content:"";border:.5em solid rgba(0,0,0,0);left:-1em;top:50%;margin-top:-0.5em;transition:all .3s ease-out}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-ordered-list-style-3') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-ordered-list-style-3', '.is-style-grigora-list-style-3{list-style:none}.is-style-grigora-list-style-3 ol,.is-style-grigora-list-style-3 ul{list-style:none}.is-style-grigora-list-style-3 li::before{content:"";padding-left:1.5rem;margin:.75rem auto;background-image:url(\'data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M8,0A8,8,0,1,1,0,8,8,8,0,0,1,8,0Zm3.67,7.45L7.3,3.08a.77.77,0,0,0-1.09,0h0l-.55.55a.77.77,0,0,0,0,1.09h0L8.94,8,5.66,11.28a.77.77,0,0,0,0,1.09h0l.55.55a.77.77,0,0,0,1.09,0h0l4.37-4.37a.77.77,0,0,0,0-1.09h0Z" fill="LightSeaGreen" opacity="0.8"/></svg>\');background-repeat:no-repeat;background-size:1rem 1rem;background-position-x:left;background-position-y:center}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-no-marker-no-underline-hovereffect') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-no-marker-no-underline-hovereffect', ".is-style-no-marker-no-underline-hovereffect{list-style:none;margin:0 !important;padding:0}.is-style-no-marker-no-underline-hovereffect a{text-decoration:none}.is-style-no-marker-no-underline-hovereffect a:hover{color:var(--wp--preset--color--button)}.is-style-no-marker-no-underline-hovereffect li:hover{color:var(--wp--preset--color--button)}");
                }
            }
            // categories
            else if ($block['blockName'] == 'core/categories') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-no-marker-list') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-no-marker-list', "ul.is-style-grigora-no-marker-list,ol.is-style-grigora-no-marker-list{list-style:none;margin:0;padding:0}ul.is-style-grigora-no-marker-list li ul{margin-left:1em}.is-style-grigora-no-marker-list ul,.is-style-grigora-no-marker-list ol{list-style:none;margin:0;padding:0}.is-style-grigora-no-marker-list ul li ul{margin-left:1em}");
                }
            }
            // page list
            else if ($block['blockName'] == 'core/page-list') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-no-marker-list') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-no-marker-list', "ul.is-style-grigora-no-marker-list,ol.is-style-grigora-no-marker-list{list-style:none;margin:0;padding:0}ul.is-style-grigora-no-marker-list li ul{margin-left:1em}.is-style-grigora-no-marker-list ul,.is-style-grigora-no-marker-list ol{list-style:none;margin:0;padding:0}.is-style-grigora-no-marker-list ul li ul{margin-left:1em}");
                }
            }
            // columns
            else if ($block['blockName'] == 'core/columns') {
                if (str_contains($block['attrs']['className'], 'is-style-columns-no-gap') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-columns-no-gap', ".is-style-columns-no-gap{gap:0 !important}");
                }
            }
            // column
            else if ($block['blockName'] == 'core/column') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-shadow', ".is-style-grigora-shadow{box-shadow:0 4px 4px 0 rgba(0,0,0,.2)}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-border') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-border', ".is-style-grigora-border{border:1px solid gray}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-border') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-shadow-border', ".is-style-grigora-shadow-border{box-shadow:0 4px 4px 0 rgba(0,0,0,.2);border:1px solid gray}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-border-rounded') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-border-rounded', ".is-style-grigora-border-rounded{border:1px solid gray;border-radius:4px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-rounded') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-shadow-rounded', ".is-style-grigora-shadow-rounded{box-shadow:0 4px 4px 0 rgba(0,0,0,.2);border-radius:4px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-border-rounded') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-shadow-border-rounded', ".is-style-grigora-shadow-border-rounded{box-shadow:0 4px 4px 0 rgba(0,0,0,.2);border:1px solid currentColor;border-radius:4px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-hover-elevate') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-hover-elevate', ".is-style-hover-elevate{transition:.3s ease-in-out}.is-style-hover-elevate:hover{transform:translateY(-10px);box-shadow:rgba(0,0,0,.35) 0px 5px 15px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-type-2') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-shadow-type-2', ".is-style-grigora-shadow-type-2{box-shadow:rgba(100,100,111,.2) 0px 7px 29px 0px}");
                }
            }
            // heading
            else if ($block['blockName'] == 'core/heading') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-1') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-1', '.is-style-grigora-heading-1{position:relative;text-align:center;padding-bottom:5px}.is-style-grigora-heading-1:before{width:28px;height:5px;display:block;content:"";position:absolute;bottom:3px;left:50%;margin-left:-14px;background-color:#b80000}.is-style-grigora-heading-1:after{top:auto !important;bottom:auto !important;right:auto !important;width:100px;height:1px;display:block;content:"";position:relative;left:50% !important;margin-left:-50px;background-color:#b80000}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-2') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-2', '.is-style-grigora-heading-2{position:relative}.is-style-grigora-heading-2:before{position:absolute;bottom:0;width:60px;height:2px;content:"";background-color:#c50000}.is-style-grigora-heading-2.has-text-align-right::before{right:0}.is-style-grigora-heading-2.has-text-align-center::before{left:50%;transform:translateX(-50%)}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-3') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-3', '.is-style-grigora-heading-3{position:relative;padding-bottom:10px}.is-style-grigora-heading-3:before{content:"";position:absolute;left:0;bottom:0;height:5px;width:55px;background-color:currentColor}.is-style-grigora-heading-3:after{content:"";position:absolute;left:0;top:auto;bottom:2px;height:1px;width:95%;max-width:255px;background-color:currentColor}.is-style-grigora-heading-3.has-text-align-right::before{left:auto;right:0}.is-style-grigora-heading-3.has-text-align-right::after{left:auto;right:0}.is-style-grigora-heading-3.has-text-align-center::before{left:50%;transform:translateX(-50%)}.is-style-grigora-heading-3.has-text-align-center::after{left:50%;transform:translateX(-50%)}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-4') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-4', '.is-style-grigora-heading-4{position:relative}.is-style-grigora-heading-4:before{position:absolute;left:0;bottom:0;width:60px;height:1px;content:"";background-color:currentColor}.is-style-grigora-heading-4.has-text-align-right::before{left:auto;right:0}.is-style-grigora-heading-4.has-text-align-center::before{left:50%;transform:translateX(-50%)}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-5') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-5', '.is-style-grigora-heading-5{position:relative;text-align:center;display:grid;grid-template-columns:1fr auto 1fr;grid-gap:22px;align-items:center}.is-style-grigora-heading-5::after{position:static !important;bottom:auto !important;right:auto !important;left:auto !important}.is-style-grigora-heading-5:after,.is-style-grigora-heading-5:before{content:" ";display:block;border-bottom:2px solid #ccc;transform:translateY(-40%)}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-no-text-decoration') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-no-text-decoration', ".is-style-no-text-decoration *{text-decoration:none}");
                }
            }
            // post title
            else if ($block['blockName'] == 'core/post-title') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-1') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-1', '.is-style-grigora-heading-1{position:relative;text-align:center;padding-bottom:5px}.is-style-grigora-heading-1:before{width:28px;height:5px;display:block;content:"";position:absolute;bottom:3px;left:50%;margin-left:-14px;background-color:#b80000}.is-style-grigora-heading-1:after{top:auto !important;bottom:auto !important;right:auto !important;width:100px;height:1px;display:block;content:"";position:relative;left:50% !important;margin-left:-50px;background-color:#b80000}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-2') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-2', '.is-style-grigora-heading-2{position:relative}.is-style-grigora-heading-2:before{position:absolute;bottom:0;width:60px;height:2px;content:"";background-color:#c50000}.is-style-grigora-heading-2.has-text-align-right::before{right:0}.is-style-grigora-heading-2.has-text-align-center::before{left:50%;transform:translateX(-50%)}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-3') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-3', '.is-style-grigora-heading-3{position:relative;padding-bottom:10px}.is-style-grigora-heading-3:before{content:"";position:absolute;left:0;bottom:0;height:5px;width:55px;background-color:currentColor}.is-style-grigora-heading-3:after{content:"";position:absolute;left:0;top:auto;bottom:2px;height:1px;width:95%;max-width:255px;background-color:currentColor}.is-style-grigora-heading-3.has-text-align-right::before{left:auto;right:0}.is-style-grigora-heading-3.has-text-align-right::after{left:auto;right:0}.is-style-grigora-heading-3.has-text-align-center::before{left:50%;transform:translateX(-50%)}.is-style-grigora-heading-3.has-text-align-center::after{left:50%;transform:translateX(-50%)}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-4') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-4', '.is-style-grigora-heading-4{position:relative}.is-style-grigora-heading-4:before{position:absolute;left:0;bottom:0;width:60px;height:1px;content:"";background-color:currentColor}.is-style-grigora-heading-4.has-text-align-right::before{left:auto;right:0}.is-style-grigora-heading-4.has-text-align-center::before{left:50%;transform:translateX(-50%)}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-heading-5') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-heading-5', '.is-style-grigora-heading-5{position:relative;text-align:center;display:grid;grid-template-columns:1fr auto 1fr;grid-gap:22px;align-items:center}.is-style-grigora-heading-5::after{position:static !important;bottom:auto !important;right:auto !important;left:auto !important}.is-style-grigora-heading-5:after,.is-style-grigora-heading-5:before{content:" ";display:block;border-bottom:2px solid #ccc;transform:translateY(-40%)}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-no-text-decoration') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-no-text-decoration', ".is-style-no-text-decoration *{text-decoration:none}");
                }
            }
            // separator
            else if ($block['blockName'] == 'core/separator') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-1') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-separator-1', '.is-style-grigora-separator-1{margin:1.5em auto;position:relative;opacity:1;height:9px;width:9px !important;border:rgba(0,0,0,0);overflow:visible;background-image:url(\'data:image/svg+xml;utf8,<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><rect x="0.75" y="0.5" width="8" height="8" rx="4" fill="%231CB0A8" /></svg>\')}.is-style-grigora-separator-1:before{position:absolute;height:9px;width:10px;content:"";background-image:url(\'data:image/svg+xml;utf8,<svg width="10" height="9" viewBox="0 0 10 9" xmlns="http://www.w3.org/2000/svg"><path d="M3.91043 1.29752C4.30449 0.688518 5.19551 0.688519 5.58957 1.29752L9.25143 6.95675C9.68196 7.62211 9.20436 8.5 8.41186 8.5H1.08814C0.29564 8.5 -0.181954 7.62211 0.248574 6.95675L3.91043 1.29752Z" fill="%23FCB643" /></svg>\');left:-18px}.is-style-grigora-separator-1:after{top:auto;left:auto;bottom:auto;position:absolute;height:9px;width:9px;content:"";background-image:url(\'data:image/svg+xml;utf8,<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><rect x="0.75" y="0.5" width="8" height="8" rx="1" fill="%23EF4056" /></svg>\');right:-18px}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-2') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-separator-2', ".is-style-grigora-separator-2{height:30px;width:100% !important;opacity:1;background:-webkit-gradient(radial, 50% 0, 10, 50% 0, 40, from(#369a7e), color-stop(0.49, #369a7e), color-stop(0.51, #fff), to(white));-webkit-background-size:49px 100%;border-bottom:none}.is-style-grigora-separator-2.has-background{height:30px !important}.is-style-grigora-separator-2{margin-top:0px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-3') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-separator-3', ".is-style-grigora-separator-3{height:30px;width:100% !important;opacity:1;background:-webkit-gradient(radial, 50% 100%, 10, 50% 100%, 40, from(#369a7e), color-stop(0.49, #369a7e), color-stop(0.51, #fff), to(white));-webkit-background-size:49px 100%;border-bottom:none}.is-style-grigora-separator-3.has-background{height:30px !important}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-4') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-separator-4', ".is-style-grigora-separator-4{width:100% !important;height:100px;opacity:1;background:linear-gradient(to right bottom, #823a9c 49%, #fff 50%),linear-gradient(-50deg, #ffffff 16px, #000 0);border-bottom:none}.is-style-grigora-separator-4.has-background{height:100px !important}.is-style-grigora-separator-4{margin-top:0px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-5') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-separator-5', ".is-style-grigora-separator-5{width:100% !important;height:100px;opacity:1;background:linear-gradient(to right bottom, #fff 49%, #823a9c 50%);border-bottom:none}.is-style-grigora-separator-5.has-background{height:100px !important}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-separator-6') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-separator-6', '.is-style-grigora-separator-6{opacity:1;width:100% !important;height:1px;display:block;position:relative;margin-bottom:0em;border-bottom:none;padding:2em 0}.is-style-grigora-separator-6:after,.is-style-grigora-separator-6:before{content:"";position:absolute;width:100%;height:1px;bottom:50%;left:0}.is-style-grigora-separator-6:before{background:linear-gradient(90deg, #10111f 0%, #10111f 50%, transparent 50%, transparent 100%);background-size:15px;background-position:center;z-index:1}.is-style-grigora-separator-6:after{transition:opacity .3s ease,animation .3s ease;background:linear-gradient(to right, #62efab 5%, #f2ea7d 15%, #f2ea7d 25%, #ff8797 35%, #ff8797 45%, #e1a4f4 55%, #e1a4f4 65%, #82fff4 75%, #82fff4 85%, #62efab 95%);background-size:200%;background-position:0%;animation:bar 15s linear infinite}@keyframes bar{0%{background-position:0%}100%{background-position:200%}}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-separator-align-left') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-separator-align-left', ".is-style-separator-align-left{margin-left:0px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-separator-align-right') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-separator-align-right', ".is-style-separator-align-right{margin-right:0px}");
                }
            }
            // quote
            else if ($block['blockName'] == 'core/quote') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-marks') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-quote-quotation-marks', '.wp-block-quote.is-style-grigora-quote-quotation-marks{position:relative;text-align:center;padding:1rem 1.2rem;width:80%;color:#484748;margin:1rem auto 2rem}.wp-block-quote.is-style-grigora-quote-quotation-marks{background:linear-gradient(to right, #039be5 4px, transparent 4px) 0 100%,linear-gradient(to left, #039be5 4px, transparent 4px) 100% 0,linear-gradient(to bottom, #039be5 4px, transparent 4px) 100% 0,linear-gradient(to top, #039be5 4px, transparent 4px) 0 100%;background-repeat:no-repeat;background-size:20px 20px}.wp-block-quote.is-style-grigora-quote-quotation-marks:before,.wp-block-quote.is-style-grigora-quote-quotation-marks:after{font-family:FontAwesome;position:absolute;color:#039be5;font-size:4rem}.wp-block-quote.is-style-grigora-quote-quotation-marks:before{content:"“";top:-12px;margin-right:-20px;right:100%}.wp-block-quote.is-style-grigora-quote-quotation-marks:after{content:"”";margin-left:-20px;left:100%;top:auto;font-weight:700}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-mark-2') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-quote-quotation-mark-2', '.wp-block-quote.is-style-grigora-quote-quotation-mark-2{position:relative;padding:1rem 1.2rem;width:80%;color:#484748;margin:1rem auto 2rem}.wp-block-quote.is-style-grigora-quote-quotation-mark-2 p{display:inline;margin-left:0}.wp-block-quote.is-style-grigora-quote-quotation-mark-2 cite{color:#bdbec0;margin-left:1rem}.wp-block-quote.is-style-grigora-quote-quotation-mark-2 cite::before{content:"―";margin-right:1rem}.wp-block-quote.is-style-grigora-quote-quotation-mark-2:after{font-family:FontAwesome;position:absolute;color:#039be5;font-size:4rem}.wp-block-quote.is-style-grigora-quote-quotation-mark-2:before{content:none}.wp-block-quote.is-style-grigora-quote-quotation-mark-2:after{content:"”";color:#bdbec0;height:100%;margin-left:-30px;left:100%;bottom:60px;font-size:10rem;font-weight:700;font-family:"Verdana",serif}@media(max-width: 768px){.wp-block-quote.is-style-grigora-quote-quotation-mark-2:after{margin-left:-65px;bottom:0;font-size:8rem}}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-mark-3') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-quote-quotation-mark-3', '.wp-block-quote.is-style-grigora-quote-quotation-mark-3{position:relative;padding:1rem 1.2rem;width:80%;color:#484748;margin:1rem auto 2rem;border-left:5px solid #039be5}.wp-block-quote.is-style-grigora-quote-quotation-mark-3 p{position:relative;display:inline;margin-left:2rem}.wp-block-quote.is-style-grigora-quote-quotation-mark-3 cite{position:relative;margin-left:1rem}.wp-block-quote.is-style-grigora-quote-quotation-mark-3 cite::before{content:"―" " "}.wp-block-quote.is-style-grigora-quote-quotation-mark-3:before,.wp-block-quote.is-style-grigora-quote-quotation-mark-3:after{content:none}.wp-block-quote.is-style-grigora-quote-quotation-mark-3 p:before,.wp-block-quote.is-style-grigora-quote-quotation-mark-3 cite:after{font-family:FontAwesome;position:absolute;color:#039be5;font-size:3rem}.wp-block-quote.is-style-grigora-quote-quotation-mark-3 p:before{content:"”";top:-20px;right:100%}.wp-block-quote.is-style-grigora-quote-quotation-mark-3 cite:after{content:"“";margin-left:5px;top:10px}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-quote-quotation-mark-4') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-quote-quotation-mark-4', '.wp-block-quote.is-style-grigora-quote-quotation-mark-4{position:relative;padding:1rem 1.2rem;width:80%;color:#484748;margin:1rem auto 2rem}.wp-block-quote.is-style-grigora-quote-quotation-mark-4 p{font-family:"Abril Fatface",cursive;position:relative;font-size:2.8rem;font-weight:normal;line-height:1;margin:0;border:2px solid #fff;border:solid 2px;border-radius:20px;padding:25px}.wp-block-quote.is-style-grigora-quote-quotation-mark-4 p::after{content:"";position:absolute;border:2px solid;border-radius:0 50px 0 0;width:60px;height:60px;bottom:-62px;left:50px;border-bottom:none;border-left:none;z-index:3}.wp-block-quote.is-style-grigora-quote-quotation-mark-4 p::before{content:"";position:absolute;width:80px;border:6px solid #fff;bottom:-3px;left:50px;z-index:2}.wp-block-quote.is-style-grigora-quote-quotation-mark-4 cite{margin-left:9rem;font-size:1.3rem;font-weight:400}.wp-block-quote.is-style-grigora-quote-quotation-mark-4 cite::before{content:"―" " "}.wp-block-quote.is-style-grigora-quote-quotation-mark-4:before,.wp-block-quote.is-style-grigora-quote-quotation-mark-4:after{font-family:FontAwesome;position:absolute;color:#039be5;font-size:4rem}.wp-block-quote.is-style-grigora-quote-quotation-mark-4:before{content:none}.wp-block-quote.is-style-grigora-quote-quotation-mark-4:after{content:none}');
                }
            }
            // post terms
            else if ($block['blockName'] == 'core/post-terms') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-tag-style') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-tag-style', '.is-style-grigora-tag-style a{background:#eee;border-radius:3px 0 0 3px;display:inline-block;height:26px;line-height:26px;padding:0 20px 0 23px;position:relative;margin:0 10px 10px 0;text-decoration:none;-webkit-transition:color .2s}.is-style-grigora-tag-style a::before{background:#fff;border-radius:10px;box-shadow:inset 0 1px rgba(0,0,0,.25);content:"";height:6px;left:10px;position:absolute;width:6px;top:10px}.is-style-grigora-tag-style a:after{background:#fff;border-bottom:13px solid rgba(0,0,0,0);border-left:10px solid #eee;border-top:13px solid rgba(0,0,0,0);content:"";position:absolute;right:0;top:0}.is-style-grigora-tag-style a:hover{background-color:crimson;color:#fff}.is-style-grigora-tag-style a:hover::after{border-left-color:crimson}');
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-tag-style-2') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-tag-style-2', ".is-style-grigora-tag-style-2 a{text-decoration:none;background-color:#eee;padding:.5rem;border-radius:4px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-tag-style-3') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-tag-style-3', '.is-style-grigora-tag-style-3::before{display:inline-block;content:" ";background-image:url(\'data:image/svg+xml; utf8, <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16"><path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/><path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/></svg>\');height:1rem;width:1rem;margin-right:5px;padding-top:3px;transform:scaleX(-1);color:red}');
                }
            }
            // query pagination
            else if ($block['blockName'] == 'core/query-pagination') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-query-pagination-buttons') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-query-pagination-buttons', ".is-style-grigora-query-pagination-buttons .wp-block-query-pagination-next,.is-style-grigora-query-pagination-buttons .wp-block-query-pagination-previous{text-decoration:none;background-color:#eee;padding:.1rem .5rem;border-radius:4px}");
                }
            }
            // navigation
            else if ($block['blockName'] == 'core/navigation') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-navigation-style-1') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-navigation-style-1', ".is-style-grigora-navigation-style-1 .wp-block-navigation:not([style*=text-decoration]) a:focus{color:#fff}.is-style-grigora-navigation-style-1 .wp-block-navigation__container{justify-content:center}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li{padding:.5rem 1rem;transition:all .2s;border-radius:4px}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li a:hover{color:#fff}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li:hover{background-color:#ec4138}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li:hover a{color:#fff}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li:hover svg{stroke:#fff;transform:rotate(180deg)}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li .wp-block-navigation__submenu-container li{border-radius:0}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li .wp-block-navigation__submenu-container li a{color:currentColor}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li .wp-block-navigation__submenu-container li a:hover{color:#fff}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li .wp-block-navigation__submenu-container li:hover a{color:#fff}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li .wp-block-navigation__submenu-container li svg{transform:rotate(270deg)}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li .wp-block-navigation__submenu-container li .wp-block-navigation__submenu-container li{border-radius:0}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li .wp-block-navigation__submenu-container li .wp-block-navigation__submenu-container li a{color:currentColor}.is-style-grigora-navigation-style-1 .wp-block-navigation__container li .wp-block-navigation__submenu-container li .wp-block-navigation__submenu-container li a:hover{color:#fff}");
                }
            }
            // post author
            else if ($block['blockName'] == 'core/post-author') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-post-author-style-1') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-post-author-style-1', ".is-style-grigora-post-author-style-1 img{border-radius:50%}");
                }
            }
            // navigation link
            else if ($block['blockName'] == 'core/navigation-link') {
                if (str_contains($block['attrs']['className'], 'is-style-custom-link-button') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-custom-link-button', ".is-style-custom-link-button span{background-color:var(--wp--preset--color--button);color:var(--wp--preset--color--buttontext);padding:8px 20px 8px 20px !important;border-radius:100px;-webkit-box-shadow:var(--wp--custom--button-shadow);box-shadow:var(--wp--custom--button-shadow);transition:all .3s ease 0s}.is-style-custom-link-button span:hover{filter:brightness(94%) !important}");
                }
            }
            // site title
            else if ($block['blockName'] == 'core/no-underline') {
                if (str_contains($block['attrs']['className'], 'is-style-no-underline') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-no-underline', ".is-style-no-underline a{text-decoration:none}.is-style-no-underline a:hover{filter:brightness(94%) !important}");
                }
            }
            // group
            else if ($block['blockName'] == 'core/group') {
                if (str_contains($block['attrs']['className'], 'is-style-hover-shadow') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-hover-shadow', ".is-style-hover-shadow{transition:.3s ease-in-out}.is-style-hover-shadow:hover{box-shadow:rgba(100,100,111,.2) 0px 7px 29px 0px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-hover-elevate') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-hover-elevate', ".is-style-hover-elevate{transition:.3s ease-in-out}.is-style-hover-elevate:hover{transform:translateY(-10px);box-shadow:rgba(0,0,0,.35) 0px 5px 15px}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-grigora-shadow-type-2') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-shadow-type-2', ".is-style-grigora-shadow-type-2{box-shadow:rgba(100,100,111,.2) 0px 7px 29px 0px}");
                }
            }
            // cover
            else if ($block['blockName'] == 'core/cover') {
                if (str_contains($block['attrs']['className'], 'is-style-cover-image-zoom') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-cover-image-zoom', ".is-style-cover-image-zoom{overflow:hidden}.is-style-cover-image-zoom .wp-block-cover__image-background{transition:.3s all ease-in-out}.is-style-cover-image-zoom:hover .wp-block-cover__image-background{transform:scale(1.1)}");
                }
            }
            // image
            else if ($block['blockName'] == 'core/image') {
                if (str_contains($block['attrs']['className'], 'is-style-image-image-zoom') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-image-image-zoom', ".is-style-image-image-zoom{overflow:hidden}.is-style-image-image-zoom img{transition:.3s all ease-in-out}.is-style-image-image-zoom:hover img{transform:scale(1.1)}");
                }
                else if (str_contains($block['attrs']['className'], 'is-style-image-border') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-image-border', ".is-style-image-border{border-radius:100%;border:10px solid var(--wp--preset--color--background)}");
                }
            }
            // search
            else if ($block['blockName'] == 'core/search') {
                if (str_contains($block['attrs']['className'], 'is-style-transparent-background') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-transparent-background', ".is-style-transparent-background{background-color:var(--wp--custom--small-button-transparent)}.is-style-transparent-background input{color:inherit;background-color:inherit;border:1px solid currentColor}.is-style-transparent-background input::placeholder{color:inherit;opacity:.6}");
                }
            }
            // search
            else if ($block['blockName'] == 'core/latest-posts') {
                if (str_contains($block['attrs']['className'], 'is-style-grigora-lp-no-indentation') !== false) {
                    $used_styles->render_inline_styles("grigora-used-styles", 'is-style-grigora-lp-no-indentation', "ul.is-style-grigora-lp-no-indentation,ol.is-style-grigora-lp-no-indentation{list-style:none;margin:0;padding:0}ul.is-style-grigora-lp-no-indentation li ul{margin-left:1em}.is-style-grigora-lp-no-indentation ul,.is-style-grigora-lp-no-indentation ol{list-style:none;margin:0;padding:0}.is-style-grigora-lp-no-indentation ul li ul{margin-left:1em}");
                }
            }
            return $block_content;
        }
        return $block_content;
    }
}
