<?php 
/**
 * Template Name: Template Builder Page
 */
 
get_header();

    if( have_posts() ) {
    	while ( have_posts() ) {
    		the_post();
    		// post content
    		the_content();
    	}
    }
 
get_footer();
