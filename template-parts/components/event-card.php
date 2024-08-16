<?php

/**
 * Post Card
 *
 * Note: Should be called with The Loop
 */

if (empty(get_the_ID())) {
	return null;
}

$event_permalink = get_the_permalink();
$event_title = get_the_title();
?>

<section data-name="<?php echo esc_html($event_title); ?>" class="event-item d-flex" id="event-<?php the_ID(); ?>">


	<div class="event-list-left" style="background-image: url(<?php echo get_the_post_thumbnail_url()?>)" aria-label="Wolves Exploration Camp Logo">
	</div>
	<div class="event-list-content">
		<div class="event-label ">Main Calendar</div>
		<h3 class="event-list-title">
			<a href="https://www.westga.edu/calendar.php#event-details/6be28cda-ad1e-4f85-ac1a-2f636b421fc4" data-action="routeChange"><?php echo the_title() ?></a></h3>
		<div class="date detail-with-icon" aria-label="Event Date">
			<i class="icon fas fa-calendar-alt"></i>
			<div>June 5 – 9, 2023. 8:00 AM - 3:00 PM (Eastern Time)</div>
		</div>
		<div class="location detail-with-icon" aria-label="Event Location">
			<i class="icon fas fa-map-marker-alt"></i>
			<div><?php echo the_title() ?></div>
		</div>
		<div class="detail-with-icon tickets" aria-label="Event Tickets">
			<i class="icon fas fa-ticket-alt"></i>
			<div>
				<div class="bold">$195.00</div>
			</div>
		</div>
	</div>
</section>