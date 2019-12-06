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

<body>
