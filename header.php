<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sampadinfo
 * @since 1.0.0
 */
$opt = get_option('sampadinfo_opt');
$is_main_logo = !empty($opt['main_logo']['url']) ? $opt['main_logo']['url'] : '';
$is_inner_logo = !empty($opt['inner_logo']['url']) ? $opt['inner_logo']['url'] : '';
$menu_left = empty($opt['main_logo']['url']) ? ' m_l_140' : '';
$extra_menu_class = is_front_page() ? ' ' : 'header_inner_page';
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--================ Start Header Area =================-->
<header class="header_area <?php echo $extra_menu_class; ?>">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <?php if(!empty($is_main_logo)){ ?>
                    <a class="navbar-brand logo_h" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $is_main_logo; ?>" alt=""></a>
                <?php } ?>
                <!-- Brand and toggle get grouped for better mobile display -->
                <?php if(!empty($is_inner_logo)){ ?>
                    <a class="navbar-brand logo_inner_page" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $is_inner_logo; ?>" alt=""></a>
                <?php } ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php
                if(has_nav_menu('main_menu')) {
                    wp_nav_menu( array(
                        'menu' => 'main_menu',
                        'theme_location' => 'main_menu',
                        'container_class' => 'collapse navbar-collapse offset',
                        'container_id' => 'navbarSupportedContent',
                        'menu_class' => 'nav navbar-nav menu_nav'. $menu_left,
                        'walker' => new Sampadinfo_Nav_Navwalker(),
                    ));
                }
                ?>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Area =================-->

<!--================ Start Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2><?php echo sampadinfo_banner_title(); ?></h2>
                <div class="page_link">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'sampadinfo'); ?></a>
                    <a href="<?php the_permalink();?>"><?php echo sampadinfo_banner_title(); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

