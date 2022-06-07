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
            __( 'Gebruik de eenvoudige Admin bar', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_adminbar_setting',
            'class'             => 'vssl_row',
        )
    );

    add_settings_field(
        'vssl_dashboard_setting',
            __( 'Schoon het Dashboard op', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_dashboard_setting',
            'class'             => 'vssl_row',
        )
    );
    add_settings_field(
        'vssl_login_setting',
            __( 'Gebruik custom login pagina', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_login_setting',
            'class'             => 'vssl_row',
        )
    );
    add_settings_field(
        'vssl_footer_setting',
            __( 'Geef de copyright rechten weer', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_footer_setting',
            'class'             => 'vssl_row',
        )
    );
    add_settings_field(
        'vssl_rebrand_setting',
            __( 'Geef de VASSAL pion weer ', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_rebrand_setting',
            'class'             => 'vssl_row',
        )
    );
    add_settings_field(
        'vssl_frontend_setting',
            __( 'Schakel copyright shortcode in', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_frontend_setting',
            'class'             => 'vssl_row',
            'vssl_custom_data' => 'frontend_setting',
            'description' => 'Instructie: gebruik [copyright] om "&copy;jaar_eerste_post - huidig_jaar" weer te geven.',
        )
    );
    add_settings_field(
        'vssl_xmlrpc_setting',
            __( 'Schakel XMLRPC uit', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_xmlrpc_setting',
            'class'             => 'vssl_row',
            'vssl_custom_data' => 'xmlrpc_setting',
            'description' => 'Let op: schakel XMLRPC uit voor betere beveiliging. XMLRPC is nodig voor de Full site Editor, dus deze werkt dan niet meer.',
        )
    );
    add_settings_field(
        'vssl_disable_comments',
            __( 'Schakel Commentaar uit', 'VASSAL' ),
        'vssl_field_setting_callback',
        'VASSAL',
        'vssl_settings_section',
        array(
            'label_for'         => 'vssl_disable_comments',
            'class'             => 'vssl_row',
            'vssl_custom_data' => 'disable_comments'
        )
    );

}
add_action( 'admin_init', 'vssl_settings_init' );
?>
