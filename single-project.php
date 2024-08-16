<?php get_header(); ?>

<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
	
					</header><!-- .page-header -->
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();
						?>
	<div class="max-w-4xl mx-auto pb-6 md:pb-12 antialiased">
		<div class="w-auto mx-4">
						<?php 	the_content(); ?>
		</div>
	</div>
					
						<?php
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>
<?php get_footer(); ?>