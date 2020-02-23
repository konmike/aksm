<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<title>
	  		<?php wp_title( $sep = '»', $display = true, $seplocation = 'right' );?>
	  		<?php bloginfo( $show = 'name' ); ?>		
	  	</title>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
		<?php 
			wp_head();
		?>

	</head>

<body id="main">

<a href="#main" class="smooth-scroll">
	<span class="button button-scroll-top button-hide"></span>
</a>

<header class="header header--search-and-nav">
	<a href="/wordpress-aksm" class="link link--logo"><img src="/wordpress-aksm/wp-content/uploads/2019/12/logo2.png" alt="AKSM" width="50px"></a>

	<?php wp_nav_menu(  array( 'theme_location' => 'primary-menu',
	                           'container' => 'nav',
	                           'container_class' => 'nav nav--block nav--primary menu-fixed',
	                           'container_id' => 'menu'));  ?>

</header>
