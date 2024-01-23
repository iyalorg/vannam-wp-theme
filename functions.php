<?php

function vannam_files()
{
    wp_enqueue_style("remix-icons", "https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css");
    wp_enqueue_style("main_css", get_template_directory_uri() . "/assets/css/style.css");
    wp_enqueue_script("main_js", get_template_directory_uri() . "/assets/js/main.js");
}

function vannam_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(300, 200, true);
}

function vannam_remove_img_attr($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

function vannam_register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu-1' => __('Footer Menu 1'),
            'footer-menu-2' => __('Footer Menu 2'),
            'footer-menu-3' => __('Footer Menu 3')
        )
    );
}

add_filter('post_thumbnail_html', 'vannam_remove_img_attr');

add_action('wp_enqueue_scripts', 'vannam_files');

add_action('after_setup_theme', 'vannam_features');

add_action('init', 'vannam_register_menus');
