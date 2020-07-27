<?php
$video_url = $atts['video_url'];
$embed_url = str_replace( 'https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $video_url  );
$url_components = parse_url( $video_url );
$video_id = substr( $url_components['query'], 2 );
$modal_id =  get_unique_id( $video_url );
$thumbnail = "http://img.youtube.com/vi/$video_id/mqdefault.jpg";
?>
<div class="viking-video-popup">
  <div class="youtube-frame popup">
    <a class="play-btn" href="#<?php _e( $modal_id );?>" data-toggle="modal">
      <div class="overlay"></div>
    </a>
  </div>
  <?php the_youtube_modal( $modal_id, $embed_url );?>
</div>
<style>
.youtube-frame.popup{background-image: url(<?php _e( $thumbnail );?>);}
</style>
