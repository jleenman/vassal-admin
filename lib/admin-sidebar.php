<?php

/*-----------------------------------------------------------------------------------*/
/* Remove Unused Admin Sidebar Menu Items */
/*-----------------------------------------------------------------------------------*/
function vssl_admin_sidebar() {
    $remove_menu_items = array(__('Links'));
    global $menu;
    end ($menu);
    while (prev($menu)){
        $item = explode(' ',$menu[key($menu)][0]);
        if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
        unset($menu[key($menu)]);}
    }

    global $submenu;
    if ( isset( $submenu[ 'themes.php' ] ) ) {
        foreach ( $submenu[ 'themes.php' ] as $index => $menu_item ) {
            if ( in_array( array( 'Customize', 'Customizer', 'customize' ), $menu_item ) ) {
                unset( $submenu[ 'themes.php' ][ $index ] );
            }
        }
    }
}
    /* __('Appearance'),__('Comments'),__('Links'),__('Media'),__('Pages'),__('Plugins'),__('Posts'),
        __('Tools'),__('Settings'),__('Tools'),__('Users') */

add_action('admin_menu', 'vssl_admin_sidebar');

?>
