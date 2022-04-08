<?php

add_action( 'admin_post_grigora_template_import', 'grigora_template_import' );

/**
 * Import Template
 *
 * @since  1.009
 * 
 */

if(!function_exists("grigora_template_import")){
    function grigora_template_import() {
        if( isset( $_POST["_wpnonce"]) && $_POST["_wpnonce"] && $_POST["template"] ) {
            if ( ! wp_verify_nonce( $_POST["_wpnonce"], 'grigora_template_import' ) ) {
                wp_die( __( 'The link you followed has expired.', 'grigora-blocks-pro' ) ); 
            } else {
                $template = $_POST["template"];
                $json = file_get_contents( get_theme_file_path( 'inc/demo-templates/templates-meta/meta.json' ) );
                $json = json_decode($json, true);
                if(array_key_exists($template, $json)){
    
                }
                else{
                    wp_die( __( 'Incorrect template slug.', 'grigora-blocks-pro' ) ); 
                }
            }
            wp_redirect(admin_url('admin.php?page=grigora-templates'));
        }
        wp_redirect(admin_url('admin.php?page=grigora-templates'));
    }
}


