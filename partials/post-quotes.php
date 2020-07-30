<?php
  // Make the quote content to beb bold
  $author_name = get_post_meta( get_the_ID(), 'author_name', true );
  $author_image = get_post_meta( get_the_ID(), 'author_avatar', true );
  $author_desc = get_post_meta( get_the_ID(), 'author_details', true );
?>
<div class="blue-decoration"></div>
<div class="quote-content">
  <?php the_content();?>
</div>
<div class="meta quotes-author-meta">
  <div class="media-left">
		<img class="avatar" src="<?php _e( $author_image );?>">
	</div>
	<div class="media-body">
		<div class="author-name"><?php _e( $author_name );?></div>
    <span class="author-desc"><?php _e( $author_desc );?></span>
	</div>
</div>
