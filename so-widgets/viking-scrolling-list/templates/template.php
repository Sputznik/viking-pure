<div class="viking-scrolling-wrapper">
  <ul class="list-unstyled horizontallist-images">
    <?php foreach( $instance['image_repeater'] as $item  ):?>
    	<li class="orbit-article">
        <div class='orbit-post-image'>
          <img src="<?php _e( wp_get_attachment_url( $item['item_image']) );?>" alt="viking-image">
        </div>
      </li>
    <?php endforeach;?>
  </ul>
</div>
