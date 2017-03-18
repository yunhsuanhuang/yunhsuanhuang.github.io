
<?php
//Enqueue Stylesheet and Scripts
function portfoliotheme_scripts() {
	wp_enqueue_style( 'portfoliotheme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'portfoliotheme-jquery', get_template_directory_uri() . '/js/jquery.js');
	wp_enqueue_script( 'portfoliotheme-bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
	wp_enqueue_script( 'portfoliotheme-bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'portfoliotheme-navshrink.', get_template_directory_uri() . '/js/navshrink.js');
}
add_action( 'wp_enqueue_scripts', 'portfoliotheme_scripts' );
