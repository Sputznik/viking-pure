<?php
  $spacing_top = !empty( $instance['top_padding'] ) ?  $instance['top_padding'] : '20px';
  $spacing = !empty( $instance['bottom_padding'] ) ?  $instance['bottom_padding'] : '54px';
  $img_path = get_stylesheet_directory_uri().'/assets/logos/arrow-up.png';
?>
<div class="tabs-wrapper">
  <div class="shape">
    <span class="headline">SELECT YOUR INDUSTRY</span>
  </div>
  <div class="viking-sidebar">
    <ul>
      <?php foreach( $instance['tabs'] as $item ):?>
        <?php
          $tab_class = 'normal';
          if( $item['highlight']){ $tab_class = 'highlight'; } ?>
          <li class="<?php _e( $tab_class );?>">
            <a href="<?php _e( $item['tab_url'] );?>">
              <div class="item">
                <img src="<?php _e( wp_get_attachment_url( $item['image'] ) );?>" />
                <span><?php _e( $item['tab_title'] );?></span>
              </div>
            </a>
          </li>
      <?php endforeach;?>
    </ul>
  </div>
</div>

<!-- BACK TO TOP -->
<a id="back-top" href="#" style="display:none;">
  <img src="<?php _e($img_path);?>" class="middle" alt="arrow-up">
  <span class="">MORE INDUSTRIES</span>
</a>

<style>
.viking-sidebar {
  padding-top: <?php _e($spacing_top);?>;
  padding-bottom: <?php _e($spacing)?>;
}
</style>
