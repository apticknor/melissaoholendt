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
        <?php while (have_posts()) : the_post(); ?>
        <?php $pageImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
            <div class="section">
                <div class="section-hd section-hd_isMuted">
                    <h1 class="hdg hdg_sm mix-hdg_serif mix-hdg_kerningNarrow"><?php the_title(); ?></h1>
                </div>
                <?php
                    if (has_post_thumbnail()) {

                        $featuredImgLocationClass = "";

                        if (get_field('featured_image_location') == "left") {
                            $featuredImgLocationClass = "section-media_left";
                        }

                        if (get_field('featured_image_location') == "right") {
                            $featuredImgLocationClass = "section-media_right";
                        }
                ?>
                <div class="section-media <?php echo $featuredImgLocationClass; ?>">
                    <img src="<?php echo $pageImage[0]; ?>" alt="" />
                </div>
                <?php } ?>
                <div class="section-bd">
                    <div class="userContent">
                        <?php the_content(); ?>
                    </div>
                </div>

                <?php if( have_rows('press') ): ?>
                    <?php if (get_post()->post_content): ?>
                    <div class="section-separator">
                         <svg version="1.1" id="heart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="128px" height="128px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
                            <path fill="#fab7a9" d="M90.38,20.11c-11.87,0-22.04,6.52-26.38,16.07c-4.34-9.55-14.51-16.07-26.38-16.07
    	C21.84,20.11,9,31.94,9,46.48C9,66.7,23.86,76.31,38.22,85.59c9.1,5.88,18.5,11.96,23.66,20.66c0.05,0.2,0.12,0.39,0.23,0.57
    	c0.38,0.65,1.08,1.06,1.84,1.06h0.1c0.76,0,1.44-0.45,1.82-1.11c0.07-0.12,0.13-0.25,0.17-0.38c5.14-8.78,14.59-14.89,23.74-20.8
    	C104.14,76.31,119,66.7,119,46.48C119,31.94,106.16,20.11,90.38,20.11z"/>
    </svg>
                    </div>
                    <?php endif; ?>
                <div class="section-notes">
                    <?php get_template_part('_includes/shared', 'press'); ?>
                </div>
                <?php endif; ?>

                <?php if( have_rows('testimonial') ): ?>
                    <?php if (get_post()->post_content): ?>
                    <div class="section-separator">
                         <svg version="1.1" id="heart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="128px" height="128px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
                            <path fill="#fab7a9" d="M90.38,20.11c-11.87,0-22.04,6.52-26.38,16.07c-4.34-9.55-14.51-16.07-26.38-16.07
    	C21.84,20.11,9,31.94,9,46.48C9,66.7,23.86,76.31,38.22,85.59c9.1,5.88,18.5,11.96,23.66,20.66c0.05,0.2,0.12,0.39,0.23,0.57
    	c0.38,0.65,1.08,1.06,1.84,1.06h0.1c0.76,0,1.44-0.45,1.82-1.11c0.07-0.12,0.13-0.25,0.17-0.38c5.14-8.78,14.59-14.89,23.74-20.8
    	C104.14,76.31,119,66.7,119,46.48C119,31.94,106.16,20.11,90.38,20.11z"/>
    </svg>
                    </div>
                    <?php endif; ?>
                <div class="section-notes">
                    <?php get_template_part('_includes/shared', 'testimonials'); ?>
                </div>
                <?php endif; ?>

                <?php if( have_rows('faq') ): ?>
                <div class="section-separator">
                     <svg version="1.1" id="heart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="128px" height="128px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
                        <path fill="#fab7a9" d="M90.38,20.11c-11.87,0-22.04,6.52-26.38,16.07c-4.34-9.55-14.51-16.07-26.38-16.07
	C21.84,20.11,9,31.94,9,46.48C9,66.7,23.86,76.31,38.22,85.59c9.1,5.88,18.5,11.96,23.66,20.66c0.05,0.2,0.12,0.39,0.23,0.57
	c0.38,0.65,1.08,1.06,1.84,1.06h0.1c0.76,0,1.44-0.45,1.82-1.11c0.07-0.12,0.13-0.25,0.17-0.38c5.14-8.78,14.59-14.89,23.74-20.8
	C104.14,76.31,119,66.7,119,46.48C119,31.94,106.16,20.11,90.38,20.11z"/>
</svg>
                </div>
                <div class="section-ancillary">
                    <?php get_template_part('_includes/shared', 'faq'); ?>
                </div>
                <?php endif; ?>

            </div>
        <?php endwhile; ?>
        </div>
    </div>
</div>