<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

add_action( 'customize_register', 'grigora_blocks_customizer', 20 );
function grigora_blocks_customizer( $wp_customize ) {

    /**
     * Typography Panel
     *
     * @since  1.00
     * 
     */
    
    $wp_customize->add_panel( 'grg_typography', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Typography',
        'description'    => __('Edit text styling', 'grigora'),
    ) );

     /**
     * Body Typography Sections
     *
     * @since  1.00
     * 
     */ 
    
    $wp_customize->add_section( 'grg_typography_body', [
        'title' => __( 'Body', 'grigora' ),
        'priority' => 30,
        'panel' => 'grg_typography',
    ] );

    /**
     * Body Typography Settings
     *
     * @since  1.00
     * 
     */ 

    $wp_customize->add_setting( 'grg_typography_body_font', [ 'default' => '-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif', 'sanitize_callback' => 'grg_sanitize_select'
    ] );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'grg_typography_body_font',
        array(
            'label'          => __( 'Body Font', 'grigora' ),
            'section'        => 'grg_typography_body',
            'settings'       => 'grg_typography_body_font',            
            'type' => 'select',
            'choices' => google_fonts()
        )
    ) );
    
}