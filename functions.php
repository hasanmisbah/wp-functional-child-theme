<?php

// loading custom required Module for Selected Site
	require 'src/php/editor-note.php';
	require 'src/php/auto-post-thumbnail.php';
	require 'src/php/functions.php';



function child_loader() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style('child-style' , get_stylesheet_uri());
   wp_enqueue_style('child-style-main' , get_stylesheet_directory_uri().'/src/css/child.css');
}

add_action( 'wp_enqueue_scripts', 'child_loader' );
?>