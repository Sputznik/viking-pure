<?php
  global $post;
  $img_path = get_stylesheet_directory_uri().'/assets/logos';
  $btn_url = get_post_meta( get_the_ID(), 'learn_more', true );
  $title = get_the_title();
  $images = array(
    'healthcare'            => $img_path.'/health.png',
    'assisted-living'       => $img_path.'/living.png',
    'golf-courses'          => $img_path.'/golf.png',
    'food-restaurants'      => $img_path.'/food.png',
    'schools'               => $img_path.'/school.png',
    'hospitality'           => $img_path.'/hospitality.png',
    'commercial-buildings'  => $img_path.'/building.png',
  );
?>
<div class="case-study-wrapper">
  <div class="case-study-meta">
    <?php foreach ( $images as $key => $image ) :?>
      <?php if( $post->post_name == $key ):?>
        <img class="study-icon" src="<?php _e( $image );?>" alt="<?php _e( $key );?>">
      <?php endif;?>
    <?php endforeach;?>
    <h5 class="title"><?php _e( $title );?></h5>
    <p class="desc"><?php the_excerpt();?></p>
  </div>
  <a class="btn btn-learn-more" href="<?php _e( $btn_url );?>" target="_blank">LEARN MORE</a>
</div>
