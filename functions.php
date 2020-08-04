<?php

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri());
    wp_enqueue_script( 'jsvascript', get_template_directory_uri() . '/javascript/main.js', array(), '1.0.0', true );
    wp_enqueue_style( 'style-1', get_template_directory_uri() . '/css/main-style.css');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function cc_mime_types($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');