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
    <div class="content" role="main">
        <div class="post">
            <div class="post-hd post-hd_galleryPane">
                <h1 class="hdg hdg_sm mix-hdg_serif mix-hdg_kerningNarrow">
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="post-meta post-meta_galleryPane">
                <span class="hdg hdg_xxs">
                    <?php echo get_field("gallery_type", false);?>
                </span>
            </div>
            <div class="post-bd">
                <div class="pane" id="js-paneScroller">
                    <div class="pane-stage" id="js-paneScrollerStage">
                        <?php if ($images) : ?>
                            <ul class="pane-stage-imageList">
                            <?php foreach ($images as $image) : ?>
                            <?php
                                $imgSrc             = $image['sizes']['large'];
                                $baseHeight         = $image['sizes']['large-height'];
                                $baseWidth          = $image['sizes']['large-width'];
                                $calculatedHeight   = 450;
                                $calculatedWidth    = ceil(($calculatedHeight * $baseWidth) / $baseHeight);
                            ?>
                                <li>
                                    <img src="<?php echo $imgSrc; ?>" data-imgWidth="<?php echo $calculatedWidth; ?>" data-imgHeight="<?php echo $calculatedHeight; ?>" alt="<?php echo $image['alt']; ?>" height="<?php echo $calculatedHeight; ?>" />
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="post-cta">
                <a class="btn" href="/galleries/">Back to All Galleries</a>
            </div>
        </div>
    </div>
</div>


