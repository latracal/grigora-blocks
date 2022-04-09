<?php

if(is_admin()){
    $ver = GRIGORA_DEBUG ? time() : GRIGORA_VERSION;
    wp_enqueue_style( 'grigora-admin-css', get_template_directory_uri() . '/dist/css/admin-options.min.css', null, $ver );
    wp_register_script('grigora-admin-js', get_theme_file_uri('js/admin.js'), [], $ver, true);
	wp_enqueue_script('grigora-admin-js');
}

require_once get_theme_file_path( 'inc/demo-templates/init.php' );
