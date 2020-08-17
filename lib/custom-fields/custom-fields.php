<?php
//CREATES META FIELDS

add_filter( 'orbit_meta_box_vars', function( $meta_box ){

	$meta_box['videos'] = array(
		array(
			'id'			=> 'video-meta-field',
			'title'		=> 'Additional Information',
			'fields'	=> array(
				'video_url'	=> array(
					'type' => 'text',
					'text' => 'Youtube Video URL'
				)
			)
		)
	);

  $meta_box['quotes'] = array(
		array(
			'id'			=> 'quotes-meta-field',
			'title'		=> 'Additional Information',
			'fields'	=> array(
				'quote_logo' => array(
					'type' => 'text',
					'text' => 'Image URL'
				),
			)
		)
	);

	$meta_box['case-study'] = array(
		array(
			'id'			=> 'case-study-meta-field',
			'title'		=> 'Additional Information',
			'fields'	=> array(
				'learn_more' => array(
					'type' => 'text',
					'text' => 'Learn More URL'
				),
				'study_icon' => array(
					'type' => 'dropdown',
					'text' => 'Select Icon',
					'options'	=>	array(
						'healthcare'						=>	'HEALTHCARE',
						'assisted-living'				=>	'ASSISTED LIVING',
						'golf-courses'					=>	'GOLF COURSES',
						'food-restaurants'			=>	'FOOD/RESTAURANTS',
						'schools'								=>	'SCHOOLS',
						'hospitality'						=>	'HOSPITALITY',
						'commercial-buildings'	=>	'COMMERCIAL BUILDINGS',
					)
				)
			)
		)
	);

	return $meta_box;
});
