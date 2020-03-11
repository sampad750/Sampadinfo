<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sampadinfo
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

<div class="comments-area">
    <h4><?php sampadinfo_comment_count(get_the_ID(), '') ?></h4>
	<?php
	if ( have_comments() ) :
		the_comments_navigation();
		wp_list_comments(
			array(
				'callback'	 => 'sampadinfo_comments'
			)
		);
		the_comments_navigation();
	endif;
	?>
</div>

<div class="comment-form">
	<?php
	$commenter      = wp_get_current_commenter();
	$req            = get_option( 'require_name_email' );
	$aria_req       = ( $req ? " aria-required='true'" : '' );
	$fields =  array(
		'author' => '
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" value="'.esc_attr($commenter['comment_author']).'" placeholder="'.esc_attr__('Name *', 'sampadinfo').'" '.$aria_req.'>
                </div>
            </div>',
		'email'	=> '
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" value="'.esc_attr($commenter['comment_author_email']).'" placeholder="'.esc_attr__('Email *', 'sampadinfo').'" '.$aria_req.'>
                </div>
            </div>',
		'url'	=> '
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text" value="'.esc_attr($commenter['comment_author_url']).'" placeholder="'.esc_attr__('Website (Optional)', 'sampadinfo').'">
                </div>
            </div></div>',
	);
	$comments_args = array(
		'fields'                => apply_filters( 'comment_form_default_fields', $fields ),
		'class_form'            => 'form-contact comment_form',
		'id_form'               => 'commentForm',
		'class_submit'          => 'primary_btn button-contactForm',
		'title_reply_before'    => '<h4>',
		'title_reply'           => esc_html__('Leave a Reply', 'sampadinfo'),
		'title_reply_after'     => '</h4>',
		'comment_notes_before'  => '',
		'comment_field'         => '<div class="row"><div class="col-12"><div class="form-group"><textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="9" placeholder="'.esc_attr__('Write Comment', 'sampadinfo').'"></textarea></div></div>',
		'comment_notes_after'   => '',
	);
	comment_form($comments_args);
	?>
</div>