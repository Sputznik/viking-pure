<?php $quote_image = get_post_meta( get_the_ID(), 'quote_logo', true );?>
<div class="quote-content">
  <?php the_content();?>
</div>
<div class="quote-logo">
	<img class="avatar" src="<?php _e( $quote_image );?>" style="width:100%;"/>
</div>
