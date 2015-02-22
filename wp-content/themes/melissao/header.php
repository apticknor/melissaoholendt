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
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- WP HEAD GENERATED -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div class="tier">
            <div class="wrapper">
                <div class="masthead" role="banner">
                    <div class="masthead-logo">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php bloginfo('template_directory'); ?>/_assets/media/images/logo.jpg" alt="<?php bloginfo('name'); ?>" />
                        </a>
                    </div>
                    <div class="masthead-nav">
                        <div class="nav" role="navigation">
                            <ul class="nav-list">
                                <?php
                                    $nav_items = wp_get_nav_menu_items(21);
                                    foreach ((array)$nav_items as $key => $nav_item ) {
                                        $title = $nav_item->title;
                                        $url = $nav_item->url;
                                ?>
                                <li><a href="<?php echo $url ?>"><?php echo $title ?></a></li>
                                <?php } ?>
                            </ul>
<!--
                            <ul class="nav-social">
                                <?php if(get_field('facebook_link', 'option')): ?>
                                <li class="nav-list-item-subnav-item">
                                    <a href="<?php the_field('facebook_link', 'option'); ?>">
                                        <img src="<?php bloginfo('template_directory'); ?>/_assets/media/images/icn-facebook.svg" alt="Visit Melissa Oholendt on Facebook" />
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_field('twitter_link', 'option')): ?>
                                <li class="nav-list-item-subnav-item">
                                    <a href="<?php the_field('twitter_link', 'option'); ?>">
                                        <img src="<?php bloginfo('template_directory'); ?>/_assets/media/images/icn-twitter.svg" alt="Visit Melissa Oholendt on Twitter" />
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_field('instagram_link', 'option')): ?>
                                <li class="nav-list-item-subnav-item">
                                    <a href="<?php the_field('instagram_link', 'option'); ?>">
                                        <img src="<?php bloginfo('template_directory'); ?>/_assets/media/images/icn-instagram.svg" alt="Visit Melissa Oholendt on Instagram" />
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_field('pinterest_link', 'option')): ?>
                                <li class="nav-list-item-subnav-item">
                                    <a href="<?php the_field('pinterest_link', 'option'); ?>">
                                        <img src="<?php bloginfo('template_directory'); ?>/_assets/media/images/icn-pinterest.svg" alt="Visit Melissa Oholendt on Pinterest" />
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
