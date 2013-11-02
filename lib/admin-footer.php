<?php

/*-----------------------------------------------------------------------------------*/
/* Customise backend developer & copyright footer */
/*-----------------------------------------------------------------------------------*/
	function custom_admin_footer() {
		$developer = 'VASSAL';
		$url = 'http://www.vassal.nl';
		$year = '2013';

		//define licenses output
		$ccby = 'License ' .
			'<a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed" target="_blank">CC-BY 3.0</a> '.
			'<span class="cc-ttf">cb</span>';
		$ccbysa = 'License ' .
			'<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed" target="_blank">CC-BY-SA 3.0</a> '.
			'<span class="cc-ttf">cba</span>';
		$ccbynd = 'License ' .
			'<a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/deed" target="_blank">CC-BY-ND 3.0</a> '.
			'<span class="cc-ttf">cbd</span>';
		
		//print information
		echo 	'<span id="footer-thankyou">' .
				'Developed by <a href="' . $url . '" target="_blank">' . $developer . '</a> ' . $year . 
			'</span> &mdash; ' .
			$ccbysa .
			'<style scoped>
				@font-face{
					font-family:"Creative Commons";
					src:url(' .
						plugins_url( '../fonts/cc-icons.ttf' , __FILE__ )
					. ');
				}
				.cc-ttf {
					font-family:"Creative Commons";
					font-size:15px;
					letter-spacing:.2em;
				}</style>';
	}
add_filter('admin_footer_text', 'custom_admin_footer');

?>