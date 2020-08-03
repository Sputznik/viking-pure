<?php
/*
	Widget Name: Viking Pure Sidebar
	Description: Viking Pure Sidebar
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class Viking_Pure_Sidebar extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'viking-sidebar',
			// The name of the widget for display purposes.
			__('Viking Pure Sidebar', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Viking Pure Sidebar'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'tabs' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Logo Section' , 'siteorigin-widgets' ),
					//'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
          'item_label' => array(
						'selector' => "[id*='tab_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
          'fields' => array(
            'tab_title' => array(
    					'type' 			=> 'text',
    					'label' 		=> __( 'Tab Title', 'siteorigin-widgets' ),
    					'default' 		=> '',
    				),
            'tab_url' => array(
							'type' => 'text',
							'label' => __( 'Tab ID', 'siteorigin-widgets' ),
							'description' => __( 'Tab ID must be in lower case without # symbol. Example: food_service',  'siteorigin-widgets' )
						),
            'image' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Choose Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
						'highlight' => array(
		        	'type' 		=> 'checkbox',
		        	'label' 	=> __( 'Highlight tab?', 'siteorigin-widgets' ),
		        	'default' => false
		    		),
          )
				),
				'top_padding' => array(
					'type' 		=> 'text',
					'label' 	=> __( 'Top Padding', 'siteorigin-widgets' ),
					'default' 		=> '20px',
					'description'	=>	__( 'Must be in pixels. Default value 20px', 'siteorigin-widgets' ),
				),
				'bottom_padding' => array(
					'type' 		=> 'text',
					'label' 	=> __( 'Bottom Padding', 'siteorigin-widgets' ),
					'default' 		=> '54px',
					'description'	=>	__( 'Must be in pixels. Default value 54px', 'siteorigin-widgets' ),
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/viking-sidebar"
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
siteorigin_widget_register('viking-sidebar', __FILE__, 'Viking_Pure_Sidebar');
