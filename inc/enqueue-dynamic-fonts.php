<?php

if(!function_exists("grigora_blocks_enqueue_gfonts")){
    function grigora_blocks_enqueue_gfonts() {

        $webfonts = get_option('grigora_blocks_typography');

        if($webfonts){
            $ver = GRIGORA_DEBUG ? time() : GRIGORA_VERSION;
            $font_request = 'https://fonts.googleapis.com/css?family=';
            $css = "";
            $fallback = "-apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,Oxygen-Sans,Ubuntu,Cantarell,\"Helvetica Neue\",sans-serif";
            foreach ($webfonts as $gfont) {
                if( isset($gfont["target"]) && isset($gfont["font"]) ){
                    $target = $gfont["target"];
                    $font = $gfont["font"];
                    $font_request = $font_request . $font . '|';
                    if($target == "body" ){
                        $css = $css . "body{font-family:$font,$fallback}";
                    }
                    else if($target == "h*" ){
                        $css = $css . "h1,h2,h3,h4,h5,h6{font-family:$font,$fallback}";
                    }
                    else if($target == "h1" ){
                        $css = $css . "h1{font-family:$font,$fallback}";
                    }
                    else if($target == "h2" ){
                        $css = $css . "h2{font-family:$font,$fallback}";
                    }
                    else if($target == "h3" ){
                        $css = $css . "h3{font-family:$font,$fallback}";
                    }
                    else if($target == "h4" ){
                        $css = $css . "h4{font-family:$font,$fallback}";
                    }
                    else if($target == "h5" ){
                        $css = $css . "h5{font-family:$font,$fallback}";
                    }
                    else if($target == "h6" ){
                        $css = $css . "h6{font-family:$font,$fallback}";
                    }
                    else if($target == "site-title" ){
                        $css = $css . ".wp-block-site-title{font-family:$font,$fallback}";
                    }
                    else if($target == "header" ){
                        $css = $css . "header{font-family:$font,$fallback}";
                    }
                    else if($target == "header-nav" ){
                        $css = $css . "header nav{font-family:$font,$fallback}";
                    }
                    else if($target == "button" ){
                        $css = $css . "button:not(.menu-toggle), html input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"], .button, .wp-block-button .wp-block-button__link{font-family:$font,$fallback}";
                    }
                    else if($target == "footer" ){
                        $css = $css . "footer{font-family:$font,$fallback}";
                    }
                }
            }
            $font_request = $font_request.'&display=fallback';
            wp_enqueue_style(
                'grigora-blocks-webfonts',
                wptt_get_webfont_url( esc_url_raw( $font_request) ),
                array(),
                $ver
            );
            wp_add_inline_style( 'grigora-blocks-webfonts', $css );
        }
    }
}

add_action( 'wp_enqueue_scripts', 'grigora_blocks_enqueue_gfonts' );
