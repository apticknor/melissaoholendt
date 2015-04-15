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
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
            <?php the_title(); ?>
            Posted on <?php the_date(); ?> by <?php the_author_posts_link(); ?>
            <?php if (has_post_thumbnail()) { ?>
        	    <?php the_post_thumbnail(); ?>
            <?php } ?>
            <div class="userContent">
                <?php the_content(); ?>
            </div>
            <?php if ((has_category())) { ?>
                Filed Under: <?php the_category(', '); ?>
            <?php } ?>
            <?php if ( (has_tag()) ) { ?>
                Tagged with: <?php the_tags('',', ',''); ?>
            <?php } ?>
        <?php endwhile; ?>
        </div>
    </div>
</div>