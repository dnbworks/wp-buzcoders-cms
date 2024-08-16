<?php get_header(); ?>

<main class="container">
	<div class="max-w-4xl mx-auto pb-6 md:pb-12 antialiased">
		<div class="w-auto mx-4">
			<h1 class="mt-8 mb-8 lg:mb-12 text-3xl lg:text-4xl text-gray-900 font-semibold section-heading relative"><span class="bg-white pr-3">All blog posts</span></h1>
			<?php
			$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array('posts_per_page' => 3, 'paged' => $currentPage);
			query_posts($args);
			if (have_posts()) : $i = 0;

				while (have_posts()) : the_post(); ?>

					<section class="text-gray-700 body-font overflow-hidden">
						<div class="w-full flex flex-col items-start">
							<div>
								<span class="inline-block py-0.5 px-2 mr-1 rounded bg-white text-gray-700 border border-gray-600 text-xs font-semibold tracking-widest tag-laravel"><?php the_category(' '); ?></span>
							</div>
							<?php the_title(sprintf('<h2 class="text-2xl title-font font-semibold text-gray-900 my-2"><a href="%s" class="inline-block hover:underline">', esc_url(get_permalink())), '</a></h2>'); ?>
							<p class="leading-relaxed mb-4 text-lg"><?php echo get_the_excerpt() ?></p>
							<div class="flex items-center flex-wrap pb-8 mb-8 border-b-2 border-gray-100 mt-auto w-full">
								<a href="/blog/fast-and-cheap-ways-to-deploy-a-laravel-application" class="text-gray-900 inline-flex items-center hover:underline text-lg">Read More
									<svg class="w-4 h-4 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path d="M5 12h14"></path>
										<path d="M12 5l7 7-7 7"></path>
									</svg>
								</a>
							</div>
						</div>
					</section>


				<?php 
				endwhile; ?>

				<div class="col-xs-6 text-left">
					<?php next_posts_link('« Older Posts'); ?>
				</div>
				<div class="col-xs-6 text-right">
					<?php previous_posts_link('Newer Posts »'); ?>
				</div>

			<?php endif;
			wp_reset_query();
			?>
		</div>


	</div>

	</div>
	</div>
</main>

<?php get_footer(); ?>
