<?php

function themename_load_admin_scripts(){
    wp_enqueue_style( 'themename_admin', get_template_directory_uri() . '/assets/css/theme.admin.css');
    wp_enqueue_script("themename_adminscript", get_template_directory_uri().'/assets/js/theme.admin.js');
}
add_action( 'admin_enqueue_scripts', 'themename_load_admin_scripts' );

function themename_load_scripts(){

}

add_action( 'wp_enqueue_scripts', 'themename_load_scripts' );