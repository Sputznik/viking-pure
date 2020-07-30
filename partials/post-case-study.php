<?php $btn_url = get_post_meta( get_the_ID(), 'learn_more', true );?>
<div class="case-study-wrapper">
  <div class="case-study-meta">
    <h5 class="title"><?php the_title();?></h5>
    <p class="desc"><?php the_excerpt();?></p>
  </div>
  <a class="btn btn-learn-more" href="<?php _e( $btn_url );?>" target="_blank">LEARN MORE</a>
</div>
