<?php
/**
 * Theme Functions file
 * 
 * 
 * @package blogger
 */

// Enqueue Scripts & Styles
if( !function_exists( 'blogger_theme_scripts_setup' ) ) {
    function blogger_theme_scripts_setup() {
        wp_enqueue_style( 'blogger_theme_bootstrap_style', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'blogger_theme_templatemo_style', get_stylesheet_directory_uri() . '/assets/css/templatemo-xtra-blog.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'blogger_theme_fontawesome_style', get_stylesheet_directory_uri() . '/assets/fontawesome/css/all.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'blogger_theme_google_font', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap', array(), '1.0.0', 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'blogger_theme_scripts_setup' );
} 

// Initial Theme Setup
if( !function_exists( 'blogger_theme_setup' ) ) {
    function blogger_theme_setup() {
        
        // Theme Features 
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'menus' );
        add_theme_support( 'widgets' );

        // Register Navigation Menus
        register_nav_menus( array( 
            'primary' => 'Main Menu',
            'secondary' => 'Footer Menu'
        ) );

    }
    add_action( 'after_setup_theme', 'blogger_theme_setup' );
}

if( !function_exists( 'blogger_theme_sidebar_setup' ) ) {
    function blogger_theme_sidebar_setup() {
        // Register Sidebar
        register_sidebar( array(
            'name' => 'Main Sidebar',
            'id' => 'sidebar-1',
            'class' => 'main-sidebar',
            'description' => 'This is our awesome sidebar',
            'before_widget' => '<aside class="sidebar-widget-single">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="sidebar-widget-heading">',
            'after_title' => '</h1>'
        ) );
    }
    add_action( 'widgets_init', 'blogger_theme_sidebar_setup' );
}

?>
