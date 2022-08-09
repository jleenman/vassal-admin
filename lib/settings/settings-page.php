<?php
/**
 * Developers section callback function.
 * @param array $args  The settings array, defining title, id, callback.
 */
function vssl_settings_section_callback( $args ) {
  ?>
  <p class="description">
    <?php
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");

    if ($time >= "05" && $time < "12") {
        echo "Goedemorgen";
    } else
    if ($time >= "12" && $time < "18") {
        echo "Goedemiddag";
    } else
    if ($time >= "18" && $time < "23") {
        echo "Goedenavond";
    } else
    if ($time >= "23" or $time < "05") {
        echo "Goede nacht";
    }
    $user = wp_get_current_user();
    echo " " . $user->display_name . ",";
    ?>
  </p>
  <p class="description">
    Met deze instellingen wordt de WordPress interface vereenvoudigd zodat het makkelijker is om de website te beheren.
  </p>
  <?php
}

/** Setting field callback function. */
function vssl_field_setting_callback( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( 'vssl_options' );
    ?>
    <select
            id="<?php echo esc_attr( $args['label_for'] ); ?>"
            name="vssl_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="true" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'true', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'Ja', 'VASSAL' ); ?>
        </option>
        <option value="false" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'false', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'Nee', 'VASSAL' ); ?>
        </option>

    </select>
    <?php
    if (isset($setting['description']) && $args['description']) {
      ?>
      <p class="description">
        <?php echo esc_attr( $args['description'] ); ?>
      </p>
      <?php
    }
}
?>
