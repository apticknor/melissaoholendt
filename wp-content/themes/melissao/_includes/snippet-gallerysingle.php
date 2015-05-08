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
                <h1 class="hdg hdg_sm mix-hdg_serif mix-hdg_kerningNarrow">
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="post-meta post-meta_galleryPane">
                <span class="hdg hdg_xxs">
                    <?php echo get_field("gallery_type", false);?>
                </span>
            </div>
            <div class="post-bd">
                <?php get_template_part('_includes/shared', 'gallery'); ?>
            </div>
            <div class="post-cta">
                <a class="btn" href="/galleries/">Back to All Galleries</a>
            </div>
        </div>
    </div>
</div>


