<div class="sticky-transparent-header" data-spy="affix" data-offset-top="80">
  <nav class="navbar navbar-default header5">
    <div class="container-fluid"><!-- .container-->
      <!-- Brand and toggle get grouped for better mobile display -->
  		<div class="navbar-header">

				<a href="<?php bloginfo('url');?>" class='main-logo'>
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/logos/viking-pure-logo.svg" />
				</a>

  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar top-bar "></span>
  				<span class="icon-bar middle-bar"></span>
  				<span class="icon-bar bottom-bar"></span>
  			</button>
			</div>
  		<?php do_action('sp_nav_menu');?>
			<?php echo getCertificationLogos();?>
    </div><!-- /.container-->
  </nav>
</div>
