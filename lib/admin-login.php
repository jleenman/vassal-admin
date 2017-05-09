<?php

/*-----------------------------------------------------------------------------------*/
/* Load login.css */
/* Change login URL */
/* Change login Title */
/*-----------------------------------------------------------------------------------*/

// calling login css so to style the page
function vssl_login_css() {	wp_enqueue_style( 'vssl_login_css', plugins_url( '../css/login.css' , __FILE__ ), false ); }

// changing the logo link from wordpress.org to your site
function vssl_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function vssl_login_title() { return get_option('blogname'); }

add_action('login_enqueue_scripts', 'vssl_login_css', 10 );
add_filter('login_headerurl', 'vssl_login_url');
add_filter('login_headertitle', 'vssl_login_title');


?>