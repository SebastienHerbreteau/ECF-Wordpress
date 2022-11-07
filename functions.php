<?php
function wp_register_assets()
{
    wp_register_style('style-wp', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style-wp');


    wp_register_script('script-wp', get_template_directory_uri() . '/script.js');
    wp_enqueue_script('script-wp');

    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}

add_action('wp_enqueue_scripts', 'wp_register_assets');


function wp_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus(array(
        'menu-header' => 'En-tête du menu',
        'menu-footer' => 'Pied de page'
    ));
}

add_action('after_setup_theme', 'wp_supports');


function wp_title_separator()
{
    return '-';
}

add_filter('document_title_separator', 'wp_title_separator');
