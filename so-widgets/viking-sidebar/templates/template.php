<div class="tabs-wrapper">
  <div class="shape">
    <span class="headline">SELECT YOUR INDUSTRY</span>
  </div>
  <div class="viking-sidebar">
    <ul>
      <?php foreach( $instance['tabs'] as $item ):?>
      	<li>
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
