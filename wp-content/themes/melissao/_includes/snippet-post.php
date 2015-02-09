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

    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
        <?php the_title(); ?>
        Posted on <?php the_date(); ?> by <?php the_author_posts_link(); ?>
        <?php if (has_post_thumbnail()) { ?>
    	    <?php the_post_thumbnail(); ?>
        <?php } ?>
        <?php the_content(); ?>
        <?php if ((has_category())) { ?>
            Filed Under: <?php the_category(', '); ?>
        <?php } ?>
        <?php if ( (has_tag()) ) { ?>
            Tagged with: <?php the_tags('',', ',''); ?>
        <?php } ?>
    <?php endwhile; ?>

    </div>
</div>