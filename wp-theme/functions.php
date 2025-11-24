<?php

function melbourne_electricians_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'melbourne-electricians'),
    ));
}
add_action('after_setup_theme', 'melbourne_electricians_setup');


function melbourne_electricians_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', 'https:
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'melbourne_electricians_scripts');
?> 