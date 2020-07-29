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
				'author_avatar' => array(
					'type' => 'text',
					'text' => 'Author Image URL'
				),
				'author_name' => array(
					'type' => 'text',
					'text' => 'Author Name'
				),
				'author_details' => array(
					'type' => 'text',
					'text' => 'Author Details'
				)
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
				)
			)
		)
	);

	return $meta_box;
});
