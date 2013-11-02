<?php

/*-----------------------------------------------------------------------------------*/
/* Load login.css */
/* Change login URL */
/* Change login Title */
/*-----------------------------------------------------------------------------------*/

// calling login css so to style the page
function login_css() {	wp_enqueue_style( 'bones_login_css', plugins_url( '../css/login.css' , __FILE__ ), false ); }

// changing the logo link from wordpress.org to your site
function login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function login_title() { return get_option('blogname'); }

add_action('login_enqueue_scripts', 'login_css', 10 );
add_filter('login_headerurl', 'login_url');
add_filter('login_headertitle', 'login_title');


?>