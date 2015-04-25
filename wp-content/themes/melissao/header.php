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

        <!-- ICONS -->
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png?v=oho">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png?v=oho">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png?v=oho">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png?v=oho">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png?v=oho">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png?v=oho">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png?v=oho">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png?v=oho">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png?v=oho">
        <link rel="icon" type="image/png" href="/favicon-32x32.png?v=oho" sizes="32x32">
        <link rel="icon" type="image/png" href="/android-chrome-192x192.png?v=oho" sizes="192x192">
        <link rel="icon" type="image/png" href="/favicon-96x96.png?v=oho" sizes="96x96">
        <link rel="icon" type="image/png" href="/favicon-16x16.png?v=oho" sizes="16x16">
        <link rel="manifest" href="/manifest.json?v=oho">
        <link rel="shortcut icon" href="/favicon.ico?v=oho">
        <meta name="msapplication-TileColor" content="#ffdfb6">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png?v=oho">

        <!-- WP HEAD GENERATED -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div class="tier tier_brand">
            <div class="wrapper">
                <div class="masthead" role="banner">
                    <div class="masthead-logo">
                        <a class="logo" href="<?php echo site_url(); ?>">
                            <span class="logo-text"><? bloginfo('name'); ?></span>
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
