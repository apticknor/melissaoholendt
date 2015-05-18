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
        <?php while (have_posts()) : the_post(); ?>
        <?php $pageImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
            <div class="section">
                <div class="section-hd section-hd_isMuted">
                    <h1 class="hdg hdg_sm mix-hdg_serif mix-hdg_kerningNarrow"><?php the_title(); ?></h1>
                </div>
                <?php if (get_post()->post_content) { ?>
                <div class="section-bd section-bd_alt">
                    <div class="userContent">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php } ?>
                <div class="section-cta">
                    <div class="form">
                        <?php echo do_shortcode('[contact-form-7 id="10899" title="Contact Form"]'); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</div>