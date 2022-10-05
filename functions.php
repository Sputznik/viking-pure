<?php

/*  CONSTANTS */
if( !defined( 'VIKING_VERSION' ) ) {
  define( 'VIKING_VERSION', '2.0.0' );
}

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('viking-pure-css', get_stylesheet_directory_uri().'/assets/css/viking-pure.css', array('sp-core-style'), VIKING_VERSION );
  wp_enqueue_style('navbar-css', get_stylesheet_directory_uri().'/assets/css/navbar.css', array('sp-core-style','viking-pure-css'), VIKING_VERSION );
  wp_enqueue_script( 'video-slider-js', get_stylesheet_directory_uri().'/assets/js/video-slider.js', array( 'jquery' ), VIKING_VERSION, true );
  wp_enqueue_script( 'masonary-js', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), null, true );
  wp_enqueue_script( 'grid-js', get_stylesheet_directory_uri().'/assets/js/grid.js', array( 'jquery' ), VIKING_VERSION, true );
  wp_enqueue_script( 'filters-js', get_stylesheet_directory_uri().'/assets/js/filters.js', array( 'jquery' ), VIKING_VERSION, true );
  wp_enqueue_script( 'quotes-js', get_stylesheet_directory_uri().'/assets/js/quotes.js', array( 'jquery' ), VIKING_VERSION, true );

},99);

//Include Files
$inc_files = array(
  'lib/cpt/cpt.php',
  'lib/widgets/widgets.php',
  'lib/custom-fields/custom-fields.php',
  'lib/custom-header/header-functions.php',
  'lib/custom-footer/footer-functions.php',
  'lib/customize-theme/class-vkpt-customize.php'
);

foreach( $inc_files as $inc_file ){
  require_once( $inc_file );
}


/* ADD SOW FROM THE THEME */
add_action('siteorigin_widgets_widget_folders', function( $folders ){
  $folders[] = get_stylesheet_directory() . '/so-widgets/';
  return $folders;
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
  global $vkpt_customize;
  $green_seal = "green-seal-blue.png";
  $issa_member = "issa-blue.png";
  $omri_listed = "omri-listed.png";
  if( $list_class == 'viking-logos-mobile' ){
    $green_seal = "green-seal-white-footer.png";
    $issa_member = "issa-white.png";
    $omri_listed = "omri-listed-white.png";
  }
  ob_start();
	?>
	<ul class='list-inline <?php echo $list_class; ?>'>
		<?php if( $quoteBtn ):?>
		<li><?php echo getQuoteBtn();?></li>
		<?php endif; ?>
		<li>
			<a href="<?php _e( $vkpt_customize->get_certification_url('green_seal') ); ?>" target="_blank">
				<img class="logo-one" src="<?php echo get_stylesheet_directory_uri().'/assets/logos/'.$green_seal;?>" alt="Green Seal" />
			</a>
		</li>
		<li>
			<a href="<?php _e( $vkpt_customize->get_certification_url('wool_safe') ); ?>" target="_blank">
				<img class="logo-two" src="<?php echo get_stylesheet_directory_uri();?>/assets/logos/woolsafe-approved.svg" alt="Wool Safe"/>
			</a>
		</li>
    <li>
			<a href="<?php _e( $vkpt_customize->get_certification_url('issa_member') ); ?>" target="_blank">
				<img class="logo-three" src="<?php echo get_stylesheet_directory_uri().'/assets/logos/'.$issa_member;?>" alt="Issa Member" />
			</a>
		</li>
    <li>
			<a href="<?php _e( $vkpt_customize->get_certification_url('omri_listed') ); ?>" target="_blank">
				<img class="logo-four" src="<?php echo get_stylesheet_directory_uri().'/assets/logos/'.$omri_listed;?>" alt="Omri Listed" />
			</a>
		</li>
	</ul>
	<?php
	return ob_get_clean();
}

function getQuoteBtn(){
	return '<a target="_blank" href="#viking-quote-modal" data-toggle="modal" class="btn btn-quote">GET A QUOTE</a>';
}

// Override parent themes footer template
add_action('sp_pre_footer',function(){
  include('lib/custom-footer/footer-template.php');
},15);

//Override parent themes footer-class
add_filter( 'sp_prefooter_class', function(){ return 'container-fluid viking-footer-wrapper'; });

function getUniqueID( $data ){
	return substr( md5( json_encode( $data ) ), 0, 8 );
}

/* EXCERPT MORE */
add_filter( 'excerpt_more', function( $more ){
	return '&hellip;';
});
