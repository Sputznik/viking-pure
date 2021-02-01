<?php
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
  $article_url = get_post_meta( get_the_ID(), 'linkedin_url', true );
?>
<div class="featured-img" style="background-image: url( <?php _e( $image );?> );">
  <a class="img-link" href="<?php _e( $article_url );?>"></a>
</div>
<div class="post-desc">
  <h3><a href="<?php _e( $article_url );?>"><?php the_title();?></a></h3>
  <a class="read-more" href="<?php _e( $article_url );?>">Read More</a>
</div>
