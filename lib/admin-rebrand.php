<?php

/*-----------------------------------------------------------------------------------*/
/* Rebrand the page title in wp-admin
    (source: http://www.artofblog.com/white-labeling-wordpress/#comment-32486) */
/*-----------------------------------------------------------------------------------*/
function custom_wp_title() {
    $new_title= __('Admin | ', 'sl_dashtweaks') . get_option('blogname');
    return $new_title;
}
add_filter('admin_title', 'custom_wp_title');

/*-----------------------------------------------------------------------------------*/
/* Add Admin Favicon */
/*-----------------------------------------------------------------------------------*/
function custom_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="' .
                        plugins_url( '../ico/favicon.png' , __FILE__ )
                    . '" />';
}
add_action('admin_head', 'custom_favicon');

/*-----------------------------------------------------------------------------------*/
/* Add VASSAL Pawn Style */
/*-----------------------------------------------------------------------------------*/
function custom_style() {
    echo '<style scoped>
        @media screen and (min-width: 782px) {
            html {
                background-image: url('
                    . plugins_url( '../img/logo-pawn.png' , __FILE__ ) .
                        ');
                background-repeat: no-repeat;
                background-attachment:fixed;
                background-position: bottom right;
                background-size:25%;
            }
            body.wp-admin{
				background:none;
			}
			#wpbody {
                opacity:.97;
            }
            #templateside {
                background-color:rgba(241,241,241,.95);
            }
        }
    </style>';
}
add_action('admin_head', 'custom_style');

?>
