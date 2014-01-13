<?php
/*-----------------------------------------------------------------------------------*/
/* Customise backend developer & copyright footer */
/*-----------------------------------------------------------------------------------*/
function custom_admin_footer() {

	//selectable licenses
	$ccby = array(
		"CC-BY 4.0", //title
		"http://creativecommons.org/licenses/by/4.0/", //url
		"cb" //icons
		);
	$ccbysa = array(
		"CC-BY-SA 4.0", //title
		"http://creativecommons.org/licenses/by-sa/4.0/", //url
		"cba" //icons
		);
	$ccbynd = array(
		"CC-BY-ND 4.0", //title
		"http://creativecommons.org/licenses/by-nd/4.0/", //url
		"cbd" //icons
		);

	// OPTIONS
	$developer = 'VASSAL'; //developer name
	$url = 'http://www.vassal.nl'; //developer url
	$year = '2014'; //year of project delivery
	$cc = $ccbysa; //select license here

	//compose footer
	$thankyou =	'<span id="footer-thankyou">'.
					'Developed by '.
					'<a href="' . $url . '" target="_blank">'.
						$developer.
					'</a> '.
					$year.
				'</span>';
	$license =	'License '.
					'<a rel="license" href="'.$cc[1].'" target="_blank">'. //url
							$cc[0]. //title
					'</a> '.
					'<span class="cc-ttf">'.
						$cc[2]. //icon
					'</span>';
	$style =	'<style scoped>
					@font-face{
						font-family:"Creative Commons";
						src:url(' . plugins_url( '../fonts/cc-icons.ttf' , __FILE__ ) . ');
					}
					.cc-ttf {
						font-family:"Creative Commons";
						font-size:15px;
						letter-spacing:.2em;
					}
				</style>';

	//print information
	echo $thankyou .' &mdash; '. $license . $style;

}
add_filter('admin_footer_text', 'custom_admin_footer');

?>