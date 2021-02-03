<?php
  global $youtube;
  $video_url    = get_post_meta( get_the_ID(), 'video_url', true );
  $external_url = get_post_meta( get_the_ID(), 'external_url', true );
  $image_url    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
?>
<?php if( isset( $external_url ) && $external_url ): ?>
<div class="sp-youtube-frame" style="background-image: url(<?php _e( $image_url )?>); height: 200px">
  <a class="play-btn" href="<?php _e( $external_url );?>" target="_blank">
    <div class="overlay"></div>
  </a>
</div>
<?php else: $youtube->create_video_thumb( $video_url, get_the_title( $post->ID ), '200px' ); endif;?>
<div class="video-meta">
  <h5 class="video-title"><?php the_title();?></h5>
  <div class="video-desc"><?php the_content();?></div>
</div>
