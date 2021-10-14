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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163996071-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163996071-1');
</script>

	</head>

<body id="main" class="site">

<a href="#main">
	<span class="button button--scroll-top button--hide"></span>
</a>

<header class="header header--search-and-nav">
	<a href="/" class="link link--logo"><img src="/wp-content/uploads/2020/04/logo2.png" alt="AKSM" width="50"></a>

	<?php wp_nav_menu(  array( 'theme_location' => 'primary-menu',
	                           'container' => 'nav',
	                           'container_class' => 'nav nav--block nav--primary menu-fixed',
	                           'container_id' => 'menu'));  ?>

</header>
