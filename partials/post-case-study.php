<?php
  $img_path = get_stylesheet_directory_uri().'/assets/logos';
  $btn_url = get_post_meta( get_the_ID(), 'learn_more', true );
  $icon = get_post_meta( get_the_ID(), 'study_icon', true );
?>
<div class="case-study-wrapper">
  <div class="case-study-meta">
    <?php if( isset( $icon ) && $icon ):?>
      <img class="study-icon" src="<?php _e( "$img_path/$icon.png" );?>" alt="<?php _e( $icon );?>" />
    <?php endif;?>
    <h5 class="title"><?php the_title();?></h5>
    <div class="desc"><?php the_excerpt();?></div>
  </div>
  <?php if( $btn_url ): ?>
    <a class="btn btn-learn-more" href="<?php _e( $btn_url );?>" target="_blank">LEARN MORE</a>
  <?php endif; ?>
</div>
