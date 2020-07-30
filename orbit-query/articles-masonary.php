<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled articles-masonary">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>

  <?php $post_type = get_post_type();?>

  <?php if( $post_type === 'videos'):?>
    <li class="orbit-article">
      <?php get_template_part( "partials/post", "video" );?>
    </li>
  <?php endif;?>

  <?php if( $post_type === 'quotes'):?>
    <li class="orbit-article">
      <?php get_template_part( "partials/post", "quotes" );?>
    </li>
  <?php endif;?>

  <?php if( $post_type === 'case-study'):?>
    <li class="orbit-article">
      <?php get_template_part( "partials/post", "case-study" );?>
    </li>
  <?php endif;?>

  <?php endwhile;?>
</ul>
