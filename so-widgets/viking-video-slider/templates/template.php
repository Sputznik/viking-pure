<?php

	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 4;
	}

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
			?>
			<div class="slide" >
				<div class='youtube-frame'>
					<iframe src="<?php _e( $embed_url );?>"></iframe>
				</div>
				<h5><?php _e($slide['video_title']);?></h5>
				<p><?php _e($slide['video_desc']);?></p>
			</div>
			<?php endforeach;?>
		</section>
	</div>
</div>
<!-- End Video Slider -->
