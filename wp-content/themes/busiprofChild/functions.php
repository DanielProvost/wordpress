<?php
/**
 ** activation theme
 **/
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
/*
$current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() );
var_dump($current_options );*/
