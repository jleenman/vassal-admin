<?php
/*-----------------------------------------------------------------------------------*/
/* Load login.css */
/* Change login URL */
/* Change login Title */
/*-----------------------------------------------------------------------------------*/

// changing the logo image to site logo or vassal logo
function vssl_login_logo() {
  if (has_custom_logo()) {
      $logo_url = esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
  } else {
      $logo_url = plugins_url( '../img/logo-shield.png' , __FILE__ );
  }?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo $logo_url ?>);
            background-size: contain;
            background-position: center bottom;
            width: 240px;
            height: 200px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'vssl_login_logo' );

// changing the logo link from wordpress.org to your site
function vssl_login_url() {  return home_url(); }
add_filter('login_headerurl', 'vssl_login_url');

// changing the alt text on the logo to show your site name
function vssl_login_title() { return get_option('blogname'); }
add_filter('login_headertitle', 'vssl_login_title');

?>
