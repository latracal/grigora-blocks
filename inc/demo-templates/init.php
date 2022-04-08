<?php

require_once get_theme_file_path( 'inc/demo-templates/import.php' );

if ( ! function_exists( 'gbp_options_menu' ) ) { 
    function gbp_options_menu() {
        add_theme_page( 'grigora-templates', __('Grigora Demo Templates', 'grigora-blocks-pro'), 'manage_options', 'grigora-templates', 'grigora_templates_page' );
    }
}

if(!function_exists("grigora_templates_page")){
    function grigora_templates_page() {

        if ( !current_user_can( 'manage_options' ) ) {
            wp_die( __( 'You do not have sufficient permissions to access this page.' , 'grigora-blocks-pro') );
        }
        echo '<div class="admin-container">';
        settings_errors();
        ?>

<div class="grigora-settings">
    <div class="tab-content">
        <?php
                    render_templates_html("grigora-templates");
                ?>
    </div>
</div>
<?php
    }
}

if(function_exists("gbp_options_menu")){
    add_action( 'admin_menu', 'gbp_options_menu' );
}

if(!function_exists("render_templates_html")){
    function render_templates_html() {

        $json = file_get_contents( get_theme_file_path( 'inc/demo-templates/templates-meta/meta.json' ));
        $json = json_decode($json, true);
        echo '<h1>'.esc_html( __( "Import Demo Templates", "grigora-blocks-pro" )).'</h1>';
        echo '<div class="template-search">';
        echo '<input type="search" name="search" placeholder="Search...">';
        echo '<select>';
        echo '<option value="All">All</option>';
        echo '</select>';
        echo '</div>';
        echo '<div class="grigora-templates">';
    
        foreach ($json as $template => $template_meta) {
            echo '<div class="grigora-templates-single">';
            echo '<div class="grigora-screenshot">';
            echo '<img src="'.get_theme_file_uri('assets/images/demo-templates/'.$template_meta['screenshot']).'" alt="'.$template_meta['name'].'" width="300" height="300">';
            echo '</div>';
            echo '<div class="grigora-template-name">';
            echo $template_meta['name'];
            echo '</div>';
            echo '<div class="demo-overlay">';
            echo '<a href="#">View Demo</a>';
            echo '</div>';
            echo '</div>';
        }
    
        echo '</div>';
    }
}