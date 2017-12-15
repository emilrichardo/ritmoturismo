<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title> <?php  bloginfo('name'); ?>  <?php  wp_title('|',true);?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />

	<!-- estilos css -->	
	<link rel="stylesheet" title="style"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theme.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<!-- fuentes -->
	<!-- font awesome -->
	
	<!-- rubik -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<script src="https://use.fontawesome.com/9d068983ec.js"></script>


	<!-- Cambiar el color por #101116 -->
<meta name="theme-color" content="#090921">

<?php wp_head(); ?>
<script>var $ = jQuery.noConflict();</script>


</head>
<body <?php body_class(); ?>>

	<div class="top-nav bg-dark text-secondary py-2 text-md-left text-center" >
		<div class="container">
			<div class="row justify-content-between ">
				<span class="text-white"><i class="text-warning mr-2 fa fa-phone"></i><strong> Tel: (0385) 4227177</strong></span>
				<span class="d-none d-md-inline-block"><i class="text-secondary mr-2 fa fa-map-marker"></i> Entre Ríos 124 - Sgo. del Estero</span>
				
					<span class="d-none d-md-inline-block">
						<a href="mailto:ritmoturismo@hotmail.com"><i class="text-secondary mr-2 fa fa-envelope"></i>ritmoturismo@hotmail.com</a>
					</span>
				<span class="d-none d-md-inline-block"><a class="text-primary" href="https://www.facebook.com/RitmoTurismo/"><i class="text-primary mr-2 fa fa-facebook-square"></i> Facebook</a>
				</span>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg  bg-success sticky-top" data-spy="affix" data-offset-top="40" >
		<div class="container">
			<a class="navbar-brand" href="<?php echo home_url('/'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-ritmo.png" alt="">
				<span class="d-none">Rítmo Turísmo</span></a>
				<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-navicon"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					
					<?php wp_nav_menu( array( 
		  									'theme_location' => 'header-menu', 
		  									'container' => 'span', 
		  									'menu_class'=>'navbar-nav ml-auto  font-weight-normal font-italic', 
		  									'menu_id'=> 'nav',
		  									// 'before'=>'<i class="fa ico-nav"></i>', 
		  									'after'=> '<span class="span-line"></span>' ) ); ?>
		  									
					<span class="navbar-text d-none text-warning ml-4 font-italic">
						<span class="h4">(0385) 4227177 </span><br>
						<small class="nav-email text-warning"><i class="fa fa-envelope"></i> ritmoturismo@hotmail.com</small>
					</span>
				</div>
			</div>
		</nav>