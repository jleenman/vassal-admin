<?php
/*
Plugin Name:         VASSAL ADMIN
Description:         Customize the Wordpress Admin
Author:             Jonathan Leenman
Author URI:         https://www.vassal.nl
Version:			       2.0

License:            Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)
License URI:        http://creativecommons.org/licenses/by-sa/4.0/
*/


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

?>
