<?php
/** Add the top level menu page. */
function vssl_options_page() {
    add_menu_page(
        'VASSAL',
        'VASSAL',
        'manage_options',
        'vassal_options',
        'vssl_options_page_html',
        plugin_dir_url(__FILE__) . '/admin-icon.svg',
    );
}
add_action( 'admin_menu', 'vssl_options_page' );

/** Top level menu callback function */
function vssl_options_page_html() {
    // check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    // check if the user have submitted the settings
    if ( isset( $_GET['settings-updated'] ) ) {
        add_settings_error( 'vssl_messages', 'vssl_message', __( 'Settings Saved', 'VASSAL' ), 'updated' );
    }

    // show error/update messages
    settings_errors( 'vssl_messages' );

    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "VASSAL"
            settings_fields( 'VASSAL' );
            // output setting sections and their fields
            // (sections are registered for "VASSAL", each field is registered to a specific section)
            do_settings_sections( 'VASSAL' );
            // output save settings button
            submit_button( 'Save Settings' );
            ?>
        </form>
    </div>
    <?php
}
?>
