<?php

get_header(); ?>


<main class="flex-1 flex flex-col">
	<div class="max-w-2xl w-full py-12 px-4 mx-auto">
		<div class="prose prose-zinc dark:prose-invert max-w-none">

			<?php
			while (have_posts()) {
				the_post();
				the_content();
			}
			?>
		</div>
	</div>

</main>


<?php get_footer();

?>