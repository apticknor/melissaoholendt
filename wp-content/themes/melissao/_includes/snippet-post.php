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
                    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                    <div class="post">
                        <div class="post-hd post-hd_isMuted">
                            <h1 class="hdg hdg_sm mix-hdg_serif mix-hdg_kerningNarrow">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                        <div class="post-meta post-meta_isMuted">
                            <div class="hdg hdg_xxs">
                                <?php the_date(); ?>
                            </div>
                        </div>
                        <div class="post-bd">
                            <div class="userContent">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="post-ft">
                            <?php comments_template(); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="grid-col grid-col_sub">
                    <?php get_template_part('_includes/shared', 'widgets'); ?>
                </div>
            </div>
        </div>
    </div>
</div>