<?php
/*-----------------------------------------------------------------------------------*/
/* Rebrand the page title in wp-admin
    (source: http://www.artofblog.com/white-labeling-wordpress/#comment-32486) */
/*-----------------------------------------------------------------------------------*/
function vssl_wp_title() {
    $new_title= __('Admin | ', 'sl_dashtweaks') . get_option('blogname');
    return $new_title;
}
add_filter('admin_title', 'vssl_wp_title');

/*-----------------------------------------------------------------------------------*/
/* Add Admin Favicon */
/*-----------------------------------------------------------------------------------*/
function vssl_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="' .
                        plugins_url( '../ico/favicon.png' , __FILE__ )
                    . '" />';
}
add_action('admin_head', 'vssl_favicon');

?>
