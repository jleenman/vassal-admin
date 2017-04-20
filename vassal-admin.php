<?php
/*
Plugin Name:         VASSAL ADMIN
Description:         Customise and rebrand the Wordpress Admin
Author:             Jonathan Leenman
Author URI:         https://github.com/jleenman/
GitHub Plugin URI:	https://github.com/jleenman/vassal-admin
Version:			1.0.14

License:            Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)
License URI:        http://creativecommons.org/licenses/by-sa/4.0/
*/

require_once( plugin_dir_path(__FILE__) . 'lib/admin-rebrand.php' );
require_once( plugin_dir_path(__FILE__) . 'lib/admin-bar.php' );
//require_once( plugin_dir_path(__FILE__) . 'lib/admin-sidebar.php' );
require_once( plugin_dir_path(__FILE__) . 'lib/admin-login.php' );
require_once( plugin_dir_path(__FILE__) . 'lib/admin-footer.php' );

?>
