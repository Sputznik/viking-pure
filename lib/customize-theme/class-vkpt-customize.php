<?php

class VIKING_THEME_CUSTOMIZE {

  function __construct(){

    add_action('customize_register', function( $wp_customize ){
      global $sp_customize;
      $sp_customize->section( $wp_customize, 'sp_theme_panel', 'vk_cert_section',  "Certification Logos", "Certification Logos" );
      foreach( $this->get_certification_logos() as $slug => $logo ){
        $sp_customize->text( $wp_customize, 'vk_cert_section', '[vkpt_cert_logos]['.$slug.']', $logo['label'], '');
      }
    });

  }

  function get_certification_logos(){
    return array(
      'green_seal' => array(
        'label'	=> 'Green Seal URL'
      ),
      'wool_safe' => array(
        'label'	=> 'Wool Safe URL'
      ),
      'issa_member' => array(
        'label'	=> 'Issa Member URL'
      )
    );
  }

  function get_certification_url( $name ){
    global $sp_customize;
    $logos = $sp_customize->get_one_option( 'vkpt_cert_logos' , '' );
    if( !empty( $logos ) && isset( $logos[$name] ) && $logos[$name] ){
      return $logos[$name];
    }
    return '#';
  }

}

global $vkpt_customize;

$vkpt_customize = new VIKING_THEME_CUSTOMIZE;
