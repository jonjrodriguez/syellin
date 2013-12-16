<?php

// Start the engine
include_once( get_template_directory() . '/lib/init.php' );

// Add HTML5 markup structure
add_theme_support( 'html5' );

// Enable support for Post Formats.
add_theme_support( 'post-formats', array(
	'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
) );

// Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );