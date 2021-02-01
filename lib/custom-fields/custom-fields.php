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
				),
				'external_url'	=> array(
					'type' => 'text',
					'text' => 'External Video URL'
				),
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

	$meta_box['press'] = array(
		array(
			'id'			=> 'press-meta-field',
			'title'		=> 'Additional Information',
			'fields'	=> array(
				'btn_text' => array(
					'type' => 'text',
					'text' => 'Button Text'
				),
				'btn_url' => array(
					'type' => 'text',
					'text' => 'Button URL'
				),
			)
		)
	);

	$meta_box['articles'] = array(
		array(
			'id'			=> 'article-meta-field',
			'title'		=> 'Additional Information',
			'fields'	=> array(
				'linkedin_url'	=> array(
					'type' => 'text',
					'text' => 'Linkedin URL'
				)
			)
		)
	);

	return $meta_box;
});
