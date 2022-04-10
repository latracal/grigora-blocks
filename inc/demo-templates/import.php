<?php

/**
 * Get Filesystem
*/

if(!function_exists("get_filesystem")){
    function get_filesystem() {
        global $wp_filesystem;
    
        // If the filesystem has not been instantiated yet, do it here.
        if ( ! $wp_filesystem ) {
            if ( ! function_exists( 'WP_Filesystem' ) ) {
                require_once wp_normalize_path( ABSPATH . '/wp-admin/includes/file.php' );
            }
            WP_Filesystem();
        }
        return $wp_filesystem;
    }
}

/**
 * Get Base Path
*/
if(!function_exists("get_base_path")){
    function get_base_path(){
        return get_filesystem()->wp_content_dir();
    }
}

/**
 * Get Base Path
*/
if(!function_exists("get_theme_dir_full")){
    function get_theme_dir_full(){
        return get_base_path()."themes/grigora-blocks/";
    }
}

if(!function_exists("write_file_to_contents")){
    function write_file_to_contents($filename, $contents, $template){
        if ( ! defined( 'FS_CHMOD_DIR' ) ) {
            define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
        }
        if($template){
            $html_folder = get_theme_dir_full() . "templates/";
        }
        else{
            $html_folder = get_theme_dir_full() . "parts/";
        }
        if ( ! file_exists( $html_folder ) ) {
            if(!get_filesystem()->mkdir( $html_folder, FS_CHMOD_DIR )){
                return false;
            }
        }
        // print_r($contents);
        if(!get_filesystem()->put_contents( $html_folder.$filename, $contents) ) {
            return false;
        }
        return true;
    }
}


add_action( 'admin_post_grigora_template_import', 'grigora_template_import' );

/**
 * Import Template
 *
 * @since  1.009
 * 
 */

if(!function_exists("grigora_template_import")){
    function grigora_template_import() {
        if( isset( $_POST["_grigora_template_import"]) && isset($_POST["_grigora_template_import"]) && isset($_POST["template"]) ) {
            if ( ! wp_verify_nonce( $_POST["_grigora_template_import"], 'grigora_template_import' ) ) {
                wp_die( __( 'The link you followed has expired.', 'grigora-blocks' ) ); 
            } else {
                $template = $_POST["template"];
                $json = file_get_contents( get_theme_file_path( 'inc/demo-templates/templates-meta/meta.json' ) );
                $json = json_decode($json, true);
                if(array_key_exists($template, $json)){
                    $existing_files = get_filesystem()->dirlist(get_theme_dir_full()."templates/");
                    $new_files = get_filesystem()->dirlist(get_theme_dir_full()."inc/demo-templates/templates/". $template. "/templates". "/" );
                    foreach($existing_files as $existing_file){
                        if(!in_array($existing_file, $new_files)){
                            get_filesystem()->delete( get_theme_dir_full() . "templates/" . $existing_file["name"]);
                        }
                    }
                    foreach($new_files as $index => $new_file){
                        $contents = get_filesystem()->get_contents( get_theme_dir_full()."inc/demo-templates/templates/". $template. "/templates". "/". $new_file["name"]);
                        write_file_to_contents($new_file["name"], $contents, 1);
                    }
                    $existing_files = get_filesystem()->dirlist(get_theme_dir_full()."parts/");
                    $new_files = get_filesystem()->dirlist(get_theme_dir_full()."inc/demo-templates/templates/". $template. "/parts". "/" );
                    foreach($existing_files as $existing_file){
                        if(!in_array($existing_file, $new_files)){
                            get_filesystem()->delete( get_theme_dir_full() . "parts/" . $existing_file["name"]);
                        }
                    }
                    foreach($new_files as $index => $new_file){
                        $contents = get_filesystem()->get_contents( get_theme_dir_full()."inc/demo-templates/templates/". $template. "/parts". "/". $new_file["name"]);
                        write_file_to_contents($new_file["name"], $contents, 0);
                    }
                    wp_redirect(admin_url('admin.php?page=grigora-templates'));
                }   
                else{
                    wp_die( __( 'Incorrect template slug.', 'grigora-blocks' ) ); 
                }
            }
            wp_redirect(admin_url('admin.php?page=grigora-templates'));
        }
        wp_redirect(admin_url('admin.php?page=grigora-templates'));
        // wp_die( __( 'Missing form fields.', 'grigora-blocks' ) ); 
    }
}
