<?php

	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 4;
	}
	$img_path = get_stylesheet_directory_uri().'/assets/logos/';
?>

<!-- Video Slider -->
<div class="fullwidth">
	<div class="container-logos" style="max-width:1170px;margin:0 auto;">
		<h3 class="thin"><?php _e( $instance['title'] );?></h3>
		<section data-behaviour="videos-slick" data-items="<?php _e( $instance['show_slides'] );?>" class="slider">
			<?php foreach( $instance['slides'] as $slide ):?>
			<?php
				// Change youtube video url
				$video_url = $slide['video_url'];
				$embed_url = str_replace( 'https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $video_url );
				$url_components = parse_url( $video_url );
				$video_id = substr( $url_components['query'], 2 );
				$modal_id =  get_unique_id( $video_url );
				$thumbnail = "http://img.youtube.com/vi/$video_id/mqdefault.jpg";
			?>
			<div class="slide" >
				<div class='youtube-frame'>
					<a class="play-btn" href="#<?php _e( $modal_id );?>" data-toggle="modal">
						<img src="<?php _e( $thumbnail );?>"/>
						<div class="overlay"></div>
					</a>
				</div>
				<h5><?php _e($slide['video_title']);?></h5>
				<p><?php _e($slide['video_desc']);?></p>
			</div>
			<?php endforeach;?>
		</section>
	</div>
</div>
<?php
// Create modal for different videos
foreach( $instance['slides'] as $slide ){
	$video_url = $slide['video_url'];
	$embed_url = str_replace( 'https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $video_url );
	$video_url = $slide['video_url'];
	$modal_id =  get_unique_id( $video_url );
	the_youtube_modal( $modal_id, $embed_url );
}
?>
<!-- End Video Slider -->
<style>

.youtube-frame .play-btn:after {
	content: url('<?php _e($img_path.'/play-btn.png');?>');
}
.slick-prev:before, [dir='rtl'] .slick-prev:before{
	content: url('<?php _e($img_path.'/left-arrow.svg');?>');
}

.slick-next:before, [dir='rtl'] .slick-next:before{
  content: url('<?php _e($img_path.'/right-arrow.svg');?>');
}

</style>
