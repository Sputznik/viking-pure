<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('viking-pure-css', get_stylesheet_directory_uri().'/assets/css/viking-pure.css', array('sp-core-style'), '1.0.3' );
  wp_enqueue_script( 'video-slider-js', get_stylesheet_directory_uri().'/assets/js/video-slider.js', array( 'jquery' ), '1.0.0', true );
},99);

//Include Files
include('lib/custom-header/header-functions.php');

/* ADD SOW FROM THE THEME */
add_action('siteorigin_widgets_widget_folders', function( $folders ){
  $folders[] = get_stylesheet_directory() . '/so-widgets/';
  return $folders;
});

/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){
  $img_path = get_stylesheet_directory_uri().'/assets/logos/';
  $html .='<a target="_blank" href="#" class="btn btn-quote">GET A QUOTE</a>';
  $html .='<img class="logo-one" src="'.$img_path.'greenseal.png"/>';
  $html .='<img class="logo-two" src="'.$img_path.'woolsafe.png"/>';

  if( $args->theme_location == 'primary' ){
      $items .= '<li class="menu-item navbar-nav pull-right"><div class="header-right">'.$html.'</div></li>';
  }
  return $items;
}
