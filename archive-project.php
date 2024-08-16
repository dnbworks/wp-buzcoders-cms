<?php get_header(); ?>

<div class="max-w-4xl mx-auto pb-6 md:pb-12 antialiased">
	<div class="w-auto mx-4">
		<div class="container top-header">
			<div class="row">
				<div class="col-12">
					<h1>CASE STUDIES</h1>
				</div>
			</div>
		</div>
		<div class="container caseStudies">
		<?php

		$args = array('post_type' => 'project', 'post_per_page' => 6);
		$loop = new WP_Query($args);

		$counter = 0;

		if ($loop->have_posts()) :

			while ($loop->have_posts()) : $loop->the_post();
			

				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
				
					<div class="row caseStudies__item">
						<div class="col-lg-6 order-1">
							<a href="<?php echo esc_url(get_permalink()); ?>" class="caseStudies__image">

								<img class="macbook-bg" alt="" src="<?php echo $featured_img_url; ?>">
							</a>
							<a class="caseStudies__readMore d-lg-none" href="<?php echo esc_url(get_permalink()); ?>">View Case Study <i class="fa fa-angle-right"></i> </a>
						</div>
						<div class="col-lg-6">
							<?php the_title(sprintf('<a href="%s" class="caseStudies__title" data-wpel-link="internal">', esc_url(get_permalink())), '</a>'); ?>


							<div class="caseStudies__excerpt"><?php echo get_the_excerpt() ?></div>

							<div class="caseStudies__terms">
								<div class="term">
									<div class="term__title">
										Industries:
									</div>
									<div class="term__lists">
										<a href="#"> <span>Education</span> </a>
									</div>
								</div>
								<div class="term">
									<div class="term__title">
										Services:
									</div>
									<div class="term__lists">
										<a href="https://inoxoft.com/service/mobile-application-development/" data-wpel-link="internal"> <span>Software Development</span> </a>
									</div>
								</div>
								<div class="term">
									<div class="term__title">
										Technologies:
									</div>
									<div class="term__lists">
										<a href="#">
											<span>Wordpress</span>,
										</a>
										<a href="#">
											<span>Laravel</span>,
										</a>
										<a href="#">
											<span>Jquery</span>
										</a>
									</div>
								</div>

							</div>

							<a class="caseStudies__readMore" href="<?php echo esc_url(get_permalink()); ?>" data-wpel-link="internal">View Case Study <i class="fa fa-angle-right"></i>
							</a>

						</div>

					</div>
				


		<?php endwhile;

		endif;

		wp_reset_postdata();

		?>
		</div>

	</div>
</div>
<?php get_footer(); ?>