<?php
function wp_register_assets()
{
    wp_register_style('style-wp', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style-wp');


    wp_register_script('script-wp', get_template_directory_uri() . '/script.js');
    wp_enqueue_script('script-wp');

    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('wp-block-library'); // Wordpress Core
    wp_dequeue_style('wp-block-library-theme'); // Wordpress Core
    wp_dequeue_style('wc-block-style'); // WooCommerce
    wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme

}

add_action('wp_enqueue_scripts', 'wp_register_assets');


function wp_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus(array(
        'header' => 'En-tête du menu',
        'footer' => 'Pied de page'
    ));
}

add_action('after_setup_theme', 'wp_supports');


function wp_title_separator()
{
    return '-';
}

add_filter('document_title_separator', 'wp_title_separator');

function wp_excerpt_length()
{
    return 15;
}
add_filter('excerpt_length', 'wp_excerpt_length');

function new_excerpt_more($more)
{
    global $post;
    return '<a class="moretag" 
    href="' . get_permalink($post->ID) . '"> - Read more > </a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function biens_register_post_types()
{

    $labels = array(
        'name' => 'biens',
        'all_items' => 'Tous les biens',  // affiché dans le sous menu
        'singular_name' => 'bien',
        'add_new_item' => 'Ajouter un bien',
        'edit_item' => 'Modifier le bien',
        'menu_name' => 'Biens'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 3,
        'menu_icon' => 'dashicons-building',
        'thumbnail' => true,
    );

    register_post_type('biens', $args);
}


add_action('init', 'biens_register_post_types');
