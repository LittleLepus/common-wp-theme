<?php // Adding WP Functions & Theme Support

function joints_theme_support()
{

	// Add WP Thumbnail Support
	add_theme_support('post-thumbnails');

	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support('automatic-feed-links');

	// Add Support for WP Controlled Title Tag
	add_theme_support('title-tag');

	// Add support for custom logo
	add_theme_support('custom-logo');


	// Add HTML5 Support
	add_theme_support(
		'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
		)
	);

	// Adding post format support
	add_theme_support(
		'post-formats',
		array(
			'aside', // title less blurb
			'gallery', // gallery of images
			'link', // quick link to other site
			'image', // an image
			'quote', // a quick quote
			'status', // a Facebook like status update
			'video', // video
			'audio', // audio
			'chat' // chat transcript
		)
	);

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters('joints_theme_support', 1200);

	add_theme_support('align-wide');
}

add_action('after_setup_theme', 'joints_theme_support');

//- customize editor palette
add_theme_support('editor-color-palette', array(
	array(
		'name' => __('base', 'common-wp'),
		'slug' => 'base',
		'color' => '#EC1F27',
	),
	array(
		'name' => __('dark gray', 'common-wp'),
		'slug' => 'dark-gray',
		'color' => '#231F20',
	),
	array(
		'name' => __('offwhite', 'common-wp'),
		'slug' => 'light-gray',
		'color' => '#f5f5f5',
	),
	array(
		'name' => __('gray', 'commmon-wp'),
		'slug' => 'gray',
		'color' => '#999',
	)
));
