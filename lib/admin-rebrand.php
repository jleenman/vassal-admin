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

/*-----------------------------------------------------------------------------------*/
/* Add VASSAL Pawn Style */
/*-----------------------------------------------------------------------------------*/
function vssl_style() {
    echo '<style scoped>
        @media screen and (min-width: 782px) {
            body.wp-admin {
                background-color: #f9f9f9;
				background-image: url('
                    . plugins_url( '../img/logo-pawn.png' , __FILE__ ) .
                        ');
                background-repeat: no-repeat;
                background-attachment:fixed;
                background-position: bottom right;
                background-size:25%;
            }
			body.wp-admin #wpbody {
                opacity:.97;
            }
            body.wp-admin #wpbody #templateside {
                background-color:#f9f9f9;
            }
			body.wp-admin.iframe {
				background:none!important;
			}
        }

    /* hide outlines for hidden widgets */
		#dashboard-widgets .postbox-container .empty-container {
    		outline: none!important;
		}
		#dashboard-widgets .postbox-container .empty-container:after {
			content:""!important;
		}
    /* hide update nags and notices */
		#wpbody .notice,
		#wpbody .error {
			display:none!important;
		}
    </style>';
}
add_action('admin_head', 'vssl_style');

?>
