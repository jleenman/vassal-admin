<?php

function vssl_settings_init() {
    // Register a new setting for "VASSAL" page.
    register_setting( 'VASSAL', 'vssl_options' );

    // Register a new section in the "VASSAL" page.
    add_settings_section(
        'vssl_settings_section',
        '','vssl_settings_section_callback',
        'VASSAL'
    );

    // Register a new field in the "vssl_settings_section" section, inside the "VASSAL" page.
    add_settings_field(
        'vssl_adminbar_setting',// As of WP 4.6 this value is used only internally.
                                // Use $args' label_for to populate the id inside the callback.
            __( 'Show custom Admin bar', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_adminbar_setting',
            'class'             => 'vssl_row',
        )
    );
    add_settings_field(
        'vssl_rebrand_setting',
            __( 'Brand the admin interface', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_rebrand_setting',
            'class'             => 'vssl_row',
        )
    );
    add_settings_field(
        'vssl_login_setting',
            __( 'Custom login page', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_login_setting',
            'class'             => 'vssl_row',
        )
    );
    add_settings_field(
        'vssl_dashboard_setting',
            __( 'Cleanup Dashboard', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_dashboard_setting',
            'class'             => 'vssl_row',
        )
    );
    add_settings_field(
        'vssl_footer_setting',
            __( 'Show copyright footer', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_footer_setting',
            'class'             => 'vssl_row',
        )
    );
    // add_settings_field(
    //     'vssl_frontend_setting',
    //         __( 'Enable copyright shortcode on frontend', 'VASSAL' ),
    //     'vssl_field_setting_callback',
    //     'VASSAL',
    //     'vssl_settings_section',
    //     array(
    //         'label_for'         => 'vssl_frontend_setting',
    //         'class'             => 'vssl_row',
    //         'vssl_custom_data' => 'frontend_setting',
    //         'description' => 'Instructions: use [copyright] to display "&copy;firstyear-thisyear""',
    //     )
    // );
    add_settings_field(
        'vssl_xmlrpc_setting',
            __( 'Disable XMLRPC', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_xmlrpc_setting',
            'class'             => 'vssl_row',
            'vssl_custom_data' => 'xmlrpc_setting',
            'description' => 'Note: disable XMLRPC for added security. XMLRPC is required for the new Full site Editing features',
        )
    );
}
add_action( 'admin_init', 'vssl_settings_init' );
?>
