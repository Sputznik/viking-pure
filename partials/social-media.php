<?php

$icons = array(
	'youtube'  => array(
		'title'	=> 'Youtube',
		'icon'  => 'fa fa-youtube-play',
		'url'   => "https://www.youtube.com/channel/UC0lkFc13EdPX_HjCThhxDHw"
	),
	'li'  => array(
		'title'	=> 'Linkedin',
		'icon'	=> 'fa fa-linkedin-square',
		'url'   => "https://www.linkedin.com/company/viking-pure-solutions/"
	),
	'ig'  => array(
		'title'	=> 'Instagram',
		'icon'  => 'fa fa-instagram',
		'url'   => "https://www.instagram.com/vikingpure/"
	)
);

?>

<ul class="social-icons list-unstyled">
  <?php foreach( $icons as $key => $icon ): $class = $key." social-fa-icon"; ?>
    <li>
      <a class='<?php _e( $class ); ?>' title='<?php _e( $icon['title'] );?>' target='_blank' href='<?php _e( $icon['url'] );?>'>
				<i class='<?php _e( $icon['icon'] );?>'></i>
      </a>
    </li>
  <?php endforeach;?>
</ul>
