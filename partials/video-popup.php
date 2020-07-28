<?php
$video_url = $atts['video_url'];
$embed_url = get_youtube_link( $video_url  );
$thumbnail = get_video_thumbnail( $video_url );
$modal_id =  get_unique_id( $video_url );
$frame_id = get_unique_id( $video_url.'wrapper' );
?>
<div id="video-<?php _e( $frame_id );?>" class="viking-video-popup">
  <div class="youtube-frame popup">
    <a class="play-btn" href="#<?php _e( $modal_id );?>" data-toggle="modal">
      <div class="overlay"></div>
    </a>
  </div>
  <?php the_youtube_modal( $modal_id, $embed_url );?>
</div>
<style>
<?php _e( '#video-'.$frame_id )?> .youtube-frame.popup{background-image: url(<?php _e( $thumbnail );?>);}
</style>
