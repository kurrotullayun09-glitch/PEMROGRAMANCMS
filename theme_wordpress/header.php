<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo time(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </header>

    <nav>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'fallback_cb'    => false
        ) );
        ?>
    </nav>

    <div class="container">
