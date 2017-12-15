


 		


<?php get_header(); ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 	




<?php echo(types_render_field( 'banner-top' , array('output'=>'html','class' => 'img-fluid rounded w-100', 'title' => get_the_title() ))); ?>
 	

<header class="header-single bg-success py-5">			 
			<div class="container"> 
				<div class="row justify-content-center  text-center py-3">
					<div class="col-12 col-md-8">
						<div class="title-single font-italic">
							<h1 class="text-light"><?php the_title(); ?></h1>
						</div>
						<p class="meta-single text-warning h4 text-light mt-4"><?php echo(types_render_field( 'salida' )); ?></p>
					</div>
				</div>
			</div>
		</header>

<div class="container">
	<ol class="py-2 bg-white mt-2 rounded align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</ol>
</div>

		<section class="main-single  bg-white mb-5">
			<div class="container">
				<div class="incluye py-5">
					<div class="row justify-content-center">
						<div class="col-12 col-md-5">
							<h3 class="text-success">Incluye</h3>
							<ul class="list-incluye">
								<li> <i class="fa fa-check-square-o text-success"></i> 
									<?php echo(types_render_field( 'incluye', array( 'separator' => '</li><li> <i class="fa fa-check-square-o text-success"></i>'  ) )); ?>
								</li>
								
							</ul>
						</div>
						<div class="col-12 col-md-5">
							
							<?php the_post_thumbnail('medium', array('class' => 'img-fluid rounded w-100', 'title' => get_the_title() )); ?>
						</div>
					</div><!-- row -->
				</div><!-- incluye  -->
				<div class="items-paquete">


					<div class="row justify-content-center align-items-center">
						<div class="col-md-2">
							<div class="ico-ip bg-light rounded"><i class="fa  fa-cutlery text-success"></i> </div>
						</div>
						<div class="col-md-8">
							<h4 class="font-weight-normal">Media pensión</h4>
							<p><?php echo(types_render_field( 'media-pension',array( 'separator' => ''  ) )); ?></p>
						</div>
					</div>
					<div class="row justify-content-center align-items-center">
						<div class="col-md-2">
							<div class="ico-ip bg-light rounded"><i class="fa  fa-group text-success"></i> </div>
						</div>
						<div class="col-md-8">
							<h4 class="font-weight-normal">Excursiones* incluidas</h4>

							<p><?php echo(types_render_field( 'excursiones-incluidas',array( 'separator' => ''  ) )); ?></p>

						</div>
					</div>
				</div><!-- items-paquete -->
				<div class="row justify-content-center">
					<div class="no-incluye my-5 py-3 border border-danger rounded col-md-10">
						<div class="row align-items-center justify-content-center">
							<div class="col-12 col-md-4 text-center">
								<h3 class="text-danger"><i class="fa fa-close "></i> No Inluye</h3>
							</div>
							<div class="col-12 col-md-8">
								<ul class="no-list-incluye">
									<li> <i class="fa fa-close text-danger"></i>

									<?php echo(types_render_field( 'no-incluye',array( 'separator' => '</li><li> <i class="fa fa-close text-danger"></i> '  ) )); ?>


									 </li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="detalles   ">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class=" rounded bg-light py-4 px-3 mb-3">
							<?php  echo(types_render_field( 'detalles' )); ?>
						</div>
						
					</div>
				</div>
			</div>
		</section>

		

		<section class="hoteles">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 col-12">
						<div class="bg-success rounded">
							<div class="header-hoteles py-3 px-5">
								<div class="row align-items-center justify-content-around">
									<div class="col-md-2">
										<i class="fa fa-bed text-warning"></i>
									</div>
									<div class="col-md-6">
										<h4 class="text-warning text-uppercase font-weight-light">Hotel</h4>
										<h2 class="font-weight-light text-light">
										<?php echo(types_render_field( 'nombre-de-hotel' )); ?>
										</h2>
										<h5 class="h6 text-warning text-uppercase font-weight-light"><?php echo(types_render_field( 'leyenda' )); ?></h5>
									</div>
									<div class="col-md-4">
										<p class="text-light"><?php echo(types_render_field( 'destino-del-hotel' )); ?></p>
										<p class="text-light"><?php echo(types_render_field( 'salidas-desde' )); ?></p>
									</div>
								</div>
								
							</div>
							<div class="tabla-precios"><?php echo(types_render_field( 'tabla-de-precios' )); ?></div>
							
						</div>
					
						<div class="bg-success rounded mt-2 <?php echo(types_render_field( 'mostrar' )); ?>">
							<div class="header-hoteles py-3 px-5">
								<div class="row align-items-center justify-content-around">
									<div class="col-md-2">
										<i class="fa fa-bed text-warning"></i>
									</div>
									<div class="col-md-6">
										<h4 class="text-warning text-uppercase font-weight-light">Hotel</h4>
										<h2 class="font-weight-light text-light">
										<?php echo(types_render_field( 'nombre-de-hotel2' )); ?>
										</h2>
										<h5 class="h6 text-warning text-uppercase font-weight-light"><?php echo(types_render_field( 'leyenda2' )); ?></h5>
									</div>
									<div class="col-md-4">
										<p class="text-light"><?php echo(types_render_field( 'destino-del-hotel2' )); ?></p>
										<p class="text-light"><?php echo(types_render_field( 'salidas-desde2' )); ?></p>
									</div>
								</div>
								
							</div>
							<div class="tabla-precios"><?php echo(types_render_field( 'tabla-de-precios2' )); ?></div>
							
						</div>
						<div class="bg-warning  rounded mt-2">
							<div class="tabla-precios">
							<?php echo(types_render_field( 'mas-hoteles2' )); ?>
							</div>
						</div>
					
					
						
					</div>
				</div>
			</div>
		</section>

		<section class="info my-5">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-10">
						<div class="box-border py-4 px-5">
							<div class="row align-items-center">
								<div class="col-md-7">
									<h3 class="font-weight-light my-5 text-uppercase">Información de viaje</h3>
									<p>
										<i class="fa  fa-address-card-o f-left"></i>
										<strong>DOCUMENTACION:</strong> <br>	<?php echo(types_render_field( 'documentacion' )); ?></p>

									<p>
										<i class="fa fa-briefcase"></i>
										  
										<strong>EQUIPAJE:</strong> <br> <?php echo(types_render_field( 'equipaje' )); ?></p>
									<p>
										<i class="fa fa-clock-o"> </i>
										<strong>HORARIO DE PRESENTACIÓN:</strong> <br> <?php echo(types_render_field( 'horario-de-presentacion' )); ?></p>
									<p>
										<i class="fa  fa-child"></i>
										<strong>POLITICA DE MENORES</strong> <br> <?php echo(types_render_field( 'politica-de-menores' )); ?></p>

								</div>
								<div class="col-md-5">
									<img src="<?php echo get_template_directory_uri(); ?>/images/pareja-maletas.png" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>

<?php endwhile ;?>
    <?php endif ;?>


<?php get_footer(); ?>
