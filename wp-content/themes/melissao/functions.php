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

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/* ====================================================================================================
 Enqueue Scripts and Styles
==================================================================================================== */
function melissao_scripts() {

    wp_enqueue_style(
        'melissao-style',
        get_template_directory_uri() . '/_assets/styles/global.css',
        array(),
        false,
        'all and (min-width: 1em)'
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
            'supports' => array( 'title', 'author', 'thumbnail')
        )
    );
}

// ----------------------- Set the number of a custom post type posts per page
add_filter( 'pre_get_posts', 'be_archive_query' );
// @link http://www.billerickson.net/customize-the-wordpress-query/
function be_archive_query( $query ) {
	if( $query->is_main_query() && $query->is_post_type_archive('melissao_galleries') ) {
		$query->set( 'posts_per_page', 100 );
	}
}

/* ====================================================================================================
 Custom Functions
==================================================================================================== */
/**
 * include aq_resizer for on the fly image adjustments
 */
require_once('aq_resizer.php');

/**
 * add class to prev / next post links
 */
function add_class_next_post_link($html){
    $html = str_replace('<a','<a class="btn"',$html);
    return $html;
}
add_filter('next_post_link','add_class_next_post_link',10,1);

function add_class_previous_post_link($html){
    $html = str_replace('<a','<a class="btn"',$html);
    return $html;
}
add_filter('previous_post_link','add_class_previous_post_link',10,1);

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

/**
 * Outputs Comments Markup Start
 *
 * @return html
 */
function commentStart($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
?>
    <li>
        <div class="comment">
            <div class="comment-media">
                <?php if ($args['avatar_size'] != 0) { ?>
                <div class="comment-media-img">
                    <?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
                </div>
                <?php } ?>
                <div class="comment-media-content">
                    <div class="comment-media-content-hd">


                    </div>
                    <div class="comment-media-content-meta">
                        <?php printf( __('%s'), get_comment_date('F d Y')); ?>
                    </div>
                    <div class="comment-media-content-bd">
                        <?php comment_text(); ?>
                    </div>
                </div>
            </div>
        </div>
    </li>
<?php
}

/**
 * Outputs Comments Markup Start
 *
 * @return html
 */
function commentsStart($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
?>
    <li>
        <div class="comment">
            <div class="comment-media">
                <?php if ($args['avatar_size'] != 0) { ?>
                <div class="comment-media-img">
                    <?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
                </div>
                <?php } ?>
                <div class="comment-media-content">
                    <div class="comment-media-content-hd">
                        <h2 class="hdg hdg_xs">
                        <?php if($comment->comment_author_url != "") { ?>
                            <a href="<?php comment_author_url(); ?>">
                        <?php } ?>
                            <?php printf(__('%s'), get_comment_author()); ?>
                        <?php if($comment->comment_author_url != "") { ?>
                            </a>
                        <?php } ?>
                        </h2>
                    </div>
                    <div class="comment-media-content-meta">
                        <?php printf( __('%s'), get_comment_date('F d Y')); ?>
                    </div>
                    <div class="comment-media-content-bd">
                        <?php comment_text(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php // end of comments list items closed by end-callback -> commentsEnd() ?>
<?php
}

/**
 * Outputs Comments Markup End
 *
 * @return html
 */
function commentsEnd() {
    echo '</li>';
}

/**
 * Disables WPContact Form 7 CSS.
 *
 * @return html
 */
add_filter( 'wpcf7_load_css', '__return_false' );


/**
 * Disables Visual Editor from specific pages.
 *
 * @return html
 */
// removes rich text editor for certain pages
function remove_pages_editor(){
    if(get_the_ID() === 10864) {
        remove_post_type_support( 'page', 'editor' );
    } // end if
} // end remove_pages_editor
add_action( 'add_meta_boxes', 'remove_pages_editor' );