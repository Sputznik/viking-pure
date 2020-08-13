<?php

	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 6;
	}

?>

<!-- Logos -->
<div class="fullwidth">
	<div class="container-logos" style="max-width:1170px;">
		<h3 class="thin"><?php _e( $instance['title'] );?></h3>
		<section data-behaviour="logos-slick" data-items="<?php _e( $instance['show_slides'] );?>" class="customer-logos slider">
			<?php foreach( $instance['slides'] as $slide ):?>
				<a href="#logo-<?php echo getUniqueID( $slide ); ?>" data-behaviour="viking-quote">
					<div class="slide">
						<img src="<?php _e( wp_get_attachment_url( $slide['image'] ) );?>" />
					</div>
				</a>
			<?php endforeach;?>
		</section>
	</div>
</div>

<!-- Quotes Wrapper -->
<div class="quotes-wrapper">
	<?php foreach ( $instance['slides'] as $i => $slide ) :  ?>
	<div class="quote-pane <?php echo $i == 0 ? 'active' : ''; ?>" id="logo-<?php echo getUniqueID( $slide ); ?>">
		<?php echo siteorigin_panels_render( 'quote-desc-'.$i, true, $slide['quote_content'] );?>
	</div>
<?php endforeach;?>
</div>
<!-- Quotes Wrapper -->

<!-- End Logos -->
