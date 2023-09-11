<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('');?></title>
		<?php wp_head();?>
	</head>
	<body <?php body_class(); ?>>
    <nav class="cbat-nav navbar navbar-expand-lg shadow-sm fixed-top navbar-light bg-light border-bottom">
		  <div class="container">
		    <?php do_action('sp_logo');?>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbar-supported-content" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <?php
		      wp_nav_menu( array(
		        'menu'              => 'primary',
		        'theme_location'    => 'primary',
		        'depth'             => 2,
		        'container'         => 'div',
		        'container_class'   => 'collapse navbar-collapse justify-content-end',
		        'container_id'      => 'navbar-supported-content',
		        'menu_class'        => 'navbar-nav mb-2 mb-lg-0',
		        'fallback_cb'       => 'WP_Bootstrap_Five_Navwalker::fallback',
		        'walker'            => new WP_Bootstrap_Five_Navwalker()
		      ) );
		    ?>
		  </div>
		</nav>
