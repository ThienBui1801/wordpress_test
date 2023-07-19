<?php

require_once(get_template_directory() . '/post-type/brand.php');
require_once(get_template_directory() . '/post-type/promotion.php');

define('THEME_URL', get_stylesheet_directory());

add_theme_support('post-thumbnails');
add_post_type_support('brands', 'thumbnails');
add_post_type_support('promotions', 'thumbnails');

function add_css()
{
    // wp_enqueue_style('bootstrap', get_template_directory_uri() . '/static/css/bootstrap.min.css', 'all');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/static/css/fontawesome.min.css', 'all');
    wp_enqueue_style('splide-css', get_template_directory_uri() . '/static/css/splide-core.min.css', 'all');
    wp_enqueue_style('base-style', get_template_directory_uri() . '/static/css/base.css', 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/static/css/style.css', 'all');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_scripts()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/static/js/jquery.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bootstrap', get_template_directory_uri() . '/static/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/static/js/fontawesome.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('splide-js', get_template_directory_uri() . '/static/js/splide.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/static/js/app.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/static/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_scripts');

function my_custom_scripts()
{
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/static/js/search.js', array('jquery'));

    $custom_data = array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
    );
    wp_localize_script('my-custom-script', 'wpAjax', $custom_data);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');

function register_my_menu()
{
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('init', 'register_my_menu');
