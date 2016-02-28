<?php

/*
 * Theme supports
 * */
add_action('after_setup_theme', 'umbrella_theme_setup');
function umbrella_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
}

/*
 * Register menus
 * */
add_action('init', 'um_register_menus');
function um_register_menus()
{
    register_nav_menus(
        array(
            'main_menu' => __('Main Menu', "acme"),
            'mobile_menu' => __('Mobile Menu', "acme"),
        )
    );
}

/*
 * Load Javascript and css
 * */
add_action('wp_head', 'acmee_enqueue_scripts_ands_styles');
function acmee_enqueue_scripts_ands_styles()
{

    $themeDirectory = get_template_directory_uri();

    /*
     * Load CSS
     * */
    wp_enqueue_style("acme-twitter-bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css", false);
    wp_enqueue_style("default_style", get_stylesheet_uri(), false);

    /*
     * Load Javascript
     * */
    wp_enqueue_script('jquery');
    wp_enqueue_script('comment-reply');
    wp_enqueue_script('twitter-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js", null, "1.0", true);
}