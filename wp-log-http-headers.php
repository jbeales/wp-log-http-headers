<?php

/*
Plugin Name: Wp Log Http Headers
Plugin URI: http://johnbeales.com
Description: Logs all HTTP headers to a text file for debugging purposes.
Version: 1.0
Author: John Beales
Author URI: http://johnbeales.com
License: GPL2

@requires PHP5.4
*/



function httplogger_log() {

	$tolog = "\n=========================================================================\n";
	$tolog .= "=========================================================================\n";
	$tolog .= 'Logged at: ' . date( DATE_RFC850 ) . "\n";

	ob_start();
	var_dump( $_SERVER );


	$tolog .= "=========================================================================\n";
	$tolog .= ob_get_clean();

	file_put_contents( WP_CONTENT_DIR . '/headers.log', $tolog, FILE_APPEND );

}
add_action( 'plugins_loaded', 'httplogger_log' );