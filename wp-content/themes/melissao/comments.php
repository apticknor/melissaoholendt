<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */
?>

<div class="discussion">
    <div class="discussion-hd">
        <h1 class="hdg hdg_sm">(<?php comments_number('0','1','%'); ?>) Comments</h1>
    </div>
    <?php if (have_comments()) : ?>
    <div class="discussion-list">
        <ol class="commentsList">
            <?php $commentArgs = array(
                'walker'            => null,
                'max_depth'         => '',
                'style'             => 'ol',
                'callback'          => 'commentsStart',
                'end-callback'      => 'commentsEnd',
                'type'              => 'comment',
                'reply_text'        => '',
                'page'              => '',
                'per_page'          => '',
                'avatar_size'       => 50,
                'reverse_top_level' => null,
                'reverse_children'  => '',
                'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
                'short_ping'        => false,   // @since 3.6
                'echo'              => true     // boolean, default is true
            );
            wp_list_comments($commentArgs);
            ?>
        </ol>
    </div>
    <?php endif; // end have_comments() ?>
    <div class="discussion-form">
        <?php $commentFormArgs = array(
            'id_form'           => 'commentForm',
            'id_submit'         => 'commentFormSubmit',
            'class_submit'      => 'btn',
            'name_submit'       => '',
            'title_reply'       => __(''),
            'title_reply_to'    => __(''),
            'cancel_reply_link' => __(''),
            'label_submit'      => __('Add Comment'),
            'format'            => 'xhtml',

            'comment_field'         =>  '<label class="isVisuallyHidden" for="comment">Comment</label>' .
            '<textarea class="field field_txtMultiLine" id="comment" name="comment" aria-required="true" placeholder="Enter your comment"></textarea>',
            'must_log_in'           => '',
            'logged_in_as'          => '',
            'comment_notes_before'  => '',
            'comment_notes_after'   => '',
            'fields' => apply_filters('comment_form_default_fields', array(
                'author' =>
                    '<label class="isVisuallyHidden" for="author">' . __('Name', 'domainreference') . '</label> ' .
                    '<input class="field field_push" placeholder="Name" id="author" name="author" aria-required="true" type="text" value="' . esc_attr($commenter['comment_author']) . '" />',
                'email' =>
                    '<label class="isVisuallyHidden" for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
                    '<input class="field field_push" placeholder="E-mail Address" id="email" name="email" aria-required="true" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />',
            )),
        );
        comment_form($commentFormArgs); ?>
    </div>
</div>