<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'menu');

function menu(){
    register_nav_menu('top', 'top menu');
    register_nav_menu('topMob', 'mob menu');
    add_theme_support('post-thumbnails', array ('post'));
}

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/main.css');
}

function scripts_theme() {
    // wp_enqueue_script('script', get_stylesheet_uri());
    wp_enqueue_script('mainscript', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('slickslider', get_template_directory_uri() . '/assets/js/slick.min.js');
    
}

?>

