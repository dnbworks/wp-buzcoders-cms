<?php

/**
 * Post Card
 *
 * Note: Should be called with The Loop
 */

if (empty(get_the_ID())) {
	return null;
}

$post_permalink = get_the_permalink();
$post_title = get_the_title();
?>

<li id="post-<?php the_ID(); ?>" class="filter__horizontal-item grid-item" style="margin-bottom: 15px;">
	<div class="row no-gutters">
		<div class="col-sm-4">
			<a href="<?php echo esc_url($post_permalink); ?>" class="block">
				<figure class="image-container compat-object-fit" style="background-image: url(&quot;https://www.westga.edu/assets/news/pics/art-culture-scientific-inquiry/stephenson-astronomy-rss.jpg&quot;)">
					<?php the_post_thumbnail('post-thumbnail', ['class' => 'masonry-gallery__image']); ?>
				</figure>
			</a>
		</div>
		<div class="col">
			<div class="filter__horizontal-content">
				<h3><a href="<?php echo esc_url($post_permalink); ?>" title="<?php echo esc_html($post_title); ?>"><?php echo the_title() ?></a></h3>
				<p></p>
				<div class="event-date">Jun 13</div>
			</div>
		</div>
	</div>
</li>