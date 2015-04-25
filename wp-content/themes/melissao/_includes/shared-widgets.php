<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */
?>

<div class="widgets">
    <div class="widgets-hd">
        <h1 class="hdg hd_xs">Blog Archive</h1>
    </div>
    <div class="widgets-item">
        <div class="widgets-item-hd">
            <h2 class="hdg hdg_xs mix-hdg_kerningWide">Categories</h2>
        </div>
        <div class="widgets-item-bd">
            <ol class="linkList">
            <?php
            $category_args = array(
                'show_option_all'    => '',
                'orderby'            => 'name',
                'order'              => 'ASC',
                'style'              => 'list',
                'show_count'         => 0,
                'hide_empty'         => 1,
                'use_desc_for_title' => 1,
                'child_of'           => 0,
                'feed'               => '',
                'feed_type'          => '',
                'feed_image'         => '',
                'exclude'            => '1',
                'exclude_tree'       => '',
                'include'            => '',
                'hierarchical'       => 1,
                'title_li'           => '',
                'show_option_none'   => __( '' ),
                'number'             => null,
                'echo'               => 1,
                'depth'              => 0,
                'current_category'   => 0,
                'pad_counts'         => 0,
                'taxonomy'           => 'category',
                'walker'             => null
            );
            wp_list_categories($category_args);
            ?>
            </ol>
        </div>
    </div>
    <div class="widgets-item">
        <div class="widgets-item-hd">
            <h2 class="hdg hdg_xs mix-hdg_kerningWide">Recent Posts</h2>
        </div>
        <div class="widgets-item-bd">
            <ol class="linkList">
            <?php
               $posts_args = array(
                   'numberposts' => 10,
                   'offset' => 0,
                   'category' => 0,
                   'orderby' => 'post_date',
                   'order' => 'DESC',
                   'include' => '',
                   'exclude' => '',
                   'meta_key' => '',
                   'meta_value' => '',
                   'post_type' => 'post',
                   'post_status' => 'publish',
                   'suppress_filters' => true
               );
               $recent_posts = wp_get_recent_posts($posts_args);
                   foreach($recent_posts as $recent) {
                       echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a> </li> ';
                   }
            ?>
            </ol>
        </div>
    </div>
</div>


