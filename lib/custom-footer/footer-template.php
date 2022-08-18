<?php global $vkpt_customize; ?>
<div class="viking-footer-wrapper-inner">
	<div class="viking-prefooter">
		<div class="container">
	  	<?php if( is_active_sidebar( 'viking-prefooter' ) ){ dynamic_sidebar( 'viking-prefooter' );}?>
		</div>
	</div>
	<?php $img_path = get_stylesheet_directory_uri().'/assets/logos';?>
	<div class="viking-footer">
	  <?php $menus = array(
	    'footer_one' => 'ABOUT US',
	    'footer_two'  =>  'PRODUCTS',
	    'footer_three'=> 'INDUSTRIES',
	    'footer_four' =>  'CUSTOMERS'
	  );?>
	  <?php foreach( $menus as $key => $title ):?>
	    <div class="footer-menus">
	      <h6><?php _e($title);?></h6>
	      <?php if ( has_nav_menu( $key ) ):
	            wp_nav_menu(
	              array(
	              'theme_location' => $key,
	              'menu_class' => 'list-unstyled'
	              )
	            );
	      endif;?>
	    </div>
	  <?php endforeach;?>
	</div>
	<div class="footer-section-two">
		<div class="site-logo">
			<a href="<?php _e( get_bloginfo('url') );?>">
		  	<img class="left-logo" src="<?php _e( "$img_path/viking-logo.png" );?>" alt="Viking Pure" />
			</a>
		</div>
		<div class="contact">
			<p>
				4400 Eastport Park Way, Port Orange, FL 32127
				+1 (386) 428-9800
			</p>
			<?php get_template_part( 'partials/social', 'media' );?>
		</div>
	  <div class="logos">
			<div class="logos-section-one">
				<a href="<?php _e( $vkpt_customize->get_certification_url('green_seal') ); ?>">
		    	<img src="<?php _e( "$img_path/green-seal-white-footer.png" );?>" alt="Green Seal" />
				</a>
				<a href="<?php _e( $vkpt_customize->get_certification_url('wool_safe') ); ?>">
		    	<img src="<?php _e( "$img_path/woolsafe-approved.svg" );?>" alt="Wool Safe" />
				</a>
				<a href="<?php _e( $vkpt_customize->get_certification_url('issa_member') ); ?>">
		    	<img src="<?php _e( "$img_path/issa-white.png" );?>" alt="Issa Member" />
				</a>
			</div>
			<div class="logos-section-two">
				<a href="https://service.ariba.com/Discovery.aw/ad/profile?key=AN11114974506">
		    	<img src="<?php _e( "$img_path/ariba-network.jpeg" );?>" alt="Ariba Network" />
				</a>
			</div>
	  </div>
	</div>
</div>

<?php if( is_active_sidebar( 'viking-about-us-footer' ) && is_page('about-us') ): ?>
	<div class="about-us-footer">
		<?php dynamic_sidebar( 'viking-about-us-footer' );?>
	</div>
<?php endif;?>

<?php
	$modals = array(
		'newsletter' => array(
			'id' 				=> 'viking-newsletter',
			'modal-id'	=> 'newsletter-modal'
		),
		'quote' => array(
			'id' 				=> 'viking-get-quote',
			'modal-id'	=> 'viking-quote-modal'
		)
	);
?>

<!-- Modal -->
<?php foreach ( $modals as $modal ): ?>
	<?php if( is_active_sidebar( $modal['id'] ) ):?>
	<div class="modal fade" id="<?php _e( $modal['modal-id'] ); ?>" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
	        <?php dynamic_sidebar( $modal['id'] ); ?>
	      </div>
	    </div>
	  </div>
	</div>
	<?php endif;?>
<?php endforeach;?>
<!--  Modal -->
