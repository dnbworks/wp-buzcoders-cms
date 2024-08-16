<?php


get_header();


?>



<main class="container">
	<div class="max-w-4xl mx-auto pb-6 md:pb-12 antialiased">
		<div class="w-auto mx-4">
			
			<?php

			if (have_posts()) 

				while (have_posts()) : the_post(); the_content()?>


						
				<?php 
				endwhile; ?>


		</div>


	</div>
</main>

<?php
get_footer();
