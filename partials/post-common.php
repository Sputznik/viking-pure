<?php if( !empty( get_the_post_thumbnail() ) ) : $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>
  <div class="featured-img" style="background-image: url( <?php _e( $image );?> );" role="img" aria-label="<?php _e( get_the_title( $post->ID ) ); ?>">
    <a class="img-link" href="<?php the_permalink(); ?>"></a>
  </div>
<?php endif;?>
<div class="post-desc">
  <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
  <?php if( empty( get_the_post_thumbnail() ) ) :?>
    <div class="excerpt"><?php the_excerpt();?></div>
  <?php endif;?>
</div>
<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
