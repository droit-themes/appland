<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package appland
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$is_comments = have_comments() ? 'have_comments' : 'no_comments';

?>

<section class="comment_area <?php echo esc_attr($is_comments); ?>" id="comments">

    <?php if ( have_comments() ) : ?>
        <div class="comments">
            <h2> <?php comments_number( ' ', esc_html__('1 Comment', 'appland'), esc_html__('% Comments', 'appland') ); ?> </h2>
            <?php
            the_comments_navigation();
            wp_list_comments(
                array(
                    'style'      => 'ul',
                    'short_ping' => true,
                    'callback'	 => 'appland_comments'
                ),
                get_comments(array(
                    'post_id' => get_the_ID(),
                ))
            );
            the_comments_navigation();
            ?>
        </div>
    <?php endif; ?>
    <div class="row m0">
        <?php
        $commenter      = wp_get_current_commenter();
        $req            = get_option( 'require_name_email' );
        $aria_req       = ( $req ? " aria-required='true'" : '' );
        $fields =  array(
            'author' => '<input type="text" class="form-control" name="author" id="name" value="'.esc_attr($commenter['comment_author']).'" placeholder="'.esc_attr__('Name *', 'appland').'" '.$aria_req.'>',
            'email'	=> '<input type="email" class="form-control" name="email" id="email" value="'.esc_attr($commenter['comment_author_email']).'" placeholder="'.esc_attr__('Email *', 'appland').'" '.$aria_req.'>',
        );
        $comments_args = array(
            'fields'                => apply_filters( 'comment_form_default_fields', $fields ),
            'class_form'            => 'contact-form',
            'class_submit'          => 'btn sub_btn',
            'title_reply'           => '<h2>'.esc_html__('Leave a Comment', 'appland').'</h2>',
            'comment_notes_before'  => '',
            'comment_field'         => '<textarea name="comment" class="form-control" placeholder="'.esc_attr__('Your Comment', 'appland').'"></textarea>',
            'comment_notes_after'   => '',
        );
        comment_form($comments_args);
        ?>
    </div>
</section>