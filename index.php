<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sampadinfo
 * @since 1.0.0
 */

get_header();
?>
    <!--================Blog Area =================-->
    <section class="blog_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
						<?php
						if ( have_posts() ) {
							// Load posts loop.
							while ( have_posts() ) {
								the_post();
								get_template_part( 'template-parts/content/content' );
							}
						} else {
							// If no content, include the "No posts found" template.
							get_template_part( 'template-parts/content/content', 'none' );
						}
						?>
                        <nav class="blog-pagination justify-content-center d-flex">
							<?php sampadinfo_the_posts_navigation(); ?>
                        </nav>
                    </div>
                </div>
				<?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
<?php
get_footer();
