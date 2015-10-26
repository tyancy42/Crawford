<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
    </head>
<body class="home blog">
<header role="banner">
	<div class="container">
		<div class="row">			
			<div id="logo-tagline" class="col-md-12">				
							        <a id="site-name" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
			    			   
			    	
			</div>		

			
			<nav class="col-md-12" role="navigation">				
				<div class="collapse navbar-collapse">

				<?php

				$defaults = array (
					'container' => false,
					'theme_location' => 'primary-menu',
					'menu_class' => 'menu'
					);

				wp_nav_menu( $defaults );

			?></div>
			</nav>
		</div>
	</div>
</header>