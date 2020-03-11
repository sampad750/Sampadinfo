<?php
/**
 * Custom template tags for this theme
 *
 * @package Sampadinfo
 * @since 1.0.0
 */
// Image sizes
add_image_size('sampadinfo_730x365', 730, 365, true); // Blog post
add_image_size('sampadinfo_350x301', 350, 301, true); // Blog post elementor widget

if ( ! function_exists( 'sampadinfo_the_posts_navigation' ) ) :
	// Pagination
	function sampadinfo_the_posts_navigation() {
		the_posts_pagination(array(
			'screen_reader_text' => ' ',
			'prev_text'          => '<i class="ti-arrow-left"></i>',
			'next_text'          => '<i class="ti-arrow-right"></i>'
		));
	}
endif;

// Get comment count text
function sampadinfo_comment_count($post_id, $no_comments = 'No Comments') {
	$comments_number = get_comments_number($post_id);
	if($comments_number == 0) {
		$comment_text = $no_comments;
	}elseif($comments_number == 1) {
		$comment_text = esc_html__('1 Comment', 'sampadinfo');
	}elseif($comments_number > 1) {
		$comment_text = $comments_number.esc_html__(' Comments', 'sampadinfo');
	}
	echo esc_html($comment_text);
}

// Comment list
function sampadinfo_comments($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	?>
	<div class="comment-list">
		<div class="single-comment justify-content-between d-flex">
			<div class="user justify-content-between d-flex">
				<div class="thumb">
					<?php
					if(get_avatar($comment)) {
						echo get_avatar( $comment, 70, null, null );
					}
					?>
				</div>
				<div class="desc">
					<p class="comment">
						<?php comment_text(); ?>
					</p>
					<div class="d-flex justify-content-between">
						<div class="d-flex align-items-center">
							<h5>
								<a href="<?php echo get_comment_author_link(); ?>"><?php comment_author(); ?></a>
							</h5>
							<p class="date"><?php comment_date(get_option('date_format')); ?> at <?php comment_time('g:i a'); ?></p>
						</div>
						<div class="reply-btn">
							<?php comment_reply_link(array_merge( $args, array('reply_text' => 'reply', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
}
// Comment reply link custom class
add_filter('comment_reply_link', 'replace_reply_link_class');
function replace_reply_link_class($class){
	$class = str_replace("class='comment-reply-link", "class='btn-reply text-uppercase", $class);
	return $class;
}

// Banner Title
function sampadinfo_banner_title() {
    if(is_page() || is_single()) {
		the_title();
	}
    elseif(is_category()) {
		single_cat_title();
	}
    elseif(is_archive()) {
		the_archive_title();
	}
	else {
		the_title();
	}
}




