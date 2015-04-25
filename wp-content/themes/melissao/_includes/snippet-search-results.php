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
                <div class="listing-hd">
                    <h1 class="isVisuallyHidden">
                        <?php if (is_search()) { echo "Search Results"; } ?>
                    </h1>
                </div>
                <?php if (have_posts()): ?>
                    <div class="listing-bd">
                        <ol>
                        <?php rewind_posts(); while (have_posts()) : the_post(); ?>
                            <li>
                                <div>
                                    <div>
                                        <h2 class="hdg hdg_md">
                                            <a href="<?php esc_url(the_permalink()); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                    </div>
                                    <div>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        </ol>
                    </div>
                    <div class="listing-nav">
                        <div class="pagination pagination_isNaturallyCentered">
                            <?php get_template_part('_includes/shared', 'pagination'); ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="listing-bd">
                        <div class="userContent">
                            No Search Results Found
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


