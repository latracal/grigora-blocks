<?php

/**
 * Get if template or template part post exists in database
 * Credits: https://wordpress.org/plugins/design-import-export/
*/
function grigora_template_post_exists( $post_name = '', $post_type = '', $theme_slug = '' ) {

	global $wpdb;

	if ( $post_name === '' ) {
		$todo = array( 'post_id' => 0, 'action' => 'nowt' );
	} else {
		if ( $post_type === 'wp_template' || $post_type === 'wp_template_part' ) {

			$post_id_update = 0;

			$template_posts = $wpdb->get_results( "SELECT ID FROM $wpdb->posts WHERE post_name = '" . $post_name . "' AND post_type = '" . $post_type . "'" );

			if ( $template_posts ) {
				foreach ( $template_posts as $template_post ) {
					$post_id = $template_post->ID;
					$terms = get_the_terms( $post_id, 'wp_theme' );
					if ( $terms && $terms[0]->slug === $theme_slug ) {
						$post_id_update = $post_id;
						break;
					}
				}
				if ( $post_id_update ) {
					$todo = array( 'post_id' => $post_id_update, 'action' => 'update' );
				} else {
					$todo = array( 'post_id' => 0, 'action' => 'insert' );
				}
			} else {
				$todo = array( 'post_id' => 0, 'action' => 'insert' );
			}

		} elseif ( $post_type === 'wp_global_styles' ) {

			$post_id = $wpdb->get_row( "SELECT ID FROM $wpdb->posts WHERE post_name = '" . $post_name . "' AND post_type = '" . $post_type . "'" );
			if ( $post_id ) {
				$todo = array( 'post_id' => $post_id->ID, 'action' => 'update' );
			} else {
				$todo = array( 'post_id' => 0, 'action' => 'insert' );
			}

		} else {
			$todo = array( 'post_id' => 0, 'action' => 'nowt' );
		}	
	}

	return $todo;

}

/**
 * Fix template and template part slugs (post_name).
 */
function grigora_templates_slug_fix( $post_id, $slug ) {
	global $wpdb;
	$wpdb->update( $wpdb->prefix . 'posts', array( 'post_name' => $slug ), array( 'ID' => $post_id ), '%s', '%d' );
}

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
                $toclear = array();
                if(strtolower($template) == "default"){
                    $args = array(
                        'numberposts' => -1,
                        'orderby' => 'post_type',
                        'post_status' => 'publish',
                        'post_type' => array( 'wp_template', 'wp_template_part' ),
                    );
                    $export_posts = get_posts( $args );
                    foreach($export_posts as $post){
                        $taxonomies = get_object_taxonomies( $post->post_type );
                        if ( empty( $taxonomies ) ) {
                            continue;
                        }
                        $terms = wp_get_object_terms( $post->ID, $taxonomies );
                        foreach ( (array) $terms as $term ) {
                            if($term->slug == GRIGORA_SLUG && !in_array($post->ID, $toclear)){
                                array_push($toclear, $post->ID);
                            }
                        }
                    }
                    foreach($toclear as $id){
                        wp_delete_post($id);
                    }
                }
                else{
                    $json = file_get_contents( get_theme_file_path( 'inc/demo-templates/templates-meta/meta.json' ) );
                    $json = json_decode($json, true);
                    if(array_key_exists($template, $json)){
    
                        $new_files = get_filesystem()->dirlist(get_theme_dir_full()."inc/demo-templates/templates/". $template. "/templates". "/" );
                        foreach($new_files as $index => $new_file){
                            $name = $new_file['name'];
                            $slug = str_replace(".html", "",$name);
                            $contents = get_filesystem()->get_contents( get_theme_dir_full()."inc/demo-templates/templates/". $template. "/templates". "/". $name);
                            
                            // construct terms for the post template
                            $terms = array();
                            $terms['wp_theme'] = GRIGORA_SLUG;
    
                            $post_exist = grigora_template_post_exists( $slug, 'wp_template', GRIGORA_SLUG );
                            if ( $post_exist['post_id'] && $post_exist['action'] === 'update' ) {
                                $update_post_args = array(
                                    'ID' => $post_exist['post_id'],
                                    'post_content' => $contents,
                                );
                                $update_post_id = wp_update_post( wp_slash( $update_post_args ), true );
                            } elseif ( $post_exist['action'] === 'insert' ) {
                                $insert_post_args = array(
                                    'post_title'		=> GRIGORA_KNOWN_TEMPLATES['templates'][$slug]['name'],
                                    'post_content'		=> $contents,
                                    'comment_status'	=> 'closed',
                                    'ping_status'		=> 'closed',
                                    'post_name'			=> $slug,
                                    'post_status'		=> 'publish',
                                    'post_type'			=> 'wp_template',
                                    'tax_input'			=> $terms,
                                );
                                $new_post_id = wp_insert_post( wp_slash( $insert_post_args ), true );
                                if ( $new_post_id ) {
                                    grigora_templates_slug_fix( $new_post_id, $slug );
                                }
                            }
    
    
                        $new_files = get_filesystem()->dirlist(get_theme_dir_full()."inc/demo-templates/templates/". $template. "/parts". "/" );
                        foreach($new_files as $index => $new_file){
                            $name = $new_file['name'];
                            $slug = str_replace(".html", "",$name);
                            $contents = get_filesystem()->get_contents( get_theme_dir_full()."inc/demo-templates/templates/". $template. "/parts". "/". $name);
                            
                            // construct terms for the post template parts
                            $terms = array();
                            $terms['wp_theme'] = GRIGORA_SLUG;
                            $terms['wp_template_part_area'] = GRIGORA_KNOWN_TEMPLATES['parts'][$slug]['area'];
    
                            $post_exist = grigora_template_post_exists( $slug, 'wp_template_part', GRIGORA_SLUG );
                            if ( $post_exist['post_id'] && $post_exist['action'] === 'update' ) {
                                $update_post_args = array(
                                    'ID' => $post_exist['post_id'],
                                    'post_content' => $contents,
                                );
                                $update_post_id = wp_update_post( wp_slash( $update_post_args ), true );
                            } elseif ( $post_exist['action'] === 'insert' ) {
                                $insert_post_args = array(
                                    'post_title'		=> GRIGORA_KNOWN_TEMPLATES['parts'][$slug]['title'],
                                    'post_content'		=> $contents,
                                    'comment_status'	=> 'closed',
                                    'ping_status'		=> 'closed',
                                    'post_name'			=> $slug,
                                    'post_status'		=> 'publish',
                                    'post_type'			=> 'wp_template_part',
                                    'tax_input'			=> $terms,
                                );
                                
                                $new_post_id = wp_insert_post( wp_slash( $insert_post_args ), true );
                                if ( $new_post_id ) {
                                    grigora_templates_slug_fix( $new_post_id, $slug );
                                }
                            }
                        }
                    }
                    wp_redirect(admin_url('admin.php?page=grigora-templates'));
                    }
                    else{
                        wp_die( __( 'Incorrect template slug.', 'grigora-blocks' ) ); 
                    }
                }
            }
            wp_redirect(admin_url('admin.php?page=grigora-templates'));
        }
        wp_redirect(admin_url('admin.php?page=grigora-templates'));
    }
}
