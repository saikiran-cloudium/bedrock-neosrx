<?php
/**
 * Enqueue parent and child theme styles
 */
function astra_child_enqueue_styles() {
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/style.css', array('astra-parent-style'));
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');

// Enqueue mobile sidebar assets
function enqueue_sidebar_assets() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_style('mobile-sidebar-style', get_stylesheet_directory_uri() . '/assets/css/sidebar.css', [], '1.0');
    wp_enqueue_script('mobile-sidebar-script', get_stylesheet_directory_uri() . '/assets/js/sidebar.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_sidebar_assets');

// Register mobile menu location
function register_my_menus() {
    register_nav_menus([
        'mobile-menu' => __('Mobile Menu')
    ]);
}
add_action('after_setup_theme', 'register_my_menus');

// Sidebar shortcode
function load_mobile_sidebar_template() {
    ob_start();
    get_template_part('template-parts/mobile-sidebar');
    return ob_get_clean();
}
add_shortcode('mobile_sidebar_menu', 'load_mobile_sidebar_template'); 
