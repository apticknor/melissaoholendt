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

    <?php if (have_posts()): ?>
        <h1>
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

        <?php if (is_author()) { // show different content for the author page ?>

            <?php echo get_avatar(get_the_author_meta('ID')); ?>
            <?php the_author_description(); ?>

        <?php } else { // show default content for other pages ?>

            <ol>
            <?php rewind_posts(); while (have_posts()) : the_post(); ?>
                <li>
                <?php if (has_post_thumbnail()) { ?>
                    <a href="<?php esc_url(the_permalink()); ?>">
                        <?php the_post_thumbnail('full'); ?>
                    </a>
                <?php } ?>
                    <a href="<?php esc_url(the_permalink()); ?>">
                        <?php the_title(); ?>
                    </a>
                    <?php the_excerpt(); ?>
                    Posted in <?php the_category(', '); ?> on <?php the_date() ?> by <?php the_author_posts_link() ?>.
            <?php endwhile; ?>
            </ol>

        <?php } // end author fork ?>

    <?php else: ?>
        <?php the_field('text_snippet_error_message', 'option'); ?>
    <?php endif; ?>

    </div>
</div>


