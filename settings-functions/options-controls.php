<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/**
* Grigora Options in Appearance Menu
*/

if ( ! function_exists( 'girgora_options_menu' ) ) { 
    function girgora_options_menu() {
        add_theme_page( 'grigora-options', __('Grigora Options', 'grigora'), 'manage_options', 'grigora-options', 'grigora_options_page' );
    }
}

/**
 * Checks the state of Grigora plugin pro
 *
 * @since  1.000
 *
 * @return true if pro is active
 */

function is_grigora_pro_active(){   
    return function_exists("grigora_pro_active");
}

/**
 * Render setting options in a custom div
 *
 * @since  1.000
 * 
 * @param $page list of setting field
 * @return render
 */

function custom_do_settings_sections( $page ) {
    global $wp_settings_sections, $wp_settings_fields;
 
    if ( ! isset( $wp_settings_sections[ $page ] ) ) {
        return;
    }
 
    foreach ( (array) $wp_settings_sections[ $page ] as $section ) {
        echo "<div class='{$section['id']} customizer ". (is_grigora_pro_active() ? '' : '') ."' id='{$section['id']}'>";
        if ( $section['title'] ) {
            echo "<h2>{$section['title']}</h2>\n";
        }

        if ( $section['callback'] ) {
            call_user_func( $section['callback'], $section );
        }

        if ( ! isset( $wp_settings_fields ) || ! isset( $wp_settings_fields[ $page ] ) || ! isset( $wp_settings_fields[ $page ][$section['id'] ] ) ) {
            continue;
        }
        echo '<table class="form-table" role="presentation">';
            do_settings_fields( $page, $section['id'] );
            echo '</table>';
        echo '</div>';
    }
}

/**
 * Get the default setting values
 *
 * @since  1.000
 * 
 * @param $option list of default values
 * @return defaults
 */

function grigora_get_option( $option ) {
    // $defaults = grigora_get_defaults();
    $options = wp_parse_args(
        get_option( 'grigora_settings', array() ),
        $defaults
    );
    return $options[$option];
}

