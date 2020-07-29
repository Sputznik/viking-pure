<?php

// CREATES CUSTOM POST TYPE
add_filter( 'orbit_post_type_vars', function( $orbit_types ){

	$orbit_types['videos'] = array(
		'slug' 		=> 'videos',
		'labels'	=> array(
			'name' 					=> 'Videos',
			'singular_name' => 'Video',
		),
		'menu_icon'	=> 'dashicons-video-alt3',
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

  $orbit_types['quotes'] = array(
		'slug' 		=> 'quotes',
		'labels'	=> array(
			'name' 					=> 'Quotes',
			'singular_name' => 'Quote',
		),
		'menu_icon'	=> 'dashicons-format-quote',
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

  $orbit_types['press'] = array(
		'slug' 		=> 'press',
		'labels'	=> array(
			'name' 					=> 'Press',
			'singular_name' => 'Press',
		),
		'menu_icon'	=> 'dashicons-clipboard',
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

  $orbit_types['case-study'] = array(
		'slug' 		=> 'case-study',
		'labels'	=> array(
			'name' 					=> 'Case Studies',
			'singular_name' => 'Case Study',
		),
		'menu_icon'	=> 'dashicons-welcome-learn-more',
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

	return $orbit_types;
} );
