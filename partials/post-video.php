<?php
  global $youtube;
  $video_url = get_post_meta( get_the_ID(), 'video_url', true );
?>

<?php $youtube->create_video_thumb( $video_url, '200px' );?>
<div class="video-meta">
  <h5 class="video-title"><?php the_title();?></h5>
  <div class="video-desc"><?php the_content();?></div>
</div>
