<?php
  /*
  Plugin Name:        VASSAL ADMIN
  Description:        Vereenvoudig de WordPress Admin.
  Author:             Jonathan Leenman
  Author URI:         https://www.vassal.nl
  Version:			      2.0.1

  License:            Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)
  License URI:        http://creativecommons.org/licenses/by-sa/4.0/
  */

  // Build settings page
  require_once( plugin_dir_path(__FILE__) . 'lib/settings/settings-admin.php' );
  require_once( plugin_dir_path(__FILE__) . 'lib/settings/settings-page.php' );
  require_once( plugin_dir_path(__FILE__) . 'lib/settings/settings-options.php' );

  // Get the value of the setting we've registered with register_setting()
  $setting = get_option('vssl_options');

  // Load plugin parts based on settings
  if ($setting['vssl_footer_setting']=="true") {
    require_once( plugin_dir_path(__FILE__) . 'lib/admin-footer.php' );
  }
  if ($setting['vssl_adminbar_setting']=="true") {
    require_once( plugin_dir_path(__FILE__) . 'lib/admin-bar.php' );
  }
  if ($setting['vssl_rebrand_setting']=="true") {
    require_once( plugin_dir_path(__FILE__) . 'lib/admin-rebrand.php' );
  }
  if ($setting['vssl_login_setting']=="true") {
    require_once( plugin_dir_path(__FILE__) . 'lib/admin-login.php' );
  }
  if ($setting['vssl_dashboard_setting']=="true") {
    require_once( plugin_dir_path(__FILE__) . 'lib/disable-widgets.php' );
  }
  if ($setting['vssl_frontend_setting']=="true") {
    require_once( plugin_dir_path(__FILE__) . 'lib/frontend-functions.php' );
  }
  if ($setting['vssl_xmlrpc_setting']=="true") {
    require_once( plugin_dir_path(__FILE__) . 'lib/disable-xmlrpc.php' );
  }

	// Updater
  if( ! class_exists( 'Vassal_Updater' ) ){
  	include_once( plugin_dir_path( __FILE__ ) . 'lib/updater/updater.php' );
  }

  $updater = new Vassal_Updater( __FILE__ );
  $updater->set_username( 'jleenman' );
  $updater->set_repository( 'vassal-admin' );
  // Your auth code goes here for private repos
	// $updater->authorize( 'abcdefghijk1234567890' );
  $updater->initialize();
?>
