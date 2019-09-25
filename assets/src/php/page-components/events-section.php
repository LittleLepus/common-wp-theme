?<?php
	//- declaring variables for template readability
	$events_plugin_isactive = in_array('the-events-calendar/the-events-calendar.php', apply_filters('active_plugins', get_option('active_plugins')));



	$calendar_image = get_stylesheet_directory_uri() . '/assets/images/icons/white/calendar.svg' . '"' . "loading='lazy'";



	?>

<div id="events-section" class="info-section">
	<div class="grid-container homepage-events">
		<div class="grid-x grid-margin-x grid-margin-y text-center">
			<img src="<?php echo $calendar_image ?> class=" cell large-2 large-offset-5 medium-4 medium-offset-4 small-6 small-offset-3" />

			<br />

			<h2 class="section-title txt-white cell">
				Upcoming Events
			</h2>

			<div class="cell grid-x grid-margin-x grid-margin-y">
				<?php // Retrieve the next 2 upcoming events

				if ($events_plugin_isactive) {

					//plugin is activated
					$events = tribe_get_events(array(
						'posts_per_page' => 3, 'start_date' => date('Y-m-d H:i:s', strtotime("-6 hours")),
						// this was in the old one but gotten taken out for some reason
						// 'tax_query'=> array(
						// 	array(
						// 		'taxonomy' => 'tribe_events_cat',
						// 		'field' => 'slug',
						// 		'terms' => 'general'
						// 	   )
						// )
					));

					function empty_content($str)
					{
						return trim(str_replace('&nbsp;', '', strip_tags($str))) == '';
					}

					// Loop through the events, displaying the title
					// and content for each
					foreach ($events as $event) {
						//- loop variables
						$event_description = $event->post_content;

						$event_description_preview = substr($event_description, 0, 300);

						$event_link_full = tribe_get_event_link($event->ID, $full_link = true);

						$event_link = tribe_get_event_link($event->ID);

						$event_date = tribe_events_event_schedule_details($event->ID);

						?>

						<div class="card cell small-12">
							<h3><?php echo $event_link_full; ?></h3>
							<hr>
							<div class="grid-x grid-margin-x">
								<div class="cell large-7 medium-6 small-12">
									<p><?php echo $event_description_preview ?>
										...

									</p>
									<a href="<?php echo $event_link; ?>" class="button find-out-more">
										Find out more >
									</a>
								</div>
								<div class="cell large-5 medium-6 small-12">
									<div class="grid-x grid-margin-x">
										<div class="cell large-3 medium-4 small-3">
											<a href="<?php echo $event_link ?>">
												<img src="<?php echo $calendar_image; ?> class='calendar-icon' />
											</a>
										</div>
										<div class=" cell large-9 medium-8 small-9">
												<p>
													<?php echo $event_date; ?>
												</p>
										</div>
									</div><br>
									<div class="grid-x grid-margin-x">
										<div class="cell large-3 medium-4 small-3"><a href="<?php echo tribe_get_event_link($event->ID); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/white/location.svg" class="calendar-icon" loading="lazy" /></a></div>
										<div class="cell large-9 medium-8 small-9">
											<p><?php echo tribe_get_venue_single_line_address($event->ID, $link = false);

														?></p>
											<p><?php if (tribe_show_google_map_link($event->ID)) {
															echo '<a href="' . tribe_get_map_link($event->ID) . '" class="button">Google Map</a>';
														}

														?></p>
										</div>
									</div>
								</div>
							</div>
						</div><br><?php
										}

										?><div class="cell text-center"><a class="button dark" href="<?php echo home_url(); ?>/events/">See All</a></div><?php
																																							} else {
																																								?><div class="text-center cell">This template uses The Events Calendar plugin.</div><?php
																																																													}

																																																													?></div>
		</div>
	</div>
</div>