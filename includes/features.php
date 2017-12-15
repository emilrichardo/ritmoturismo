				<?php query_posts( array(
					    //'category_name'  => 'paquetes',
					    'posts_per_page' => 3,
					    'orderby' => 'date',
					    'post_type' => 'paquetes',
					    'meta_key'   => 'wpcf-display-home', 
					  	'meta_value' => 'paquetes-destacados',  
					    
					) ); ?>

					<?php   if ( have_posts() ) { ?>

				<section class="features py-4">
					<div class="container d-flex d-md-block flex-nowrap flex-column">
						<h3 class="font-weight-normal mt-4 d-inline-block h4 order-1">Súper promos de Verano</h3>
						<a href="http://ritmoturismo.com.ar/paquetes/temporada/verano/" class="btn btn-success btn-sm px-4 ml-4 order-3 order-md-2">Ver todas las promociones<i class="ml-2 fa fa-angle-right "></i></a>
						<div class="row pt-4  order-2 order-md-3">

							
							<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-md-4 item mb-3 ">
				                <div class="card">
				                  <div class="card-header text-light py-1">
				                    <?php echo(types_render_field( 'salida' )); ?>
				                  </div>

				                  <?php the_post_thumbnail('medium' , ['class' => 'card-img-top w-100']); ?>
				                  
				                  <h4 class="title-feature card-title text-light text-uppercase"><span><?php the_title(); ?></span></h4>
				                  <div class="card-body py-0">

				                    <div class="info-feature d-flex justify-content-between align-items-center pb-2">

				                      <span class="price">
				                        <small class="text-secondary">
				                          Promos desde
				                        </small>

				                        <span class=" h2 font-italic font-weight-normal d-block"><?php echo(types_render_field( 'precios-desde',array( 'separator' => ''  ) )); ?></span>
				                      </span>
				                      <a href="<?php the_permalink() ?>" class="btn btn-warning btn-sm px-3">VER MÁS <i class="ml-2 fa fa-angle-right "></i></a>
				                    </div>

				                  </div>
				                </div>          
				              </div><!--finaliza item -->
				              <?php endwhile; // end of the loop. ?>
				   


						</div>
					</div>
				</section>

				<?php } ?>