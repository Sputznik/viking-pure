<?php get_header(); ?>
<div class="archive-articles-wrapper">
  <div class="title">
    <h2><?php the_archive_title();?></h2>
  </div>
  <?php if( have_posts() ) : ?>
    <div class="container archive-content">
      <ul class="list-unstyled viking-grid-3">
        <?php while( have_posts() ) : the_post(); ?>
          <li class="post-item">
            <?php get_template_part( 'partials/post', 'common'); ?>
          </li>
        <?php endwhile;?>
      </ul>
    </div>
  <?php endif; ?>
  <!-- PAGINATION -->
  <div class="container-fluid search-pagination">
    <div class="container text-center">
      <?php
        the_posts_pagination(
          array(
            'mid_size' 	=> 1,
            'prev_text' => __( '&laquo;' ),
            'next_text' => __( '&raquo;' ),
            'screen_reader_text' => __( ' ' ),
          )
        );
      ?>
    </div>
  </div>
</div>
<?php get_footer();?>
