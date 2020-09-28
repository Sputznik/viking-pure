<?php
  $btn_text = get_post_meta( get_the_ID(), 'btn_text', true );
  $btn_url = get_post_meta( get_the_ID(), 'btn_url', true );
?>
<div class="press-release-wrapper">
  <div class="case-study-meta press-release-meta">
    <div class="desc"><?php the_excerpt();?></div>
  </div>
  <a class="btn btn-learn-more" href="<?php _e( $btn_url );?>" target="_blank"><?php _e( $btn_url );?></a>
</div>
