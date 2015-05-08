<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */
?>

<div class="tier">
    <div class="content" role="main">
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
