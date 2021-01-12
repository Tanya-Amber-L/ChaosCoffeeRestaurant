<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <a class="title" href="<?= home_url( '/' ); ?>">Chaos Coffee Restaurant</a>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'main',
            'container' => 'ul', // afin d'éviter d'avoir une div autour
            'menu_class' => 'site__header__menu', // ma classe personnalisée
        )
    );
    ?>
</header>