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
    <?php $pageImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
        <div class="section">
            <div class="section-hd">
                <h1 class="isVisuallyHidden"><?php the_title(); ?></h1>
            </div>
            <?php if (has_post_thumbnail()) { ?>
            <div class="section-media">
                <img src="<?php echo $pageImage[0]; ?>" alt="" />
            </div>
            <?php } ?>
            <div class="section-bd">
                <div class="userContent">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php if( have_rows('faq') ): ?>
            <div class="section-ancillary">
                <?php while ( have_rows('faq') ) : the_row(); ?>
                <div class="faq">
                    <div class="faq-question">
                        <?php the_sub_field('faq_question'); ?>
                    </div>
                    <div class="faq-answer">
                        <div class="userContent">
                            <?php the_sub_field('faq_answer'); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>

    </div>
</div>