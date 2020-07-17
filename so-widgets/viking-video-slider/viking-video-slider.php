<?php
/*
	Widget Name: Viking Video Slider
	Description: Viking SOW for using Video Slider with SLICK.JS within the page builder
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class Viking_Video_Slider extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'viking-video-slider',
			// The name of the widget for display purposes.
			__('Viking Video Slider', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Viking SOW for using Slider Revolution plugin within the page builder.', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'title' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Title', 'siteorigin-widgets' ),
					'default' 		=> '',
				),
				'show_slides' => array(
					'type' 			=> 'number',
					'label' 		=> __( 'Show number of slides', 'siteorigin-widgets' ),
					'default' 		=> 4,
				),
				'slides' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Slider Videos' , 'siteorigin-widgets' ),
					// 'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
					'item_label' => array(
						'selector' => "[id*='video_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields' => array(
						'video_title' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Title', 'siteorigin-widgets' ),
							'default' 		=> '',
						),
						'video_desc' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Description', 'siteorigin-widgets' ),
							'default' 		=> '',
						),
						'video_url' => array(
							'type' 			=> 'link',
							'label' 		=> __( 'Youtube Url', 'siteorigin-widgets' ),						),
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/viking-video-slider"
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
siteorigin_widget_register('viking-video-slider', __FILE__, 'Viking_Video_Slider');
