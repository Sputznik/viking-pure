<?php
/*
	Widget Name: Viking Scrolling List
	Description: Viking Scrolling List
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class Viking_Scrolling_List extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'viking-scrolling-list',
			// The name of the widget for display purposes.
			__('Viking Scrolling List', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Viking Scrolling List', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'image_repeater' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Scrolling List Items' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Item', 'siteorigin-widgets' ),
					'fields' => array(
						'item_image' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Choose Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),

					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/viking-scrolling-list"
		);
	}

	function get_template_name($instance) {
		return 'template';
	}
	function get_template_dir($instance) {
		return 'templates';
	}
    function get_style_name($instance) {
        return '';
    }
}
siteorigin_widget_register('viking-scrolling-list', __FILE__, 'Viking_Scrolling_List');
