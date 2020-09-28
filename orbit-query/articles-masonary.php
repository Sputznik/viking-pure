<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled articles-masonary">

  <li class="grid-sizer"></li>
  <li class="gutter-sizer"></li>

  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>

  <?php
    $post_type = get_post_type();
    $post_id = get_the_ID();
  ?>

  <?php if( $post_type === 'videos'):?>
    <li class="orbit-article" data-post_type="videos" data-id="<?php _e( $post_id );?>" >
      <?php get_template_part( "partials/post", "video" );?>
    </li>
  <?php endif;?>

  <?php if( $post_type === 'quotes'):?>
    <li class="orbit-article" data-post_type="quotes" data-id="<?php _e( $post_id );?>" >
      <?php get_template_part( "partials/post", "quotes" );?>
    </li>
  <?php endif;?>

  <?php if( $post_type === 'case-study'):?>
    <li class="orbit-article" data-post_type="articles" data-id="<?php _e( $post_id );?>" >
      <?php get_template_part( "partials/post", "case-study" );?>
    </li>
  <?php endif;?>

  <?php if( $post_type === 'press'):?>
    <li class="orbit-article" data-post_type="press" data-id="<?php _e( $post_id );?>" >
      <?php get_template_part( "partials/post", "press" );?>
    </li>
  <?php endif;?>

  <?php endwhile;?>
</ul>
