<?php
$img_path = get_stylesheet_directory_uri().'/assets/logos/';
$video_url = get_post_meta( get_the_ID(), 'video_url', true );
$embed_url = get_youtube_link( $video_url  );
$thumbnail = get_video_thumbnail( $video_url );
$modal_id =  get_unique_id( $video_url );
$frame_id = get_unique_id( $video_url.'wrapper' );

?>
<div class="video-thumb youtube-frame" style="background-image: url( <?php _e( $thumbnail );?> );">
  <a class="play-btn" href="#<?php _e( $modal_id );?>" data-toggle="modal">
    <div class="overlay"></div>
  </a>
</div>
<div class="video-meta">
  <h5 class="video-title"><?php the_title();?></h5>
  <p class="video-desc"><?php the_excerpt();?></p>
</div>
<?php the_youtube_modal( $modal_id, $embed_url );?>
