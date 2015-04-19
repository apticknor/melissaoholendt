<?php

/* ====================================================================================================
 Theme Support Configuration
==================================================================================================== */
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('menus');
add_theme_support('title-tag');

remove_theme_support('post-formats');
remove_theme_support('custom-background');
remove_theme_support('custom-header');
remove_theme_support('html5');

/* ====================================================================================================
 Enqueue Scripts and Styles
==================================================================================================== */
function melissao_scripts() {

    wp_enqueue_style(
        'melissao-style',
        get_template_directory_uri() . '/_assets/styles/global.css'
    );

    wp_enqueue_script(
        'melissao-script',
        get_template_directory_uri() . '/_assets/scripts/global.js',
        array('jquery'),
        '',
        true
    );
}

add_action('wp_enqueue_scripts', 'melissao_scripts');

/* ====================================================================================================
 Customize Admin Panel
==================================================================================================== */
function hide_admin_pages(){
    global $submenu;
    unset($submenu['themes.php'][6]); // remove customize link
    remove_action('admin_menu', '_add_themes_utility_last', 101); // remove theme editor link
}
add_action( 'admin_menu', 'hide_admin_pages');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ($existing_mimes=array()) {
	// add the file extension to the array
	$existing_mimes['svg'] = 'mime/type';
    // call the modified list of extensions
	return $existing_mimes;
}

/* ====================================================================================================
 Custom Post Type - Galleries
==================================================================================================== */
add_action('init', 'create_post_type_galleries');

function create_post_type_galleries() {
    register_post_type('melissao_galleries',
        array(
            'labels' => array(
                'name' => __('Galleries'),
                'singular_name' => __('Gallery'),
                'all_items' => __('All Galleries'),
                'add_new_item' => __('Add New Gallery'),
                'edit_item' => __('Edit Gallery'),
                'new_item' => __('New Gallery'),
                'view_item' => __('View Gallery'),
                'search_items' => __('Search Galleries'),
                'not_found' => __('No Galleries Found'),
                'not_found_in_trash' => __('No Galleries Found in Trash'),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-images-alt2',
            'rewrite' => array(
                'slug' => 'galleries'
            ),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail')
        )
    );
}

/* ====================================================================================================
 Custom Functions
==================================================================================================== */
/**
 * include aq_resizer for on the fly image adjustments
 */
require_once('aq_resizer.php');

/**
 * Find the first image in a post.
 *
 * @return image URL
 */
function the_first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    return $first_img;
}

/**
 * modify the_excerpt appended text
 */
 function new_excerpt_more($more) {
	return ' &hellip; <a class="read-more" href="'. get_permalink(get_the_ID()) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/**
 * modify the_excerpt length
 */
function custom_excerpt_length($length) {
	return 80;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);