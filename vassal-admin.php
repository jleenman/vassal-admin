<?php
/*
Plugin Name:         VASSAL ADMIN
Description:         Customize the Wordpress Admin
Author:             Jonathan Leenman
Author URI:         https://www.vassal.nl
GitHub Plugin URI:	https://github.com/jleenman/vassal-admin
Version:			       1.2.0

License:            Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)
License URI:        http://creativecommons.org/licenses/by-sa/4.0/
*/

require_once( plugin_dir_path(__FILE__) . 'lib/admin-rebrand.php' );
require_once( plugin_dir_path(__FILE__) . 'lib/admin-bar.php' );
require_once( plugin_dir_path(__FILE__) . 'lib/admin-login.php' );
require_once( plugin_dir_path(__FILE__) . 'lib/admin-footer.php' );
require_once( plugin_dir_path(__FILE__) . 'lib/disable-widgets.php' );
require_once( plugin_dir_path(__FILE__) . 'lib/frontend-functions.php' );

?>
