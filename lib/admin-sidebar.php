<?php

/*-----------------------------------------------------------------------------------*/
/* Remove Unused Admin Sidebar Menu Items */
/*-----------------------------------------------------------------------------------*/
function custom_admin_sidebar() {
	$remove_menu_items = array(__('Links'));
	global $menu;
	end ($menu);
	while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		unset($menu[key($menu)]);}
	}
}
	/* __('Appearance'),__('Comments'),__('Links'),__('Media'),__('Pages'),__('Plugins'),__('Posts'),
		__('Tools'),__('Settings'),__('Tools'),__('Users') */

add_action('admin_menu', 'custom_admin_sidebar');

?>