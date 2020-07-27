<?php
/*
	Widget Name: Viking Play Banner
	Description: Viking Play Banner
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class Viking_Play_Banner extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'viking-play-banner',
			// The name of the widget for display purposes.
			__('Viking Play Banner', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Viking Play Banner'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'banner_video_url' => array(
					'type' 		=> 'link',
					'label' 	=> __( 'Video Url', 'siteorigin-widgets' ),
				),
				'banner_text' => array(
					'type' 		=> 'text',
					'label' 	=> __( 'Banner Text', 'siteorigin-widgets' ),
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/viking-play-banner"
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
siteorigin_widget_register('viking-play-banner', __FILE__, 'Viking_Play_Banner');
