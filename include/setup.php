<?php

/**
 * ADD OS TEMAS E SCRIPTS DO THEME
 */
function rp_theme_styles(){
    wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/assets/js/script.js',
    array('jquery'), '', true );
}

/**
 * ADD OS MENUS
 */
function rp_after_setup(){
    //ADD O SUPORTE DE MENU AO TEMA PARA VERSOES ANTIGAS
    add_theme_support('menus');

    add_theme_support('post-thumbnails');//ADD SUPORTE PARA IMAGENS

    register_nav_menu('primary', __('Primary Menu','Primeiro Tema'));
}

/**
 * ADD OS WIDGETS
 */
function rp_widgets(){
    register_sidebar(array(
        'name' => __('Meu Primeiro Sidebar', 'Primeiro Tema'),
        'id' => 'rp_sidebar',
        'description' => __('Sidebar para o primeiro tema', 'Primeiro Tema'),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
        'before_widget' => '',
        'after_widget' => '',
    ));
}