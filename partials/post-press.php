<?php
  $btn_text = get_post_meta( get_the_ID(), 'btn_text', true );
  $btn_url = get_post_meta( get_the_ID(), 'btn_url', true );
?>
<div class="press-release-wrapper">
  <div class="press-release-meta">
    <div class="desc"><?php the_excerpt();?></div>
  </div>
  <?php if( $btn_text ): ?>
    <a class="btn btn-learn-more" href="<?php _e( $btn_url );?>" target="_blank"><?php _e( $btn_text );?></a>
  <?php endif; ?>
</div>
