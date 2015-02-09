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

        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>

    <?php endwhile; ?>

    </div>
</div>