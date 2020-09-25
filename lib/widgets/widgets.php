<?php

add_action( 'widgets_init', function(){

  register_sidebar( array(
    'name'          => 'Viking Pre Footer',
    'id'            => 'viking-prefooter',
    'description'   => 'Appears above the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => 'Viking News Letter',
    'id'            => 'viking-newsletter',
    'description'   => 'Appears in the newsletter modal',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => 'Get A Quote',
    'id'            => 'viking-get-quote',
    'description'   => 'Appears in the get a quote modal',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

});
