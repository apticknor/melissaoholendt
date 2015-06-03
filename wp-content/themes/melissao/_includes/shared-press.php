<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */

?>

<ul class="press">
<?php while ( have_rows('press_items') ) : the_row(); ?>
<?php
    $image = get_sub_field('press_items_image');
?>
    <li>
        <div class="tile">
            <?php if ($image) { ?>
            <div class="tile-media">
                <a href="<?php the_sub_field('press_items_link'); ?>">
                    <img src="<?php echo aq_resize($image['sizes']['medium'], 400); ?>" alt="" />
                </a>
            </div>
            <?php } ?>
            <div class="tile-hd">
                <h2 class="hdg hdg_xs mix-hdg_serif mix-hdg_kerningNarrow">
                    <a href="<?php the_sub_field('press_items_link'); ?>">
                        <?php the_sub_field('press_items_title'); ?>
                    </a>
                </h2>
            </div>
            <div class="tile-ft">
                <span class="hdg hdg_xxs">
                    <?php the_sub_field('press_items_date'); ?>
                </span>
            </div>
        </div>
    </li>
<?php endwhile; ?>
</ul>
