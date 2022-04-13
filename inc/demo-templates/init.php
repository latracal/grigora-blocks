<?php

require_once get_theme_file_path( 'inc/demo-templates/import.php' );

if ( ! function_exists( 'gbp_options_menu' ) ) { 
    function gbp_options_menu() {
        add_theme_page( 'grigora-templates', __('Grigora Demo Templates', 'grigora-blocks'), 'manage_options', 'grigora-templates', 'grigora_templates_page' );
    }
}

if(!function_exists("grigora_templates_page")){
    function grigora_templates_page() {

        if ( !current_user_can( 'manage_options' ) ) {
            wp_die( __( 'You do not have sufficient permissions to access this page.' , 'grigora-blocks') );
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
        $unique_categories = array();
        foreach ($json as $template => $template_meta) {
            foreach($template_meta['category'] as $category){
                if(!in_array($category, $unique_categories)){
                    array_push($unique_categories, $category);
                }
            }
        }
        echo '<h1>'.esc_html( __( "Import Demo Templates", "grigora-blocks" )).'</h1>';
        echo '<div class="template-search">';
        echo '<input type="search" name="search" id="grigora-templates-input" placeholder="Search...">';
        echo '<select id="grigora-templates-select">';
        echo '<option value="All">All</option>';
        foreach ($unique_categories as $category) {
            echo '<option value="'.$category.'">'.$category.'</option>';
        }
        echo '</select>';
        echo '</div>';
        echo '<div class="grigora-templates">';
        echo '<div class="demo_modal">';
        echo '<div class="modal_header">';
        echo '<div class="modal_template_name">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg close" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
        </svg>';
        echo 'Blog Pro';
        echo '</div>';
        echo '<div class="modal_screen_size">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-display active" viewBox="0 0 16 16">
        <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
      </svg>
        ';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tablet-landscape" viewBox="0 0 16 16">
        <path d="M1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4zm-1 8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8z"/>
        <path d="M14 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
      </svg>
        ';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg>';
        echo '</div>';
        echo '<form action="' . home_url("/wp-admin/admin-post.php") . '" method="post">';
        echo '<input type="hidden" name="action" value="grigora_template_import">';
        echo '<input type="hidden" name="template" class="form-template" value="blog_pro">';
        wp_nonce_field( 'grigora_template_import', '_grigora_template_import' );
        echo '<div class="modal_install_btn">';
        echo '<p class="btn-install">Install<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></p>';
        echo '</div>';
        echo '<div class="confirm-modal">';
        echo '<div class="confirm-modal-content">';
        echo '<div class="background">';      
        echo '<p>Please go through the following points before installing a demo - </p>';
        echo '<p>New Demo install will remove all your current template related changes in your website.</p>';
        echo '<p>It will reset all the global styles for your website.</p>';
        echo '<p>Are you sure?</p>';
        echo '<div class="confirm-btn">';
        echo '<p class="close-btn">Cancel</p>';
        echo '<button type="submit" value="Submit" class="c-btn">Yes</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';   
        echo '</form>';
        echo '</div>';
        echo '<div class="modal-iframe-div">';
        echo '<iframe src="" title="Title" class="modal-iframe"></iframe>';
        echo '</div>';
        echo '</div>';     
          
    
        foreach ($json as $template => $template_meta) {
            echo '<div class="grigora-templates-single"
            data-name="'.$template_meta['name'].'" 
            data-category=\''.json_encode($template_meta['category']).'\' 
            >';
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