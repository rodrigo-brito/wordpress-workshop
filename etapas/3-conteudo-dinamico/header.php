<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>EATI</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
	<div class="container">
		<div class="header clearfix">

			<!-- menu -->
			<nav>
				<ul class="nav nav-pills pull-right">
					<li role="presentation" class="active"><a href="#">Página Inicial</a></li>
					<li role="presentation"><a href="#">Sobre Mim</a></li>
					<li role="presentation"><a href="#">Contato</a></li>
				</ul>
			</nav>

			<!-- logo / titulo -->
			<div class="logo">
				<?php if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					echo '<h2>'. get_bloginfo( 'name' ) .'</h2>';
				} ?>
			</div>
		</div>