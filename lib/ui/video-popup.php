<?php
$img_path = get_stylesheet_directory_uri().'/assets/logos/';
$video_height = $height;
$embed_url = $this->get_youtube_link( $url  );
$thumbnail = $this->get_video_thumbnail( $url );
?>
<div class="youtube-frame" style="background-image: url(<?php _e( $thumbnail );?>);height: <?php _e($height);?>">
  <a class="play-btn" href="#dynamicModal" data-toggle="modal" data-behaviour="sp-youtube" data-url="<?php _e( $embed_url );?>">
    <div class="overlay"></div>
  </a>
</div>
<style>
.youtube-frame .play-btn:after {
	content: url('<?php _e( $img_path.'/play-btn.png' );?>');
}
</style>
