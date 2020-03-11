<?php
/**
 * Sampadinfo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sampadinfo
 * @since 1.0.0
 */

if ( ! function_exists( 'sampadinfo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sampadinfo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sampadinfo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'main_menu' => __( 'Main Menu', 'sampadinfo' ),
				'footer_menu' => __( 'Footer Menu', 'sampadinfo' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		// Add theme support for custom logo
		add_theme_support( 'custom-logo' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'sampadinfo_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function sampadinfo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sampadinfo_content_width', 640 );
}
add_action( 'after_setup_theme', 'sampadinfo_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function sampadinfo_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.1.3', 'all' );
	wp_enqueue_style( 'linericon-font-css', get_template_directory_uri() . '/assets/vendors/linericon/style.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'owl-theme-default', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.theme.default.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendors/fontawesome/css/all.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/vendors/nice-select/css/nice-select.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all' );
	wp_enqueue_style('saasland-wpd',  get_template_directory_uri().'/assets/css/wpd-style.css');

	wp_enqueue_style( 'sampadinfo-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_style_add_data( 'sampadinfo-style', 'rtl', 'replace' );



	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.1.3', true );
	wp_enqueue_script( 'stellar', get_template_directory_uri() . '/assets/js/stellar.js', array('jquery'), '0.6.2', true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/vendors/isotope/imagesloaded.pkgd.min.js', array('jquery'), '4.1.0', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/vendors/isotope/isotope-min.js', array('jquery'), '3.0.1', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.js', array('jquery'), '2.2.1', true );
	wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array('jquery'), '1.0', true );
	// gmap
	wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/assets/js/gmaps.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'theme-gmap', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '1.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sampadinfo_scripts' );

/**
 * Constants
 * Defining default asset paths
 */
define('SAMPADINFO_DIR_CSS', get_template_directory_uri().'/assets/css');
define('SAMPADINFO_DIR_JS', get_template_directory_uri().'/assets/js');
define('SAMPADINFO_DIR_VEND', get_template_directory_uri().'/assets/vendors');
define('SAMPADINFO_DIR_IMG', get_template_directory_uri().'/assets/img');
define('SAMPADINFO_DIR_FONT', get_template_directory_uri().'/assets/fonts');

/**
 * Carbon fields metabox active
 */
require_once "inc/carbon_fields_metabox/single_post_social_metabox.php";

/**
 * Theme settings
 */
require get_template_directory() . '/options/opt-config.php';

/**
 * Theme functions
 */
require get_template_directory() . '/inc/sampadinfo-functions.php';

/**
 * Custom template sidebar widget for the theme.
 */
require get_template_directory() . '/inc/sidebar.php';

/**
 * Custom template navwalker for the theme.
 */
require get_template_directory() . '/inc/navwalker.php';

