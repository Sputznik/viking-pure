<?php
  $img_path = get_stylesheet_directory_uri().'/assets/logos/player-banner-btn.png';
  $video_url = $instance['banner_video_url'];
  $embed_url = str_replace( 'https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $video_url );
?>
<div class="viking-play-banner">
  <div class="banner">
    <a href="#viking-player-banner" data-toggle="modal">
      <img src="<?php _e( $img_path );?>" />
    </a>
    <span class="banner-text"><?php _e( $instance['banner_text'] );?></span>
  </div>
  <!-- Modal -->
  <?php the_youtube_modal( 'viking-player-banner', $embed_url );?>
</div>
