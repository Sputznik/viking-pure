<?php $highlight = $instance['highlight']; ?>
<div class="tabs-wrapper">
  <div class="shape">
    <span class="headline">SELECT YOUR INDUSTRY</span>
  </div>
  <div class="viking-sidebar">
    <ul>
      <?php $i=1; foreach( $instance['tabs'] as $item ):?>
        <?php if( $highlight == true && $i == 1): ?>
        <li style="background-color: #68b2cb;">
          <a href="<?php _e( $item['tab_url'] );?>">
            <div class="item">
              <img src="<?php _e( wp_get_attachment_url( $item['image'] ) );?>" />
              <span style="color: #ffffff;"><?php _e( $item['tab_title'] );?></span>
            </div>
          </a>
        </li>
      <?php else: ?>
        <li>
          <a href="<?php _e( $item['tab_url'] );?>">
            <div class="item">
              <img src="<?php _e( wp_get_attachment_url( $item['image'] ) );?>" />
              <span><?php _e( $item['tab_title'] );?></span>
            </div>
          </a>
        </li>
      <?php endif;?>
      <?php $i++; endforeach;?>
    </ul>
  </div>
</div>
