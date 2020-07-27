<?php
  $highlight          = $instance['highlight'];
  $design             = $instance['design_section'];
  $headline_alignment = $design['headline_alignment'];
  $headline_color     = $design['headline_color'];
  $item_color         = $design['item_color'];
  $max_width          = !empty( $design['bullet_list_width'] ) ? $design['bullet_list_width'] : '800px';
  $gutter             = !empty( $design['bullet_list_gutter'] ) ? $design['bullet_list_gutter'] : '100px' ;;
?>

<div class="bullet-list-wrapper">
  <?php if($headline_alignment == 'center'):?>
    <div class="headline">
      <h3><?php _e($instance['bullet_headline']);?></h3>
    </div>
  <?php endif;?>
  <div class="bullet-list-content">
    <?php if($headline_alignment == 'left'):?>
      <div class="headline headline-left">
        <h3><?php _e($instance['bullet_headline']);?></h3>
      </div>
    <?php endif;?>

      <!-- Bullet List -->
      <div class="bullet-list">
        <ul>
          <?php foreach( $instance['bullet_items'] as $item ):?>
            <li>
              <div class="item">
                <img src="<?php _e( wp_get_attachment_url( $item['bullet_image'] ) );?>" />
                <span><?php _e( $item['bullet_title'] );?></span>
              </div>
            </li>
          <?php endforeach;?>
        </ul>
      </div>
    <!-- End Bullet List -->

  </div>
  <!-- End Bullet List Content -->

</div>
<style>

<?php if( $headline_alignment == 'left' ):?>
  .bullet-list-wrapper .bullet-list-content{
    grid-template-columns: 1fr 2fr;
  }
<?php endif;?>

.bullet-list-wrapper .bullet-list ul,
.bullet-list-wrapper .bullet-list-content{
  grid-column-gap:  <?php _e($gutter);?>;
}
.bullet-list-wrapper .headline h3{
  color: <?php _e( $headline_color );?>;
}
.bullet-list-wrapper .bullet-list span {
  color: <?php _e( $item_color );?>;
}
@media(min-width:769px){
  .bullet-list-wrapper{
    width: <?php _e($max_width);?>;
  }
}

</style>
