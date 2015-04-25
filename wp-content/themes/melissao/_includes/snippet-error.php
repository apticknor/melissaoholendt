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
        <div class="content content_isCentered" role="main">
            <div class="siteError">
                <div class="siteError-msg">
                    <div class="userContent">
                        <?php the_field('text_snippet_error_message', 'option'); ?>
                    </div>
                </div>
                <div class="siteError-help">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

