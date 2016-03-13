<?php

require_once 'framework/aq_resizer.php';

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
    wp_enqueue_style('font-awesome-new-version', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", false);
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
function acmee_sidebar_widgets_init()
{
    register_sidebar(array(
        'name' => __('Footer', "acmee"),
        'id' => 'footer',
        'description' => __('Footer', "acmee"),
        'before_widget' => '<div id="%1$s" class="span3">',
        'after_widget' => "</div>",
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Sidebar', "acmee"),
        'id' => 'sidebar',
        'description' => __('Sidebar', "acmee"),
        'before_widget' => '<div id="%1$s" class="span3">',
        'after_widget' => "</div>",
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'acmee_sidebar_widgets_init');

/*
 * Register option menu pages
 * */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Main',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'main',
        'capability' => 'manage_options',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Main Settings',
        'menu_title' => 'Main Settings',
        'menu_slug' => 'main_settings',
        'parent_slug' => 'main',
    ));
}

/*
 * Utils
 * */
function um_get_post_featured_image_src($post_id = null, $size = "full")
{
    if (!$post_id) {
        global $post;
        $post_id = $post->ID;
    }
    if (has_post_thumbnail($post_id)) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), $size);
        return $image[0];
    } else {
        return "";
    }
}

/*
 * Post types
 * https://generatewp.com/post-type/
 * */
function acmee_custom_post_type()
{

    $labels = array(
        'name' => _x('Portfolios', 'Portfolio General Name', 'acmee'),
        'singular_name' => _x('Portfolio', 'Portfolio Singular Name', 'acmee'),
        'menu_name' => __('Portfolio', 'acmee'),
        'name_admin_bar' => __('Portfolio', 'acmee'),
        'archives' => __('Portfolio Archives', 'acmee'),
        'parent_item_colon' => __('Parent Portfolio:', 'acmee'),
        'all_items' => __('All Portfolios', 'acmee'),
        'add_new_item' => __('Add New Portfolio', 'acmee'),
        'add_new' => __('Add New', 'acmee'),
        'new_item' => __('New Portfolio', 'acmee'),
        'edit_item' => __('Edit Portfolio', 'acmee'),
        'update_item' => __('Update Portfolio', 'acmee'),
        'view_item' => __('View Portfolio', 'acmee'),
        'search_items' => __('Search Portfolio', 'acmee'),
        'not_found' => __('Not found', 'acmee'),
        'not_found_in_trash' => __('Not found in Trash', 'acmee'),
        'featured_image' => __('Featured Image', 'acmee'),
        'set_featured_image' => __('Set featured image', 'acmee'),
        'remove_featured_image' => __('Remove featured image', 'acmee'),
        'use_featured_image' => __('Use as featured image', 'acmee'),
        'insert_into_item' => __('Insert into item', 'acmee'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'acmee'),
        'items_list' => __('Portfolios list', 'acmee'),
        'items_list_navigation' => __('Portfolios list navigation', 'acmee'),
        'filter_items_list' => __('Filter items list', 'acmee'),
    );

    $args = array(
        'label' => __('Portfolio', 'acmee'),
        'description' => __('Portfolio Description', 'acmee'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('portfolio', $args);

}

add_action('init', 'acmee_custom_post_type', 0);

/*
 * Shortcodes
 * */
function acmee_icons_shortcode_handle($atts)
{
    extract(shortcode_atts(array(
        'class' => '',
    ), $atts));

    return '<i class="fa ' . $class . '"></i>';
}

add_shortcode('icon', 'acmee_icons_shortcode_handle');

function acmee_heading_shortcode_handle($atts, $content)
{
    extract(shortcode_atts(array(
        'style' => '',
    ), $atts));

    return "<h1 style='{$style}'>{$content}</h1>";
}

add_shortcode('heading', 'acmee_heading_shortcode_handle');