<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */

 $images = get_field('gallery_images');

?>

<div class="tier">
    <div class="content" role="main">
        <div class="post">
            <div class="post-hd post-hd_galleryPane">
                <div class="wrapper">
                    <h1 class="hdg hdg_sm mix-hdg_serif mix-hdg_kerningNarrow">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
            <div class="post-meta post-meta_galleryPane">
                <div class="wrapper">
                    <span class="hdg hdg_xxs">
                        <?php echo get_field("gallery_type", false);?>
                    </span>
                </div>
            </div>
            <div class="post-bd">
                <?php get_template_part('_includes/shared', 'gallery'); ?>
            </div>
            <div class="post-cta">
                <?php // next and prev labels are reverse due to display on site - most recent is first. so next is actually previous ?>
                <?php next_post_link('%link', '&laquo; Previous'); ?>
                <?php previous_post_link('%link', 'Next &raquo;'); ?>
            </div>
        </div>
    </div>
</div>


