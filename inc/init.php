<?php

wp_enqueue_style( 'grigora-theme-templates', get_template_directory_uri() . '/dist/css/admin-options.min.css', null, GRIGORA_VERSION );

require_once get_theme_file_path( 'inc/demo-templates/init.php' );
