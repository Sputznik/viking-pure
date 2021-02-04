<?php
  get_header();
  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
?>
<div id="content" class="container-fluid single-article single-template-6">
  <?php if( have_posts() ): while ( have_posts() ): the_post();?>
  <?php if( has_post_thumbnail() ):?>
    <div class="header_img" style="background-image:url(<?php _e( $image_url );?>);" role="img" aria-label="<?php _e( get_the_title( $post->ID ) ); ?>"></div>
  <?php endif;?>
    <div class="post-content narrow-col">
      <div class="post-meta">
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="post-date">Published on <?php the_time('F j, Y');?></div>
      </div>
      <div class="description">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile;endif;?>
</div>
<?php get_footer();?>
