<?php

/*
Plugin Name: Copyright Date
Description: To add copyright date to footer
Author: Maureen
Author URI:  
*/
 
add_action( 'foundationpress_after_copyright', 'foundationpress_get_date', 999 );
function foundationpress_get_date( $year = '1928' ) {
	if(intval($year) == 'auto'){ 
		$year = date('Y');
	}
	if(intval($year) == date('Y')){ 
		$year = intval($year);
	}
	if(intval($year) < date('Y')){ 
		$year = intval($year) . ' - ' . date('Y');
	}
	if(intval($year) > date('Y')){ 
		$year = date('Y');
	}
	echo "Copyright &copy; ".$year;
}

 