<?php get_header(); ?><!-- HEADER ########################-->  

<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>


  <div class="container">
 <ol class="breadcrumb my-3 bg-white text-uppercase d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>







  
   
  
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-10">
          <div class="page-title">
             <?php
          //the_archive_title( '<h1>', '</h1>' );
          single_term_title( '<h1>', '</h1>');
          //the_archive_description( '<div>', '</div>' );
        ?>
            <span class="center-square"></span>
          </div>
          <hr>


  
 
          <div class="paquetes-list mt-5 ">
             <div class="row">
  <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- the loop -->

            <div class="col-md-4 item mb-3 ">
                <div class="card">
                  <div class="card-header text-light py-1">
                    <?php echo(types_render_field( 'salida' )); ?>
                  </div>

                  <?php the_post_thumbnail('thumbnail' , ['class' => 'card-img-top w-100']); ?>
                  
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
          </div><!-- noticias-list -->
            
  
 
  
  
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>




   
  

     

<?php get_footer(); ?>