<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <!-- META DATA -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <!-- WP HEAD GENERATED -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div class="tier tier_brand">
            <div class="wrapper">
                <div class="masthead" role="banner">
                    <div class="masthead-logo">
                        <a href="<?php echo site_url(); ?>">
                            <?php if(get_field('branding_logo', 'option')): ?>
                            <img src="<?php the_field('branding_logo', 'option'); ?>" alt="<?php bloginfo('name'); ?>" />
                            <?php else: ?>
                                <? bloginfo('name'); ?>
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="masthead-tagline">
                        Weddings & Lifestyle
                    </div>
                </div>
            </div>
        </div>

        <div class="tier">
            <div class="wrapper">
                <div class="nav" role="navigation">
                    <ul class="nav-list">
                    <?php
                        $navPrimaryArgs = array(
                            'theme_location'  => '',
                            'menu'            => '',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '%3$s',
                            'depth'           => 0,
                            'walker'          => ''
                        );

                        wp_nav_menu($navPrimaryArgs);
                    ?>
                    </ul>
                </div>
            </div>
        </div>
