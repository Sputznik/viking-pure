<div class="container-fluid header-white-bg">
  <h6>Viking Pure Disinfectant added to EPA's "List N": EPA #87542-1.</h6>
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
  		<?php do_action('sp_nav_menu');?>
			<?php echo getCertificationLogos();?>
    </div><!-- /.container-->
  </nav>
</div>
