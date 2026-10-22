<?php
function custom_blog_setup() {
        add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
        register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'custom-blog' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_blog_setup' );

function custom_blog_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), time() );
}
add_action( 'wp_enqueue_scripts', 'custom_blog_scripts' );

// Mendaftarkan Sidebar Pendukung
function custom_blog_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Utama', 'custom-blog' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Area widget untuk komponen pendukung', 'custom-blog' ),
        'before_widget' => '<div class="widget-item" style="margin-bottom: 20px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 style="border-bottom:2px solid #3498db; padding-bottom:5px; margin-top:0;">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'custom_blog_widgets_init' );
