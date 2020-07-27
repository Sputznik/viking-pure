<?php
/*
	Widget Name: Viking Bullet List
	Description: Viking Bullet List
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class Viking_Bullet_List extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'viking-bullet-list',
			// The name of the widget for display purposes.
			__('Viking Bullet List', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Viking Bullet List'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'bullet_headline' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Bullet List Headline', 'siteorigin-widgets' ),
					'default' 		=> '',
				),
				'bullet_items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Bullet List Repeater' , 'siteorigin-widgets' ),
					'item_label' => array(
						'selector' => "[id*='bullet_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields' => array(
						'bullet_title' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Item Title', 'siteorigin-widgets' ),
							'default' 		=> '',
						),
						'bullet_image' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Choose Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
					)
				),
				'design_section' => array(
	 				'type' => 'section',
	 				'label' => __( 'Design' , 'siteorigin-widgets' ),
	 				'hide' => true,
	 				'fields' => array(
						'headline_color' => array(
							'type' 		=> 'color',
							'label' 	=> __( 'Bullet Headline Color', 'siteorigin-widgets' ),
							'default' 	=> '#ffffff'
						),
						'item_color' => array(
							'type' 		=> 'color',
							'label' 	=> __( 'Bullet Items Color', 'siteorigin-widgets' ),
							'default' 	=> '#ffffff'
						),
						'headline_alignment' => array(
							'type' => 'select',
							'label' => __( 'Headline Alignment', 'siteorigin-widgets' ),
							'default' => 'center',
							'options' => array(
								'center' => __( 'Default', 'siteorigin-widgets' ),
								'left' 		=> __( 'Left', 'siteorigin-widgets' ),
							)
						),
						'bullet_list_width' => array(
							'type' 				=> 'text',
							'label' 			=> __( 'Bullet Container Width', 'siteorigin-widgets' ),
							'default' 		=> '800px',
							'description'	=>	__( 'Must be in pixels. Default value 800px', 'siteorigin-widgets' ),
						),
						'bullet_list_gutter' => array(
							'type' 		=> 'text',
							'label' 	=> __( 'Bullet List Gutter', 'siteorigin-widgets' ),
							'default' 	=> '100px',
							'description'	=>	__( 'Must be in pixels. Default value 100px', 'siteorigin-widgets' ),
						),
	 				)
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/viking-bullet-list"
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
siteorigin_widget_register('viking-bullet-list', __FILE__, 'Viking_Bullet_List');