if ( ! function_exists( 'grigora_options_page' ) ) {

/**
 * Render Grigora Options Page layout
 * enqueue necessary css and js file that required for the options page.
 * If the Grigora Pro Plugin is not active. It will show a notification regarding purchasing the
 * plugin
 *
 * @since  1.000
 * 
 */
function grigora_options_page() {
    wp_enqueue_style( 'theme-options', get_template_directory_uri() . '/dist/css/admin-options.min.css', null, GRIGORA_VERSION );
    wp_enqueue_script( 'theme-options', get_template_directory_uri() . '/js/admin-options.js', null, GRIGORA_VERSION );

    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( __( 'You do not have sufficient permissions to access this page.' , 'grigora') );
    }
    echo '<div class="admin-container">';
    settings_errors();
    ?>
<div class="setting-title">
    <h1><?php echo esc_html( __( 'Grigora', 'grigora')); ?></h1>
</div>
<?php 
    if ( !is_grigora_pro_active() ) {
        echo '<div class="pro-notification"><p>'; 
        echo esc_html( __( "Activate All Powerful Options By Purchasing Girgora Pro", "grigora" )); 
        echo '</p><a href="'.grg_PRO_URL.'" target="_blank"><button class="pro-btn">'.esc_html( __( 'Buy Now', 'grigora')).'</button></a></div>';
    }
    ?>
<div class="grigora-settings">
    <div class="tab-container">
        <div class="tab">
            <button class="tab-btn" onclick="controlName(event, 'grigora_customizer_section')"
                id="default"><?php echo esc_html( __( "Customizer Options", "grigora" )); ?></button>
            <button class="tab-btn"
                onclick="controlName(event, 'grigora_performance_section')"><?php echo esc_html( __( "Performance", "grigora" )); ?></button>
            <button class="tab-btn IE-tab"
                onclick="controlName(event, 'grigora_importexport_section')"><?php echo esc_html( __( "Import & Export", "grigora" )); ?></button>
        </div>
        <div class="tab-content">
            <form action="options.php" method="post" class=" <?php echo (is_grigora_pro_active() ? '' : '') ?>">
                <?php
                        settings_fields("grigora_settings");
                        custom_do_settings_sections("grigora-options");
                        submit_button();
                    ?>
            </form>
            <form enctype="multipart/form-data" action="<?php echo get_admin_url( null, 'admin-post.php' ) ?>"
                method="post" class="IETab <?php echo (is_grigora_pro_active() ? '' : '') ?>">
                <div class="grigora_importexport_section customizer " id="grigora_importexport_section">
                    <h2><?php echo esc_html( __( "Import & Export", "grigora" )); ?></h2>
                    <input type="hidden" name="action" value="grigora_import">
                    <p><?php echo esc_html( __( "Save and Restore your Grigora Settings in One Click!", "grigora" )); ?>
                    </p>
                    <table class="form-table" role="presentation">
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo esc_html( __( "Export", "grigora" )); ?></th>
                                <td><?php grigora_importexport_section_export_callback_function(); ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo esc_html( __( "Import", "grigora" )); ?></th>
                                <td><?php grigora_importexport_section_import_callback_function(); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                        submit_button();
                    ?>
                </div>
            </form>
        </div>
    </div>
    <div class="grigora-admin-sidebar">
        <?php if(is_grigora_pro_active()){ ?>
        <?php if(get_option("grigora_license_key_status") == "valid"){
            ?>
        <div class="license-valid">
            <div class="header"><?php echo esc_html( __( "License Status", "grigora" )); ?></div>
            <div class="status"><?php echo esc_html( __( "Valid", "grigora" )); ?></div>
        </div>
        <div class="deactivation-form">
            <form action="<?php echo esc_url( admin_url('admin-post.php' ) ) ?>" method="post">
                <div class="header"><?php echo esc_html( __( "Grigora Pro License", "grigora" )); ?></div>
                <input type="hidden" name="action" value="grigora_update_license_key">
                <input type="hidden" id="grigora_license_key" name="grigora_license_key" value="">
                <?php wp_nonce_field( 'grigora_activation_nonce', 'grigora_activation_nonce' ); ?>
                <p><?php echo esc_html( __( "Press Deactivate button to disable auto updates.", "grigora" )); ?></p>
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Deactivate">
            </form>
        </div>
        <?php } else { ?>
        <div class="license-invalid">
            <div class="header"><?php echo esc_html( __( "License Status", "grigora" )); ?></div>
            <div class="status"><?php echo esc_html( __( "Not Active", "grigora" )); ?></div>
        </div>
        <div class="activation-form">
            <form action="<?php echo esc_url( admin_url('admin-post.php' ) ) ?>" method="post" class="grg-active">
                <div class="header"><?php echo esc_html( __( "Grigora Pro License", "grigora" )); ?></div>
                <input type="hidden" name="action" value="grigora_update_license_key">
                <?php wp_nonce_field( 'grigora_activation_nonce', 'grigora_activation_nonce' ); ?>
                <p><?php echo esc_html( __( "Enter your", "grigora" )); ?> <a href="<?php echo grg_PRO_URL; ?>"><?php echo esc_html( __( "license
                        key", "grigora" )); ?></a> <?php echo esc_html( __( "to enable auto updates.", "grigora" )); ?>
                </p>
                <input type="password" id="grigora_license_key" name="grigora_license_key">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Activate">
            </form>
        </div>
        <?php }
        } ?>
    </div>
</div>
<?php
    }
}

// grigora_set_defaults(
//     array_merge(
//         grigora_color_defaults(),
//         grigora_spacing_defaults(),
//         grigora_scroll_defaults(),
//         grigora_typography_defaults_fonts(),
//         grigora_typography_defaults(),
//         grigora_blog_defaults(),
//         grigora_breadcrumbs_defaults()
//     )
// );
add_action( 'admin_menu', 'girgora_options_menu' );

register_setting( 'grigora_settings', 'grigora_settings' );

/**
 * Set theme defaults
 *
 * @since  1.000
 * 
 */
function grigora_set_defaults($defaults){
    $mods = get_theme_mods();
    foreach($defaults as $k => $value){
        if(!isset($mods[$k])){
            set_theme_mod($k, $value);
        }
    }
}

/**
 * Renders customizer setting in div having specific class name for each individual setting in
 * customizer options.
 *
 * @since  1.000
 * 
 */

function grigora_customize_settings_section() {
    
 	add_settings_section(
		'grigora_customizer_section',
		__('Customizer Options', 'grigora'),
		'grigora_customizer_section_callback_function',
        'grigora-options'	
	);

 	add_settings_field(
		'grigora_customizer_section_colors',
		__('Advanced Colors', 'grigora'),
		'grigora_customizer_section_colors_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_typography',
		__('Typography', 'grigora'),
		'grigora_customizer_section_typography_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_spacing',
		__('Layout & Spacing', 'grigora'),
		'grigora_customizer_section_spacing_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_blog',
		__('Blog Layout', 'grigora'),
		'grigora_customizer_section_blog_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_blocks',
		__('Grigora Blocks', 'grigora'),
		'grigora_customizer_section_blocks_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_stickyh',
		__('Sticky Header', 'grigora'),
		'grigora_customizer_section_stickyh_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_toc',
		__('Table Of Contents', 'grigora'),
		'grigora_customizer_section_toc_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_scroll',
		__('Scroll To Top', 'grigora'),
		'grigora_customizer_section_scroll_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_cookie',
		__('Cookie Notice', 'grigora'),
		'grigora_customizer_section_cookie_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    // add_settings_field(
	// 	'grigora_customizer_section_popup',
	// 	'Pop Ups (Upcoming)',
	// 	'grigora_customizer_section_popup_callback_function',
	// 	'grigora-options',
	// 	'grigora_customizer_section'
	// );



 }
 
 add_action( 'admin_init', 'grigora_customize_settings_section' );
 
/**
 * Renders customizer setting in div having specific class name for each individual setting
 *
 * @since  1.000
 * 
 * @return div with custom class
 */

 function grigora_performance_settings_section() {

    add_settings_section(
       'grigora_performance_section',
		__('Performance', 'grigora'),
       'grigora_performance_section_callback_function',
       'grigora-options'
   );

   add_settings_field(
        'grigora_performance_section_minify',
		__('Minify CSS', 'grigora'),
        'grigora_performance_section_minify_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_dynamicexternal',
		__('Dynamic CSS in External File', 'grigora'),
        'grigora_performance_section_dynamicexternal_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_localfonts',
		__('Host Google Fonts Locally', 'grigora'),
        'grigora_performance_section_localfonts_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
       'grigora_performance_section_emoji',
		__('Disable Emojis', 'grigora'),
       'grigora_performance_section_emoji_callback_function',
       'grigora-options',
       'grigora_performance_section'
   );

    add_settings_field(
        'grigora_performance_section_embeds',
		__('Disable Embeds', 'grigora'),
        'grigora_performance_section_embeds_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_jquerymigrate',
		__('Disable Jquery Migrate', 'grigora'),
        'grigora_performance_section_jquerymigrate_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_jquery',
		__('Disable Jquery', 'grigora'),
        'grigora_performance_section_jquery_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_dashicons',
		__('Disable Dashicons', 'grigora'),
        'grigora_performance_section_dashicons_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

}

add_action( 'admin_init', 'grigora_performance_settings_section' );

/**
 * renders necessary field such as lable and input fields
 *
 * @since  1.000
 * 
 * @return label and input fields
 */

function grigora_customizer_section_callback_function() {
 	echo '<p>'.esc_html( __( "Customize your theme!", "grigora" )).'</p>';
 }

function grigora_performance_section_callback_function() {
    echo '<p>'.esc_html( __( "Make your website fast by removing unnecessary imports!", "grigora" )).'</p>';
}

function grigora_importexport_section_callback_function() {
    echo '<p>'.esc_html( __( "Save and Restore your Grigora Settings in One Click!", "grigora" )).'</p>';
}

function grigora_customizer_section_colors_callback_function() {
 	echo '<input name="grigora_settings[color]" id="grigora_settings[color]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'color' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_typography_callback_function() {
    echo '<input name="grigora_settings[typography]" id="grigora_settings[typography]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'typography' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_spacing_callback_function() {
    echo '<input name="grigora_settings[spacing]" id="grigora_settings[spacing]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'spacing' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_blog_callback_function() {
    echo '<input name="grigora_settings[blog]" id="grigora_settings[blog]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'blog' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_stickyh_callback_function() {
    echo '<input name="grigora_settings[stickyh]" id="grigora_settings[stickyh]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'stickyh' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_toc_callback_function() {
    echo '<input name="grigora_settings[toc]" id="grigora_settings[toc]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'toc' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_scroll_callback_function() {
    echo '<input name="grigora_settings[scroll]" id="grigora_settings[scroll]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'scroll' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_cookie_callback_function() {
    echo '<input name="grigora_settings[cookie]" id="grigora_settings[cookie]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'cookie' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_popup_callback_function() {
    echo '<input name="grigora_settings[popup]" id="grigora_settings[popup]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'popup' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_blocks_callback_function() {
    echo '<input name="grigora_settings[blocks]" id="grigora_settings[blocks]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'blocks' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}
function grigora_performance_section_minify_callback_function() {
    echo '<input name="grigora_settings[minify]" id="grigora_settings[minify]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'minify' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}
function grigora_performance_section_dynamicexternal_callback_function() {
    echo '<input name="grigora_settings[dynamicexternal]" id="grigora_settings[dynamicexternal]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'dynamicexternal' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}
function grigora_performance_section_localfonts_callback_function() {
    echo '<input name="grigora_settings[localfonts]" id="grigora_settings[localfonts]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'localfonts' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}
function grigora_performance_section_emoji_callback_function() {
    echo '<input name="grigora_settings[emoji]" id="grigora_settings[emoji]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'emoji' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_embeds_callback_function() {
    echo '<input name="grigora_settings[embeds]" id="grigora_settings[embeds]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'embeds' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_jquerymigrate_callback_function() {
    echo '<input name="grigora_settings[jquerymigrate]" id="grigora_settings[jquerymigrate]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'jquerymigrate' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_jquery_callback_function() {
    echo '<input name="grigora_settings[jquery]" id="grigora_settings[jquery]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'jquery' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_dashicons_callback_function() {
    echo '<input name="grigora_settings[dashicons]" id="grigora_settings[dashicons]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'dashicons' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_importexport_section_export_callback_function() {
    $url = get_admin_url( null, 'admin-post.php?' );
    $url = $url."action=grigora_export&_wpnonce=".wp_create_nonce( 'grigora_export' );
    echo '<div class=""grigora-export-button"><a href="'.$url.'">'.esc_html( __( "Download Settings", "grigora" )).'</a></div>';
}

function grigora_importexport_section_import_callback_function() {
    echo '<input name="grigora_import" id="grigora_import" type="file">';
}

add_action( 'admin_post_grigora_export', 'grigora_admin_export_data' );

/**
 * exports setting backup file in json format
 *
 * @since  1.000
 * 
 * @return JSON export file
 */

function grigora_admin_export_data() {
    if( isset($_GET["_wpnonce"])&&$_GET["_wpnonce"] ) {
        if ( ! wp_verify_nonce( $_GET["_wpnonce"], 'grigora_export' ) ) {
            wp_die( __( 'The link you followed has expired.', 'grigora' ) ); 
        } else {
            header('Content-disposition: attachment; filename=grigora_export.json');
            header('Content-type: application/json');
            $grg_options = get_option("grigora_settings");
            $theme_mods = get_theme_mods();
            if(!$grg_options){
                $grg_options = array();
            }
            if(!$theme_mods){
                $theme_mods = array();
            }
            $export = array(
                "grg_options" => $grg_options,
                "theme_mods" => $theme_mods,
            );
            $json = json_encode($export);
            echo $json;
        }
        exit();
       }
       exit();
}


add_action( 'admin_post_grigora_import', 'grigora_admin_import_data' );

/**
 * allows to upload the json format exported file to restore the settings
 *
 * @since  1.000
 * 
 */

function grigora_admin_import_data() {
    if(isset($_POST["submit"])) {
        if(empty($_FILES)) {
            exit();
        } 
        $file_ext=strtolower(end(explode('.',$_FILES['grigora_import']['name'])));
        $file_tmp = $_FILES['grigora_import']['tmp_name'];
        $extensions = array('json');
        if(in_array($file_ext,$extensions) === false){
            wp_die( __( 'Please upload Json file', 'grigora' ) ); 
        }
        $str = file_get_contents($file_tmp);
        $json = json_decode($str, true);
        switch(json_last_error()) {
            case JSON_ERROR_DEPTH:
                wp_die( __( 'JSON Parse Error', 'grigora' ) ); 
            break;
            case JSON_ERROR_CTRL_CHAR:
                wp_die( __( 'JSON Parse Error', 'grigora' ) ); 
            break;
            case JSON_ERROR_SYNTAX:
                wp_die( __( 'JSON Parse Error', 'grigora' ) ); 
            break;
        }
        if(array_key_exists("grg_options", $json)){
            update_option('grigora_settings', $json['grg_options']);
        }
        if(array_key_exists("theme_mods", $json)){
            foreach($json['theme_mods'] as $key => $value ){
                set_theme_mod( $key, $value );
            }
        }
        wp_redirect(admin_url('admin.php?page=grigora-options'));
    }
       exit();
}

?>