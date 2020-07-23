<?php $img_path = get_stylesheet_directory_uri().'/assets/logos';?>
<div class="viking-footer">
  <?php $menus = array(
    'footer_one' => 'ABOUT US',
    'footer_two'  =>  'PRODUCTS',
    'footer_three'=> 'INDUSTRIES',
    'footer_four' =>  'CUSTOMERS'
  );?>
  <?php foreach( $menus as $key => $title ):?>
    <div class="footer-menus">
      <h6><?php _e($title);?></h6>
      <?php if ( has_nav_menu( $key ) ):
            wp_nav_menu(
              array(
              'theme_location' => $key,
              'menu_class' => 'list-unstyled'
              )
            );
      endif;?>
    </div>
  <?php endforeach;?>
</div>
<div class="footer-section-two">
  <img class="left-logo" src="<?php _e( "$img_path/viking-pure-logo-white.svg" );?>">
    <p class="contact">
      4400 Eastport Park Way, Port Orange, FL 32127
      +1 (386) 428-9800
    </p>
  <div class="logos">
    <img src="<?php _e( "$img_path/green-seal-certified-white.svg" );?>">
    <img src="<?php _e( "$img_path/woolsafe-approved.svg" );?>">
  </div>
</div>
