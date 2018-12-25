<?php 

//INCLUINDO AS FUNÇÕES
require get_template_directory() . '/include/setup.php';

//INVOCANDO AS FUNÇÕES
add_action('wp_enqueue_scripts','rp_theme_styles');//STYLES E SCRIPTS
add_action('after_setup_theme','rp_after_setup');//ADD MENUS
add_action('widgets_init','rp_widgets');//SIDEBAR