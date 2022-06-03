<?php
/*-----------------------------------------------------------------------------------*/
/* Customise Admin Bar */
/*-----------------------------------------------------------------------------------*/
function vssl_adminbar() {

    global $wp_admin_bar;
    //remove WP logo and submenu
    $wp_admin_bar->remove_node('wp-logo');

    $wp_admin_bar->remove_menu('view-site'); //remove 'view site' submenu from site title
    $wp_admin_bar->remove_node('site-editor'); //remove 'edit site' menu item
    $wp_admin_bar->remove_menu('customize');

    $wp_admin_bar->remove_node( 'new-link' );
    $wp_admin_bar->remove_node( 'new-user' );
    $wp_admin_bar->remove_node( 'new-media' );

    $wp_admin_bar->remove_menu('search');
}
add_action( 'wp_before_admin_bar_render', 'vssl_adminbar' );
/*-----------------------------------------------------------------------------------*/
/* Remove Comments from WordPress Admin Bar
    (source: https://www.isitwp.com/remove-comments-link-from-admin-bar/) */
/*-----------------------------------------------------------------------------------*/
function remove_comments(){
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_comments' );
/*-----------------------------------------------------------------------------------*/
/* Change "Howdy" into "Hi there"
    (source: http://wpmu.org/daily-tip-how-to-change-the-wordpress-howdy-message-to-a-custom-welcome/) */
/*-----------------------------------------------------------------------------------*/
function vssl_welcome_message($translated, $text, $domain) {
    if ('default' != $domain)
        return $translated;
    if (false !== strpos($translated, 'Howdy'))
        return str_replace('Howdy, ', '', $translated);
    return $translated;
}
add_filter('gettext', 'vssl_welcome_message', 10, 3);


/*source: https://www.wpbeginner.com/wp-tutorials/how-to-disable-wordpress-admin-bar-for-all-users-except-administrators/ */
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}

?>
