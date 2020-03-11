<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sampadinfo
 * @since 1.0.0
 */
$opt = get_option('sampadinfo_opt');
$is_footer_menu = !empty($opt['footer_menu']) ? $opt['footer_menu'] : '';
$is_footer_social_share = !empty($opt['is_footer_social_share']) ? $opt['is_footer_social_share'] : '';
?>

<!--================Footer Area =================-->
<footer class="footer_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="footer_top flex-column">
					<div class="footer_logo">
						<?php if(!empty($opt['footer_logo']['url'])): ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo esc_url($opt['footer_logo']['url'])?>" alt="">
							</a>
						<?php endif; ?>
						<?php if( $is_footer_menu == '1') { ?>
						<div class="d-lg-block d-none">
							<nav class="navbar navbar-expand-lg navbar-light justify-content-center">
								<?php
								if(has_nav_menu('footer_menu')) {
									wp_nav_menu( array(
										'menu' => 'footer_menu',
										'theme_location' => 'footer_menu',
										'container_class' => 'collapse navbar-collapse offset',
										'menu_class' => 'nav navbar-nav menu_nav mx-auto',
										'walker' => new Sampadinfo_Nav_Navwalker(),
									));
								}
								?>
							</nav>
						</div>
						<?php }?>
					</div>
					<?php if( $is_footer_social_share == '1') { ?>
						<div class="footer_social mt-lg-0 mt-4">
							<?php if(!empty($opt['facebook_share'])){ ?>
								<a href="<?php echo esc_url($opt['facebook_share']); ?>"><i class="fab fa-facebook-f"></i></a>
							<?php } ?>
							<?php if(!empty($opt['twitter_share'])){ ?>
								<a href="<?php echo esc_url($opt['twitter_share']); ?>"><i class="fab fa-twitter"></i></a>
							<?php } ?>
							<?php if(!empty($opt['skype_share'])){ ?>
								<a href="<?php echo esc_url($opt['skype_share']); ?>"><i class="fab fa-skype"></i></a>
							<?php } ?>
							<?php if(!empty($opt['instagram_share'])){ ?>
								<a href="<?php echo esc_url($opt['instagram_share']); ?>"><i class="fab fa-instagram"></i></a>
							<?php } ?>
							<?php if(!empty($opt['linkedin_share'])){ ?>
								<a href="<?php echo esc_url($opt['linkedin_share']); ?>"><i class="fab fa-linkedin-in"></i></a>
							<?php } ?>
							<?php if(!empty($opt['youtube_share'])){ ?>
								<a href="<?php echo esc_url($opt['youtube_share']); ?>"><i class="fab fa-youtube"></i></a>
							<?php } ?>
							<?php if(!empty($opt['pinterest_share'])){ ?>
								<a href="<?php echo esc_url($opt['pinterest_share']); ?>"><i class="fab fa-pinterest"></i></a>
							<?php } ?>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="row footer_bottom justify-content-center">
			<p class="col-lg-8 col-sm-12 footer-text">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
		</div>
	</div>
</footer>
<!--================End Footer Area =================-->

<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

<?php wp_footer(); ?>

</body>

</html>