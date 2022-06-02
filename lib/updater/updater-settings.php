<?php
/*
	Settings for updates
*/
if( ! class_exists( 'Vassal_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Vassal_Updater( __FILE__ );
$updater->set_username( 'jleenman' );
$updater->set_repository( 'vassal-admin' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
?>
