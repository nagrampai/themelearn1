<?php  

// Add theme support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );

// Enqueue styles

function themelearn1_enqueue_styles() {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );

}

add_action( 'wp_enqueue_scripts', 'themelearn1_enqueue_styles' );

// Enqueue JS

function themelearn1_enqueue_scripts() {
    wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js' , [], time(), true );
}
add_action( 'wp_enqueue_scripts', 'themelearn1_enqueue_scripts' );

// Register menus

register_nav_menus( array(
    'primary_menu'  => 'Primary Menu',
    'social_menu'   => 'Social Menu',
    'footer_menu'   => 'Footer Menu',
) );

// Register Sidebars
function themelearn1_widgets_init () {
    register_sidebar( [
        'name'          => esc_html__( 'Main Sidebar', 'themelearn1' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html__( 'Add widgets for main sidebar here', 'themelearn1' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',     
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ] );

    register_sidebar( [
        'name'          => esc_html__( 'Page Sidebar', 'themelearn1' ),
        'id'            => 'page-sidebar',
        'description'   => esc_html__( 'Add widgets for page sidebar here', 'themelearn1' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',   
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',  
    ] );

    register_sidebar( [
        'name'          => esc_html__( 'Front Sidebar', 'themelearn1' ),
        'id'            => 'front-page',
        'description'   => esc_html__( 'Add widgets for Front page sidebar here', 'themelearn1' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',   
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',  
    ] );
}
add_action( 'widgets_init', 'themelearn1_widgets_init' );

?>