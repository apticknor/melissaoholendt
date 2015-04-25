<?php
/**
 * MelissaO Theme
 *
 * @package melissao
 * @author Anthony Ticknor <tony.ticknor@gmail.com>
 */
?>

<?php
$paginate_args = array(
    'show_all'           => False,
    'end_size'           => 1,
    'mid_size'           => 1,
    'prev_next'          => True,
    'prev_text'          => __('&laquo; Previous'),
    'next_text'          => __('Next &raquo;'),
    'type'               => 'plain',
    'add_args'           => False,
    'add_fragment'       => '',
    'before_page_number' => '',
    'after_page_number'  => ''
);
echo paginate_links($paginate_args); ?>
