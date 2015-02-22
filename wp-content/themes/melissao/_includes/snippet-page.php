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

    <?php while (have_posts()) : the_post(); ?>
        <div class="section">
            <div class="section-hd">
                <h1 class="isVisuallyHidden"><?php the_title(); ?></h1>
            </div>
            <?php if (has_post_thumbnail()) { ?>
            <div class="section-media">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="" />
            </div>
            <?php } ?>
            <div class="section-bd">
                <div class="userContent">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

    </div>
</div>