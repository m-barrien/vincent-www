<?php
//update_option( 'siteurl', 'http://192.168.43.213:8080' );
//update_option( 'home', 'http://192.168.43.213:8080' );
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');

// load css into the website's front-end
function mytheme_enqueue_style() {
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );	