<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head> 
		<title><?php wp_title('|',true,'right'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_uri() ); ?>"  />
		<?php wp_head(); ?>

	</head>

	<body>
	  
	  <div class="container">
	    <div class="jumbotron header text-center">
	    	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	  		<h5><?php bloginfo('description'); ?></h5>
	    </div>
	  </div>

	   
	  <div class="container">
	    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    
		    <div class="collapse navbar-collapse" id="collapsibleNavbar">
		 
		        <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
										   'menu' => 'Primary Navigation', 
										   'container' => '', 
										   'menu_class' => 'navbar-nav'
										   
											) ); ?>
		 	</div>    
		</nav>
	</div> 
