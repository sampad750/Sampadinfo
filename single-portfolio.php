<?php
get_header();
?>

<!--================Start Portfolio Details Area =================-->
<section class="portfolio_details_area section-margin">
	<div class="container">
		<div class="row">
			<div class="offset-xl-1 col-xl-10">
				<div class="portfolio_details_inner">
					<?php
					while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-12">
								<div class="left_img">
									<?php
									the_post_thumbnail('full', array('class' => 'img-fluid'));
									?>
								</div>
							</div>
						</div>
						<div class="row">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Portfolio Details Area =================-->



<?php

get_footer();