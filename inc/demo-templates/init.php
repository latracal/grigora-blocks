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
        echo '<div class="demo_modal">';
        echo '<div class="modal_header">';
        echo '<div class="modal_template_name">';
        echo 'Blog Pro';
        echo '</div>';
        echo '<div class="modal_screen_size">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
        <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
      </svg>
        ';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tablet" viewBox="0 0 16 16">
        <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg>
        ';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg>';
        echo '</div>';
        echo '<div class="modal_install_btn">';
        echo '<a href="#" class="btn-install">Install<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
      </svg></a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="modal-iframe-div">';
        echo '<iframe src="#" title="Title" class="modal-iframe"></iframe>';
        echo '</div>';
        echo '</div>';
    
        foreach ($json as $template => $template_meta) {
            echo '<div class="grigora-templates-single">';
            echo '<div class="grigora-screenshot">';
            echo '<img src="'.get_theme_file_uri('assets/images/demo-templates/'.$template_meta['screenshot']).'" alt="'.$template_meta['name'].'" width="300" height="300">';
            echo '</div>';
            echo '<div class="grigora-template-name">';
            echo $template_meta['name'];
            echo '</div>';
            echo '<div class="demo-overlay"
                data-name="'.$template_meta['name'].'" 
                data-slug="'.$template_meta['slug'].'" 
                data-demo_url="'.$template_meta['demo_url'].'" 
                data-description="'.$template_meta['description'].'" 
                >';
            echo '<button class="view-btn"  
            data-name="'.$template_meta['name'].'" 
            data-slug="'.$template_meta['slug'].'" 
            data-demo_url="'.$template_meta['demo_url'].'" 
            data-description="'.$template_meta['description'].'" 
            >View Demo</button>';
            echo '</div>';
            echo '</div>';            
        }
    
        echo '</div>';
    }
}