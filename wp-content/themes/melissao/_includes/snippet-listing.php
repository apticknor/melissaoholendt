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
            <div class="grid">
                <div class="grid-col grid-col_main">
                    <div class="listing">
                    <?php if (have_posts()): ?>
                        <div class="listing-hd listing-hd_isMuted">
                            <h1 class="hdg hdg_sm mix-hdg_serif mix-hdg_kerningNarrow">
                                Blog
                                <span class="isVisuallyHidden">:
                                <?php if (is_home()) { echo "Archive"; } ?>
                                <?php if (is_tag()) { echo "Posts tagged with " . single_tag_title('', false); } ?>
                                <?php if (is_category()) { echo "Posts filed under " . single_cat_title('', false); } ?>
                                <?php if (is_author()) { echo "Authored by " . get_the_author(); } ?>
                                <?php if (is_date()) {
                                    if (is_day()) { $archiveDate = get_the_date('F jS Y'); }
                                    elseif (is_month()) { $archiveDate = get_the_date('F Y'); }
                                    elseif (is_year()) { $archiveDate = get_the_date('Y'); }
                                    else { $archiveDate = "Unknown"; }
                                    echo "Posts from " . $archiveDate;
                                } ?>
                                </span>
                            </h1>
                        </div>
                        <div class="listing-bd">
                            <ol class="vlist">
                            <?php rewind_posts(); while (have_posts()) : the_post(); ?>
                                <li>
                                    <div class="post">
                                        <?php if (aq_resize(the_first_image(), '800')) { ?>
                                        <div class="post-media">
                                            <a href="<?php esc_url(the_permalink()); ?>">
                                                <img src="<?php echo aq_resize(the_first_image(), '800'); ?>" alt="" />
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <div class="post-hd">
                                            <h2 class="hdg hdg_md">
                                                <a href="<?php esc_url(the_permalink()); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="post-meta">
                                            <div class="hdg hdg_xs mix-hdg_kerningNarrow">
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
                    <?php else: ?>
                        <div class="listing-bd">
                            <div class="userContent">
                                <?php the_field('text_snippet_error_message', 'option'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                        <div class="listing-nav">
                            <div class="pagination">
                                <?php get_template_part('_includes/shared', 'pagination'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-col grid-col_sub">
                    <?php get_template_part('_includes/shared', 'widgets'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


