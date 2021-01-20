<?php
  global $youtube;
  $img_path = get_stylesheet_directory_uri().'/assets/logos/player-banner-btn.png';
  $embed_url = $youtube->get_youtube_link( $instance['banner_video_url'] );

?>
<div class="viking-play-banner">
  <div class="banner">
    <a href="#sp-youtube-modal" data-behaviour="sp-youtube" data-toggle="modal" data-url="<?php _e($embed_url);?>">
      <img src="<?php _e( $img_path );?>" alt="Play" />
    </a>
    <span class="banner-text"><?php _e( $instance['banner_text'] );?></span>
  </div>
</div>
