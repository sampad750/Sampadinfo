<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sampadinfo
 * @since 1.0.0
 */

get_header();
?>

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content/content', 'single' );
					endwhile; // End of the loop.
					?>

                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="ti-heart"></i></span> Lily and 4
                                people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <p class="comment-count"><span class="align-middle"><i
                                                class="ti-comment"></i></span> <?php comments_number( 'No Comment', '1 Comment', '% Comments' ); ?>
                                </p>
                            </div>

							<?php
							$social_links = carbon_get_post_meta( get_the_ID(), 'social_links' );
							if ( $social_links ) { ?>
                                <ul class="social-icons">
                                <?php
									foreach ( $social_links as $slide ) {
										?>
                                        <li><a href="<?php echo esc_url( $slide['social_url'] ) ?>"><i
                                                        class="ti-<?php echo esc_attr( $slide['social_name'] ); ?>"></i></a>
                                        </li>
										<?php
									} ?>
                                </ul>
								<?php
							    }
							?>
                        </div>

						<?php
						if ( get_previous_post() || get_next_post() ) { ?>
                            <div class="navigation-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<?php
										$sampadinfo_prev_post_link = get_previous_post();
										if ( $sampadinfo_prev_post_link ) {
											$prevthumbnail = get_the_post_thumbnail( $sampadinfo_prev_post_link->ID, array(
												60,
												60
											), array( 'class' => 'img-fluid' ) );
											?>
                                            <div class="thumb">
                                                <a href="<?php echo get_the_permalink( $sampadinfo_prev_post_link ); ?>">
													<?php echo $prevthumbnail; ?>
                                                </a>
                                            </div>
										<?php } ?>
                                        <div class="arrow">
                                            <a href="<?php echo get_the_permalink( $sampadinfo_prev_post_link ); ?>">
                                                <span class="ti-arrow-left text-white"></span>
                                            </a>
                                        </div>
                                        <div class="detials">
                                            <p><?php _e( "Prev Post", "sampadinfo" ) ?></p>
                                            <a href="<?php echo get_the_permalink( $sampadinfo_prev_post_link ); ?>">
                                                <h4 title="<?php echo get_the_title( $sampadinfo_prev_post_link ); ?>"><?php echo wp_trim_words( get_the_title( $sampadinfo_prev_post_link ), 4 ); ?></h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<?php
										$sampadinfo_next_post_link = get_next_post();

										?>
                                        <div class="detials">
                                            <p><?php _e( "Next Post", "sampadinfo" ) ?></p>
                                            <a href="<?php echo get_the_permalink( $sampadinfo_next_post_link ); ?>">
                                                <h4 title="<?php echo get_the_title( $sampadinfo_next_post_link ); ?>"><?php echo wp_trim_words( get_the_title( $sampadinfo_next_post_link ), 4 ); ?></h4>
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="<?php echo get_the_permalink( $sampadinfo_next_post_link ); ?>">
                                                <span class="ti-arrow-right text-white"></span>
                                            </a>
                                        </div>
										<?php
										if ( $sampadinfo_next_post_link ) {
											$nextthumbnail = get_the_post_thumbnail( $sampadinfo_next_post_link->ID, array(
												60,
												60
											), array( 'class' => 'img-fluid' ) );
											?>
                                            <div class="thumb">
                                                <a href="<?php echo get_the_permalink( $sampadinfo_next_post_link ); ?>">
													<?php echo $nextthumbnail; ?>
                                                </a>
                                            </div>
										<?php } ?>
                                    </div>
                                </div>
                            </div>
							<?php
						} ?>
                    </div>
					<?php if ( get_the_author_meta( "description" ) ): ?>
                        <div class="blog-author">
                            <div class="media align-items-center">
								<?php echo get_avatar( get_the_author_meta( "ID" ) ); ?>
                                <div class="media-body">
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>">
                                        <h4><?php the_author(); ?></h4>
                                    </a>
                                    <p><?php the_author_meta( "description" ); ?></p>
                                </div>
                            </div>
                        </div>
					<?php endif; ?>

					<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					?>
                </div>
				<?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
<?php get_footer(); ?>