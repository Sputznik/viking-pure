<?php $article_url = get_post_meta( get_the_ID(), 'linkedin_url', true ); ?>
<?php if( !empty( get_the_post_thumbnail() ) ) : $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>
  <div class="featured-img" style="background-image: url( <?php _e( $image );?> );">
    <a class="img-link" href="<?php _e( $article_url );?>"></a>
  </div>
<?php endif;?>
<div class="post-desc">
  <h3><a href="<?php _e( $article_url );?>"><?php the_title();?></a></h3>
  <?php if( empty( get_the_post_thumbnail() ) ) :?>
    <div class="excerpt"><?php the_excerpt();?></div>
  <?php endif;?>
</div>
<a class="read-more" href="<?php _e( $article_url );?>">Read More</a>
