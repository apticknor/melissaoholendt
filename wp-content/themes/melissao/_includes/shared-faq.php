<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */

?>

<?php while ( have_rows('faq') ) : the_row(); ?>
<div class="faq">
    <div class="faq-question">
        <?php the_sub_field('faq_question'); ?>
    </div>
    <div class="faq-answer">
        <div class="userContent">
            <?php the_sub_field('faq_answer'); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>