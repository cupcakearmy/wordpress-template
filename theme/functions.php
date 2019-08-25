<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5');

add_filter( 'wp_headers', function ( $headers ) {
	$headers['Content-Security-Policy']   = "default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; report-uri csp@nicco.io";
	$headers['X-Content-Type-Options']    = 'nosniff';
	$headers['X-Frame-Options']           = "deny";
	$headers['Strict-Transport-Security'] = "max-age=31536000";
	$headers['Referrer-Policy']           = "origin";

	// Enable in for production
	// return $headers;
} );

add_action( 'wp_enqueue_scripts', function () {
	// JS
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/dist/js/index.js' );

	// CSS
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/dist/styles/index.css' );
} );