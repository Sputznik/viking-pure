<div class="container-fluid header-white-bg">
  <h6>
    <a href="https://vikingpure.com/wp-content/uploads/2020/11/VikingPure__EPA_LISTN__PressRelease.pdf" target="_blank" rel="noreferrer noopener" aria-label="This link opens in a new tab.">
      Viking Pure Disinfectant added to EPA's "List-N" Products Approved to Kill COVID-19. EPA #87542-1.
    </a>
  </h6>
</div>
<div class="container-fluid header-blue-bg">
  <a href="#newsletter-modal" data-toggle="modal" class="newsletter-btn">
    <h6>SIGN UP FOR OUR NEWSLETTER <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/logos/header-arrow.png" alt="Arrow Right" /></span> </h6>
  </a>
</div>
<div class="sticky-transparent-header" data-spy="affix" data-offset-top="80">
  <nav class="navbar navbar-default header5">
    <div class="container-fluid"><!-- .container-->
      <!-- Brand and toggle get grouped for better mobile display -->
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar top-bar "></span>
  				<span class="icon-bar middle-bar"></span>
  				<span class="icon-bar bottom-bar"></span>
  			</button>
        <?php do_action('sp_logo');?>
			</div>
  		<?php do_action('sp_nav_menu'); do_shortcode('vp_odometer');?>
			<?php echo getCertificationLogos();?>
    </div><!-- /.container-->
  </nav>
</div>
