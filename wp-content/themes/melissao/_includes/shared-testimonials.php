<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */

?>

<ul class="vlist">
<?php while ( have_rows('testimonial') ) : the_row(); ?>
<?php
    $image = get_sub_field('testimonial_image');
    $imageLocation = get_sub_field('testimonial_image_location');
?>
    <li>
        <div class="note">
            <div class="note-img <?php if ($imageLocation == "Right") { echo "note-img_flip"; } ?>">
                <img src="<?php echo $image['sizes']['medium']; ?>" alt="" />
            </div>
            <div class="note-bd">
                <div class="post">
                    <div class="post-hd">
                        <h2 class="hdg hdg_md"><?php the_sub_field('testimonial_title'); ?></h2>
                    </div>
                    <div class="post-bd">
                        <div class="userContent">
                            <?php the_sub_field('testimonial_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
<?php endwhile; ?>
</ul>
