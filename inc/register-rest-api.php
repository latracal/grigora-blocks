<?php


add_action('rest_api_init', 'grigora_blocks_register_route');

if(!function_exists("grigora_blocks_register_route")){
    function grigora_blocks_register_route(){
        register_rest_route(
            'grigora-blocks/v1',
            '/typography/',
            array(
                array(
                    'methods'             => 'GET',
                    'callback'            => 'grigora_blocks_get_typography',
                    'permission_callback' => function () {
                        return current_user_can( 'manage_options' );
                    },
                    'args'                => array(),
                ),
                array(
                    'methods'             => 'POST',
                    'callback'            => 'grigora_blocks_set_typography',
                    'permission_callback' => function () {
                        return current_user_can( 'manage_options' );
                    },
                    'args'                => array(),
                ),
            )
        );
    
    }
}

if(!function_exists("grigora_blocks_get_typography")){
    function grigora_blocks_get_typography( ){
        try {

            $settings = get_option('grigora_blocks_typography');
    
            return array(
                'success'  => true,
                'settings' => $settings,
            );
        } catch (Exception $e) {
            return array(
                'success' => false,
                'message' => $e->getMessage(),
            );
        }
    
    }
}

if(!function_exists("sort_webfonts_priority")){
    function sort_webfonts_priority( $webfonts ){
        $webfonts_sorted = array();
        $priority = array("body", "h*", "h1", "h2", "h3", "h4", "h5", "h6", "header", "header-nav", "footer","site-title", "button");
        foreach ($priority as $tag) {
            foreach ($webfonts as $webfont) {
                if( $webfont["target"] === $tag ){
                    array_push($webfonts_sorted, $webfont);
                }
            }
        }
        return $webfonts_sorted;
    }
}

if(!function_exists("grigora_blocks_set_typography")){
    function grigora_blocks_set_typography( $request ){
        try {
            $params = $request->get_params();
            $current = get_option('grigora_blocks_typography');

            if( isset($params["webfonts"]) && count($params["webfonts"]) > 0 ){
                $params["webfonts"] = sort_webfonts_priority( $params["webfonts"] );
                if ($current === false) {
                    add_option('grigora_blocks_typography', $params["webfonts"]);
                } else {
                    update_option('grigora_blocks_typography', $params["webfonts"]);
                }
            }
            else{
                delete_option('grigora_blocks_typography');
            }

            return json_encode(array(
                'success' => true,
                'message' => 'Typography updated!'
            ));
        } catch (Exception $e) {
            return json_encode(array(
                'success' => false,
                'message' => $e->getMessage(),
            ));
        }
    
    }
}