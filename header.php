<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <h1>Meu Primeiro Tema</h1>

    <?php
       if( has_nav_menu('primary') ){
         wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => 'nav',
            'fallback_cb' => false
         ));
       }
    ?>