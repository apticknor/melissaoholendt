<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */
?>

        <div class="tier tier_transparent">
            <div class="wrapper">
                <div class="footer" role="contentinfo">
                    <div class="footer-nav">
                        <ul class="navSocial">
                            <?php if(get_field('facebook_link', 'option')): ?>
                            <li>
                                <a href="<?php the_field('facebook_link', 'option'); ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/_assets/media/images/icn-facebook.svg" alt="Visit Melissa Oholendt on Facebook" />
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(get_field('twitter_link', 'option')): ?>
                            <li class="navSocial-item_tight">
                                <a href="<?php the_field('twitter_link', 'option'); ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/_assets/media/images/icn-twitter.svg" alt="Visit Melissa Oholendt on Twitter" />
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(get_field('instagram_link', 'option')): ?>
                            <li>
                                <a href="<?php the_field('instagram_link', 'option'); ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/_assets/media/images/icn-instagram.svg" alt="Visit Melissa Oholendt on Instagram" />
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(get_field('pinterest_link', 'option')): ?>
                            <li>
                                <a href="<?php the_field('pinterest_link', 'option'); ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/_assets/media/images/icn-pinterest.svg" alt="Visit Melissa Oholendt on Pinterest" />
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="footer-legal">
                        <span class="footer-legal-lines">
                            <span class="footer-legal-lines-line">
                                &copy; 2009 - <?php echo date('Y'); ?>
                            </span>
                            <span class="footer-legal-lines-line">
                                <?php bloginfo('name'); ?>
                            </span>
                        </span>
                        <span class="footer-legal-lines">
                            <span class="footer-legal-lines-line">
                                <?php bloginfo('description'); ?>
                            </span>
                            <span class="footer-legal-lines-line">
                                <span class="footer-legal-lines-line-seperator">&bull;</span> Minneapolis &amp; Worldwide
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

            <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '<?php the_field('google_analytics_id', 'option') ?>', 'auto');
            ga('send', 'pageview');

        </script>

        <!-- WP FOOTER GENERATED -->
        <?php wp_footer(); ?>
    </body>
</html>