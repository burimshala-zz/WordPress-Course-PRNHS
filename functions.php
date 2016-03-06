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
    wp_enqueue_style("acme-twitter-bootstrap", $themeDirectory . "/assets/css/bootstrap.min.css", false);
    wp_enqueue_style("default_style", get_stylesheet_uri(), false);
    wp_enqueue_style('twitter-bootstrap-responsive', $themeDirectory . "/assets/css/bootstrap-responsive.min.css", false);
    wp_enqueue_style('font-awesome', $themeDirectory . "/assets/css/font-awesome.min.css", false);
    wp_enqueue_style('hstheme-main', $themeDirectory . "/assets/css/main.css", false);
    wp_enqueue_style('hstheme-slides', $themeDirectory . "/assets/css/sl-slide.css", false);

    /*
     * Load Javascript
     * */
    wp_enqueue_script('jquery');
    wp_enqueue_script('comment-reply');
    wp_enqueue_script('twitter-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js", null, "1.0", true);
    wp_enqueue_script("modernizr", $themeDirectory . "/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js", null, "1.0", true);
    wp_enqueue_script("hstheme-main", $themeDirectory . "/assets/js/main.js", null, "1.0", true);
    wp_enqueue_script("hstheme-ba-cond", $themeDirectory . "/assets/js/jquery.ba-cond.min.js", null, "1.0", true);
    wp_enqueue_script("hstheme-slitslider", $themeDirectory . "/assets/js/jquery.slitslider.js", null, "1.0", true);
}

/*
 * Register sidebars
 * */
function acmee_sidebar_widgets_init(){
    register_sidebar( array(
        'name' => __('Footer' , "acmee"),
        'id' => 'footer',
        'description' => __( 'Footer' ,"acmee" ),
        'before_widget' => '<div id="%1$s" class="span3">',
        'after_widget' => "</div>",
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __('Sidebar' , "acmee"),
        'id' => 'sidebar',
        'description' => __( 'Sidebar' ,"acmee" ),
        'before_widget' => '<div id="%1$s" class="span3">',
        'after_widget' => "</div>",
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
}

add_action( 'widgets_init', 'acmee_sidebar_widgets_init' );

/*
 * Register option menu pages
 * */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Main',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'main',
        'capability'	=> 'manage_options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Main Settings',
        'menu_title'	=> 'Main Settings',
        'menu_slug' 	=> 'main_settings',
        'parent_slug'	=> 'main',
    ));
}