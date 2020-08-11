<?php
	class SP_YOUTUBE_VIDEO{
		function __construct(){
			add_action( 'wp_enqueue_scripts', array( $this,'modal_script' ) );
		}
		/*ENQUEUE DYNAMIC MODAL SCRIPT */
		function modal_script(){
			wp_enqueue_script( 'dynamic-modal', get_stylesheet_directory_uri().'/assets/js/video-modal.js', array( 'jquery' ), '1.0.0', true );
		}
    // YOUTUBE EMBED URL
    function get_youtube_link( $video_url ){
			$video_id = $this->get_video_id( $video_url );
      return $video_id;
    }
		function get_video_id( $video_url ){
			$url_components = parse_url( $video_url );
      $video_id = substr( $url_components['query'], 2 );
			return $video_id;
		}
    // YOUTUBE VIDEO THUMBNAIL
    function get_video_thumbnail( $video_url ){
			$video_id = $this->get_video_id( $video_url );
      $thumbnail = "http://img.youtube.com/vi/$video_id/mqdefault.jpg";
      return $thumbnail;
    }
		// RETURNS YOUTUBE VIDEO THUMB UI
		function create_video_thumb( $url, $height = '160px' ){
			require( get_stylesheet_directory().'/lib/ui/video-popup.php' );
		}
	}
	global $youtube;
	$youtube = new SP_YOUTUBE_VIDEO;
