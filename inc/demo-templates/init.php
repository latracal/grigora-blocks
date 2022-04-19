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
        echo '<form action="' . home_url("/wp-admin/admin-post.php") . '" method="post" id="demo-import-form">';
        echo '<input type="hidden" name="action" value="grigora_template_import">';
        echo '<input type="hidden" name="template" class="form-template" value="default">';
        wp_nonce_field( 'grigora_template_import', '_grigora_template_import' );
        echo '</form>';
        echo '<input type="search" name="search" id="grigora-templates-input" placeholder="'.esc_html( __( "Search...", "grigora-blocks" )).'">';
        echo '<select id="grigora-templates-select">';
        echo '<option value="All">'.esc_html( __( "All", "grigora-blocks" )).'</option>';
        foreach ($unique_categories as $category) {
            echo '<option value="'.$category.'">'.$category.'</option>';
        }
        echo '</select>';
        echo '</div>';
        echo '<div class="grigora-templates">';
        echo '<div class="confirm-modal">';
        echo '<div class="confirm-modal-content">';
        echo '<div class="background">';      
        echo '<p>'.esc_html( __( "Please go through the following points before installing a demo: ", "grigora-blocks" )).'</p>';
        echo '<ol>
        <li>
        '.esc_html( __( "New Demo install will remove all your current template related changes.", "grigora-blocks" )).'
        </li>
        <li>
        '.esc_html( __( "It will reset all the global styles for your website.", "grigora-blocks" )).'
        </li>
        <li>
        '.esc_html( __( "The demo templates text is non translated. Do not expect it to translate to your Wordpress Site Language.", "grigora-blocks" )).'
        </li>
        <li>
        '.esc_html( __( "Demo Templates will install their palette of color styles. It can take up to a few seconds to reflect these colors on the website.", "grigora-blocks")) . "<br />" . 
        esc_html( __( "Ensure you don't have a caching plugin active while installing demo templates; otherwise, color changes may not be reflected.", "grigora-blocks" )).'
        </li>
        </ol>';
        echo '<p>'.esc_html( __( "Are you sure?", "grigora-blocks" )).'</p>';
        echo '<div class="confirm-btn">';
        echo '<p class="close-btn">'.esc_html( __( "Cancel", "grigora-blocks" )).'</p>';
        echo '<button type="submit" value="Submit" form="demo-import-form" class="c-btn">'.esc_html( __( "Yes", "grigora-blocks" )).'</button>';
        echo '</div>';
        echo '</div>';
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
            >Import</button>';
            echo '</div>';
            echo '</div>';            
        }        
    
        echo '</div>';
        
        echo '<p class="coming-soon">'.esc_html( __( "More Templates Coming Soon ", "grigora-blocks" )).'<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="16" height="16" viewBox="0 0 256 256" xml:space="preserve">
        <defs>
        </defs>
        <g transform="translate(128 128) scale(0.72 0.72)" style="">
            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)" >
            <path d="M 7.486 13.502 c 9.982 -9.982 26.165 -9.982 36.147 0 L 45 14.869 l 0 0 c 6.895 22.882 6.259 47.092 0 72.294 L 26.927 69.089 c 0 0 0 0 0 0 l -19.44 -19.44 C -2.495 39.667 -2.495 23.484 7.486 13.502 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(214,73,62); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 82.514 13.502 c -9.982 -9.982 -26.165 -9.982 -36.147 0 L 45 14.869 l 0 0 v 72.294 l 18.073 -18.073 c 0 0 0 0 0 0 l 19.44 -19.44 C 92.495 39.667 92.495 23.484 82.514 13.502 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(214,73,62); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
        </g>
        </g>
        </svg></p>';
    }
}