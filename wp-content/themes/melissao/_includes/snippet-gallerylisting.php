<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */

 $images = get_field('gallery_images');

?>

<div class="tier">
    <div class="wrapper">
        <div class="content" role="main">
            <div class="listing">
                <div class="listing-hd">
                    <h1 class="isVisuallyHidden">Galleries</h1>
                </div>
                <?php if (have_posts()): ?>
                    <div class="listing-bd">
                        <ul class="gallery">
                        <?php rewind_posts(); while (have_posts()) : the_post(); ?>
                            <li>
                                <div class="tile">
                                    <div class="tile-media">
                                        <a href="<?php esc_url(the_permalink()); ?>">
                                            <?php
                                                $image_id = get_post_thumbnail_id();
                                                $image_url = wp_get_attachment_image_src($image_id, 'medium', true);
                                            ?>
                                            <img src="<?php echo $image_url[0]; ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="tile-hd">
                                        <h2 class="hdg hdg_sm mix-hdg_serif mix-hdg_kerningNarrow">
                                            <a href="<?php esc_url(the_permalink()); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="tile-ft">
                                        <span class="hdg hdg_xxs">
                                            <?php echo get_field("gallery_type", false);?>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="listing-bd">
                        <div class="userContent">
                            <?php the_field('text_snippet_error_message', 'option'); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>