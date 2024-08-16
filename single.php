<?php


get_header();
?>


<main class="site-main" id="main">

	<?php
	while (have_posts()) {
		the_post();
		get_template_part('template-parts/content', 'single');
	}
	?>

</main>



<?php
get_footer();
