<?php get_header(); ?>
<div class="archive-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="title"><?php the_archive_title();?></h2>
        <?php if( have_posts() ) : ?>
        <div class="archive-content">
          <ul class="orbit-three-grid list-unstyled">
            <?php while (have_posts()) : the_post(); ?>
            <li class="orbit-article-db orbit-list-db">
              <?php get_template_part('partials/post', 'common');?>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
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
