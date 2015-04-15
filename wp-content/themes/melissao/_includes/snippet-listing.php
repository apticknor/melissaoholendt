<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */
?>

<div class="tier">
    <div class="wrapper">
        <div class="content" role="main">
            <div class="listing">
            <?php if (have_posts()): ?>
                <div class="listing-hd">
                    <h1 class="isVisuallyHidden">
                        <?php if (is_home()) { echo "Recent Posts"; } ?>
                        <?php if (is_tag()) { echo "Posts tagged with " . single_tag_title('', false); } ?>
                        <?php if (is_category()) { echo "Posts filed under " . single_cat_title('', false); } ?>
                        <?php if (is_search()) { echo "Search Results"; } ?>
                        <?php if (is_author()) { echo get_the_author(); } ?>
                        <?php if (is_date()) {
                            if (is_day()) { $archiveDate = get_the_date('F jS Y'); }
                            elseif (is_month()) { $archiveDate = get_the_date('F Y'); }
                            elseif (is_year()) { $archiveDate = get_the_date('Y'); }
                            else { $archiveDate = "Unknown"; }
                            echo "From " . $archiveDate;
                        } ?>
                    </h1>
                </div>
                <div class="listing-bd">
                    <ol class="vlist">
                    <?php rewind_posts(); while (have_posts()) : the_post(); ?>
                        <li>
                            <div class="post">
                                <div class="post-hd">
                                    <h2 class="hdg hdg_md">
                                        <a href="<?php esc_url(the_permalink()); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                </div>
                                <div class="post-meta">
                                    <div class="hdg hdg_xs">
                                        <?php the_date(); ?>
                                    </div>
                                </div>
                                <div class="post-bd">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    </ol>
                </div>
                <div class="listing-nav">
                    <div class="pagination">
                    <?php
                    $paginate_args = array(
                        'show_all'           => False,
                        'end_size'           => 1,
                        'mid_size'           => 2,
                        'prev_next'          => True,
                        'prev_text'          => __('&laquo; Previous'),
                        'next_text'          => __('Next &raquo;'),
                        'type'               => 'plain',
                        'add_args'           => False,
                        'add_fragment'       => '',
                        'before_page_number' => '',
                        'after_page_number'  => ''
                    );
                    echo paginate_links($paginate_args); ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="listing-bd">
                    <div class="userContent">
                        <?php the_field('text_snippet_error_message', 'option'); ?>
                    </div>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>


