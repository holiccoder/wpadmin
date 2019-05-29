<?php

function themename_add_admin_page(){
    //插入主题设置连接和页面
    add_menu_page( 'themename', 'themename', 'manage_options', 'themename_options', 'themename_theme_create_page', get_template_directory_uri() . '/assets/img/sunset-icon.png', 50 );
}

add_action( 'admin_menu', 'themename_add_admin_page' );

function themename_theme_create_page(){
    require_once(get_template_directory()."/inc/templates/settings.php");
}