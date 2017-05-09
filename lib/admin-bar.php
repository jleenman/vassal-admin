<?php
/*-----------------------------------------------------------------------------------*/
/* Customise Admin Bar */
/*-----------------------------------------------------------------------------------*/
function vssl_adminbar() {

    global $wp_admin_bar;
    //remove WP logo and submenu
    $wp_admin_bar->remove_node('wp-logo');

    $wp_admin_bar->remove_menu('view-site'); //remove 'view site' submenu from site title

    $wp_admin_bar->remove_node( 'new-link' );
    $wp_admin_bar->remove_node( 'new-user' );
    $wp_admin_bar->remove_node( 'new-media' );
}
add_action( 'wp_before_admin_bar_render', 'vssl_adminbar' );

/*-----------------------------------------------------------------------------------*/
/* Change "Howdy" into "Hi there"
    (source: http://wpmu.org/daily-tip-how-to-change-the-wordpress-howdy-message-to-a-custom-welcome/) */
/*-----------------------------------------------------------------------------------*/
function vssl_welcome_message($translated, $text, $domain) {
    if ('default' != $domain)
        return $translated;
    if (false !== strpos($translated, 'Howdy'))
        return str_replace('Howdy', 'Hi there', $translated);
    return $translated;
}
add_filter('gettext', 'vssl_welcome_message', 10, 3);

?>
