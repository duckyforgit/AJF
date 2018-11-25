<?php

/*
Plugin Name: WPShout Plugin Extension Demo
Description: To Demonstrate Hooking into Custom Hooks
Author: WPShout
Author URI: http://wpshout.com/
*/

add_filter( 'wpshout_qod_text', 'wpshout_filter_qod_text' );
function wpshout_filter_qod_text( $text ) {
	$text = str_replace( 
		array( ' I ', ' me ', ' the ', ' is ', ' am ', ' are ' ),
		array( ' I, a descendent of savannah-dwelling hominids that somehow evolved an astounding capacity for self-reflection, ', ' the cooled-off stellar matter I call "me" ', ' the trillions of atoms that make up the ', ' seems, without the mind-boggling perspective of quantum physics, to be ', ' cannot, due to the Heisenberg Uncertainty Principle, be determined not to be ', ' appear to our best scientific instruments to be ' ),
		$text
	);
	return $text;
}

add_filter( 'wpshout_qod_author', 'wpshout_filter_qod_author' );
function wpshout_filter_qod_author( $text ) {
	$text = '<strike>' . $text . '</strike> Carl Sagan';
	return $text;
}

add_action( 'wpshout_before_get_qod_text', 'wpshout_set_up_quote' );
function wpshout_set_up_quote() {
	echo '<h4>Carl Sagan Quote of the Day for ' . date( 'F j, Y') . ':</h4>';
}

add_action( 'wpshout_after_get_qod_text', 'wpshout_add_carl_boom' );
function wpshout_add_carl_boom() {

	echo '<div><img class="aligncenter" src="' . plugin_dir_url( __FILE__ ) . 'carl_sagan_mind_blown.gif"></div>';
}