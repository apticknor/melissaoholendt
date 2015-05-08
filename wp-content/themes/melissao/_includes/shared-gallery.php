<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */

 $images = get_field('gallery_images', $post->ID);

?>

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