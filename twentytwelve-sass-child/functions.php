<?php
/*
 * Enqueue parent & child styles: (Parent before child)
 * More info: https://codex.wordpress.org/Function_Reference/wp_enqueue_style
 */

// Parent stylesheet: use get_template_directory_uri()
function twentytwelve_sass_enqueue_parent() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'twentytwelve_sass_enqueue_parent' );


// Child theme's stylesheet: use get_stylesheet_uri()
function twentytwelve_sass_enqueue_child() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'twentytwelve_sass_enqueue_child', 11 );