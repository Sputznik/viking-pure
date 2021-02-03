<?php

	global $youtube;

	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 4;
	}
	$img_path = get_stylesheet_directory_uri().'/assets/logos/';

?>

<!-- Video Slider -->
<div class="fullwidth">
	<div class="container-videos">
		<h3 class="thin"><?php _e( $instance['title'] );?></h3>
		<section data-behaviour="videos-slick" data-items="<?php _e( $instance['show_slides'] );?>" class="slider">
			<?php foreach( $instance['slides'] as $slide ):?>
			<div class="slide">
				<?php $youtube->create_video_thumb( $slide['video_url'], $slide['video_title'] );?>
				<h5><?php _e($slide['video_title']);?></h5>
				<p><?php _e($slide['video_desc']);?></p>
			</div>
			<?php endforeach;?>
		</section>
	</div>
</div>
<!-- End Video Slider -->
<style>

.slick-prev:before, [dir='rtl'] .slick-prev:before{
	content: url('<?php _e($img_path.'/left-arrow.svg');?>');
}

.slick-next:before, [dir='rtl'] .slick-next:before{
  content: url('<?php _e($img_path.'/right-arrow.svg');?>');
}

</style>
