<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */
?>

<div class="tier">
    <div class="content content_isPushed" role="main">
        <?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <div class="post-hd">
                    <h1 class="isVisuallyHidden">Featured Photos</h1>
                </div>
                <div class="post-bd">
                    <?php get_template_part('_includes/shared', 'gallery'); ?>
                </div>
                <?php if($post->post_content != "") : ?>
                    <div class="post-details">
                        <div class="wrapper">
                            <div class="userContent">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<div class="tier">
    <div class="wrapper">
        <div class="content content_isPushed" role="complementary">
            <div class="pods">
                <?php while ( have_rows('ctas') ) : the_row(); ?>
                <?php
                    $image = get_sub_field('ctas_image');
                ?>
                <div class="pods-unit">
                    <a href="<?php the_sub_field('ctas_link'); ?>">
                        <div class="cta" style="background-image: url(<?php echo $image['sizes']['medium']; ?>);">
                            <div class="cta-inner">
                                <div class="cta-inner-txt">
                                    <span class="hdg hdg_xxs"><?php the_sub_field('ctas_text'); ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
