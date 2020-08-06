<?php
  $arrow = get_stylesheet_directory_uri().'/assets/logos/';
?>
<!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
		<?php $slide=0; foreach( $instance['carousel_items'] as $item  ):?>
      <?php $indicator=" ";if($slide==0){$indicator= "active";}?>
			<li data-target="#carousel-example-generic" data-slide-to="<?php _e( $slide );?>" class="<?php _e($indicator);?>"></li>
		<?php  $slide++; endforeach;?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

	<?php $i=0; foreach( $instance['carousel_items'] as $item ):?>
  	<?php $class=" ";if($i==0){$class= "active";}
      $image = wp_get_attachment_url( $item['carousel_image']);
    ?>
		<div class="item <?php _e( $class );?>">
      <div class="item-body">
        <img src="<?php _e( $image );?>" alt="carousel-image">
        <div class="item-content">
          <?php echo siteorigin_panels_render( 'carousel-desc-'.$i, true, $item['carousel_content'] );?>
        </div>
      </div>
		</div>
	<?php $i++; endforeach;?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" data-target="#carousel-example-generic" role="button" data-slide="prev">
    <span>
      <img src="<?php _e($arrow.'left-arrow.svg')?>" />
    </span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" data-target="#carousel-example-generic" role="button" data-slide="next">
    <span>
      <img src="<?php _e($arrow.'right-arrow.svg')?>" />
    </span>
    <span class="sr-only">Next</span>
  </a>
</div>
