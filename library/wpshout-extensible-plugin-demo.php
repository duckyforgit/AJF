<?php

/*
Plugin Name: WPShout Extensible Plugin Demo
Description: To Demonstrate do_action and apply_filters
Author: WPShout
Author URI: http://wpshout.com/
*/

add_shortcode( 'non_extensible_plugin_demo', 'wpshout_output_nonextensible_plugin' );
function wpshout_output_nonextensible_plugin() {
	ob_start();

	$qod_data = wpshout_get_qod_data();
	if( is_array( $qod_data ) ) {
		echo '<blockquote><small>';
		echo $qod_data[ 'text' ];
		echo '<br><br>';
		echo $qod_data[ 'author' ];
		echo '</small></blockquote>';
	}

	return ob_get_clean();

}

add_shortcode( 'extensible_plugin_demo', 'wpshout_output_extensible_plugin' );
function wpshout_output_extensible_plugin() {
	ob_start();

	// Action hook before any output!
	do_action( 'wpshout_before_get_qod_text' );

	$qod_data = wpshout_get_qod_data();
	if( is_array( $qod_data ) ) {
		echo '<blockquote>';

		$qod_text = $qod_data[ 'text' ];
		$qod_author = $qod_data[ 'author' ];

		// Filter content!
		$qod_text = apply_filters( 'wpshout_qod_text', $qod_text );
		$qod_author = apply_filters( 'wpshout_qod_author', $qod_author );
		
		echo $qod_text;
		echo '<br><br>';
		echo $qod_author;
		echo '</blockquote>';
	}

	// Action hook after rest of output!
	do_action( 'wpshout_after_get_qod_text' );

	return ob_get_clean();
}


function wpshout_get_qod_data() {
	$qod = get_transient( 'wpshout_qod' );

	if( $qod !== false && is_array( $qod ) ) {
		$qod_text = $qod['text'];
		$qod_author = $qod['author'];

		$qod_data = array( 'text' => $qod_text, 'author' => $qod_author );

		return $qod_data;
	} 

	$url = 'http://quotes.rest/qod.json?category=life';
	$response = wp_remote_get( esc_url_raw( $url ) );

	if( is_wp_error( $response ) ) {
		return 'Error retrieving quote!';
	}

	$api_response = json_decode( wp_remote_retrieve_body( $response ), true );

	$qod_text = $api_response['contents']['quotes'][0]['quote'];
	if( ! isset( $qod_text ) || $qod_text === '' ) {
		return 'Error retrieving quote!';
	}

	$qod_author = $api_response['contents']['quotes'][0]['author'];
	if( ! isset( $qod_text ) || $qod_text === '' ) {
		return 'Error retrieving quote!';
	}

	$qod_data = array( 'text' => $qod_text, 'author' => $qod_author );

	set_transient( 'wpshout_qod', $qod_data, 86400);

	return $qod_data;
}