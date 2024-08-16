<?php
/**
 * Template for entry content.
 *
 * To be used inside WordPress The Loop.
 *
 * 
 */

?>

<div class="max-w-4xl mx-auto pb-6 md:pb-12 antialiased">
		<div class="w-auto mx-4">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a class="nav__link" href="/blog" rel="blog">Blogs</a></li>
				<li class="breadcrumb-item"><?php the_title(sprintf('<a href="%s" class="inline-block hover:underline nav__link">', esc_url(get_permalink())), '</a>'); ?></li>
				
			</ol>
		</nav>
	<?php
	if ( is_single() ) {
		the_content(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. */
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aquila' ),
					[
						'span' => [
							'class' => [],
						],
					]
				),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			)
		);

		wp_link_pages(
			[
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aquila' ),
				'after'  => '</div>',
			]
		);

	} else {
		?>
		<div class="truncate-4">
			<?php aquila_the_excerpt( 200 ); ?>
		</div>
		<?php
		echo aquila_excerpt_more();
	}

	?>
</div>
</div>