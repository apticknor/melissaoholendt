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
        <div class="section">
            <div class="section-hd">
                <h1 class="isVisuallyHidden"><?php the_title(); ?></h1>
            </div>
            <div class="section-bd">
                <div class="userContent">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

    </div>
</div>