<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('viking-pure-css', get_stylesheet_directory_uri().'/assets/css/viking-pure.css', array('sp-core-style'), '1.0.14' );
  wp_enqueue_script( 'video-slider-js', get_stylesheet_directory_uri().'/assets/js/video-slider.js', array( 'jquery' ), '1.0.3', true );
  wp_enqueue_script( 'masonary-js', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), null, true );
  wp_enqueue_script( 'grid-js', get_stylesheet_directory_uri().'/assets/js/grid.js', array( 'jquery' ), '1.0.0', true );

},99);

//Include Files
include('lib/custom-header/header-functions.php');
include('lib/custom-footer/footer-functions.php');
include('lib/cpt/cpt.php');
include('lib/custom-fields/custom-fields.php');

/* ADD SOW FROM THE THEME */
add_action('siteorigin_widgets_widget_folders', function( $folders ){
  $folders[] = get_stylesheet_directory() . '/so-widgets/';
  return $folders;
});

function get_unique_id( $atts ){
  return substr( md5( json_encode( $atts ) ), 0, 8 );
}

// Youtube embed url
function get_youtube_link( $video_url ){
  $video_url = str_replace( 'https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $video_url );
  return $video_url;
}

// Youtube video thumbnail
function get_video_thumbnail( $video_url ){
  $url_components = parse_url( $video_url );
  $video_id = substr( $url_components['query'], 2 );
  $thumbnail = "http://img.youtube.com/vi/$video_id/mqdefault.jpg";
  return $thumbnail;
}

function the_youtube_modal( $id, $youtube_link ){
  ?>
  <div id="<?php _e( $id );?>" class="ytube-video modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body text-center">
          <iframe width="420" height="315" src="<?php echo $youtube_link;?>"></iframe>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <?php
}

// VIDEO POPUP SHORTCODE
add_shortcode( 'viking_video_popup',function( $atts ){
  $atts = shortcode_atts(array(
    'video_url' => '',
  ), $atts, 'viking_video_popup');

  ob_start();
  require( get_stylesheet_directory().'/partials/video-popup.php' );
  return ob_get_clean();
});


/*
// Header Right Logos
function headerRightLogos( $logoType='normal' ){
  $flag = $logoType == 'white' ? false : true;
  $img_path = get_stylesheet_directory_uri().'/assets/logos/';
  $html = '';
  if( $flag ){
    $html .='<img class="logo-one" src="'.$img_path.'greenseal.png"/>';
  }
  else{
    $html .='<img class="logo-one" src="'.$img_path.'greenseal_white.png"/>';
  }
  $html .='<img class="logo-two" src="'.$img_path.'woolsafee.png"/>';
  return $html;
}




/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
add_filter('wp_nav_menu_items', function( $items, $args ){
	if( $args->theme_location == 'primary' ){
		$items = "<li>" . getCertificationLogos( false, 'viking-logos-mobile' ) . "</li>" . $items . "<li>" . getQuoteBtn() . "</li>";
	}
  return $items;
}, 10, 2);


function getCertificationLogos( $quoteBtn = true, $list_class = 'viking-logos' ){
	ob_start();
	?>
	<ul class='list-inline <?php echo $list_class; ?>'>
		<?php if( $quoteBtn ):?>
		<li><?php echo getQuoteBtn();?></li>
		<?php endif; ?>
		<li>
			<a href="#">
				<img class="logo-one" src="<?php echo get_stylesheet_directory_uri();?>/assets/logos/green-seal-certified.svg" />
			</a>
		</li>
		<li>
			<a href="#">
				<img class="logo-two" src="<?php echo get_stylesheet_directory_uri();?>/assets/logos/woolsafe-approved.svg" />
			</a>
		</li>
	</ul>
	<?php
	return ob_get_clean();
}

function getQuoteBtn(){
	return '<a target="_blank" href="#" class="btn btn-quote">GET A QUOTE</a>';
}



// Override parent themes footer template
add_action('sp_pre_footer',function(){
  include('lib/custom-footer/footer-template.php');
},15);

//Override parent themes footer-class
add_filter( 'sp_prefooter_class', function(){ return 'container-fluid viking-footer-wrapper'; });

add_action( 'widgets_init', function(){
  register_sidebar( array(
    'name'          => 'Viking Pre Footer',
    'id'            => 'viking-prefooter',
    'description'   => 'Appears above the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
});
