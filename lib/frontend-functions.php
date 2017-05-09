<?php

//VASSAL copyright
function vssl_copyright() {
	// check for cached values for copyright dates
	$copyright_cache = wp_cache_get( 'copyright_dates', 'oenology' );
	// query the database for first/last copyright dates, if no cache exists
	if ( false === $copyright_cache ) {
		global $wpdb;
		$copyright_dates = $wpdb->get_results("
			SELECT
			YEAR(min(post_date_gmt)) AS firstdate, 
			YEAR(max(post_modified_gmt)) AS lastdate
			FROM
			$wpdb->posts
			WHERE
			post_status = 'publish'
			"); 
			// first PUBLISHED date as first year
			// last MODIFIED date as last year
		$copyright_cache = $copyright_dates;
		// add the first/last copyright dates to the cache
		wp_cache_set( 'copyright_dates', $copyright_cache, 'oenology', '604800' );
	}
	// Build the copyright notice, 
	if( $copyright_cache ) {
		$copyright = $copyright_cache[0]->firstdate; // year first PUBLISHED
		if( $copyright_cache[0]->firstdate != $copyright_cache[0]->lastdate ) {
		if (date('Y') - $copyright_cache[0]->lastdate  >= 1 && date('Y') - $copyright_cache[0]->lastdate  < 5 ) {
				// if the website is not current, add one year to last-modified 
				$copyright_cache[0]->lastdate += 1;
			}
			$copyright .= '-' . $copyright_cache[0]->lastdate; // year last MODIFIED
			}
		if(date('Y') - $copyright_cache[0]->lastdate  >= 5 ) {
			$copyright = 'LAST UPDATED ' . $copyright_cache[0]->lastdate . '. ';
		}
	}
	else { 
		// fallback: current year when no results from cache
		$copyright .= date('Y');
	}
	return '&copy; ' . $copyright . ' ';
}

?>
