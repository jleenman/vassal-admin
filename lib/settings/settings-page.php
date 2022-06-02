<?php
/**
 * Developers section callback function.
 * @param array $args  The settings array, defining title, id, callback.
 */
function vssl_settings_section_callback( $args ) {}

/** Setting field callback function. */
function vssl_field_setting_callback( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( 'vssl_options' );
    ?>
    <select
            id="<?php echo esc_attr( $args['label_for'] ); ?>"
            name="vssl_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="false" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'false', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'No', 'VASSAL' ); ?>
        </option>
        <option value="true" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'true', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'Yes', 'VASSAL' ); ?>
        </option>
    </select>
    <?
    if ($args['description']) {
      ?>
      <p class="description">
        <?php echo esc_attr( $args['description'] ); ?>
      </p>
      <?
    }
}
?>
