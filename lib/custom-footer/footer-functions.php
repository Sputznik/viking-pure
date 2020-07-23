<?php
/** Registering nav menu */
add_action( 'init', function(){
  register_nav_menus( array(
    'footer_one' 	  => __( 'Footer Menu 1', 'SPUTZNIK' ),
    'footer_two' 	  => __( 'Footer Menu 2', 'SPUTZNIK' ),
    'footer_three' 	=> __( 'Footer Menu 3', 'SPUTZNIK' ),
    'footer_four' 	=> __( 'Footer Menu 4', 'SPUTZNIK' )
  ) );
} );
