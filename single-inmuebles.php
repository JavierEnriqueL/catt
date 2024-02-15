<?php get_header( ); ?>

<div class="titulo">
    <div class="container py-5">
      <div class="row py-3">
        <div class="col">
          <h1 class="m-0"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="buscador container-fluid">
      <div class="row mx-auto">
        <div class="col py-5">
        <?php dynamic_sidebar( 'buscador' ); ?>
        </div>
      </div>
    </div>
  <div class="propiedades py-5">
    <div class="container pt-5">
      <div class="row">
        <div class="col-12 col-sm-9">
          <div class="banner-detalles pb-5">
          <?php the_field('slide_fotos'); ?>
          </div>
          <div class="precio pb-5">
          <?php if( get_field('precio') ): ?>
        <?php the_field('precio'); ?>
<?php else: ?>
        Contactar al vendedor
        <?php endif ?>
          </div>
          <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
          <?php the_content() ?>
          <?php endwhile; endif; ?> 
         
          <div class="row detalles p-4 my-5">
            <h4 class="w-100 mb-5 py-5 px-4">Detalles del Inmueble</h4>
            <?php if( have_rows('propiedades_del_inmueble') ): ?>
            <?php while( have_rows('propiedades_del_inmueble') ): the_row(); ?>
            <div class="col-12 col-sm-4 py-3">
            <?php the_sub_field('etiqueta'); ?>: <?php the_sub_field('detalle'); ?>
            </div>
            <?php endwhile; ?>
            <?php endif ?>
          </div>
          
          <?php if( get_field('mapa') ): ?>
          <div class="mapa">
              <?php the_field('mapa');  ?>
          </div>
            <?php endif ?>
            <?php if( have_rows('servicio') ): ?>
          <div class="row detalles p-4 my-5">
            <h4 class="w-100 mb-5 py-5 px-4">Servicios</h4>
            <?php while( have_rows('servicio') ): the_row(); ?>
            <div class="col-12 col-sm-4 py-3">
              <i class="far fa-check-square"></i> <?php the_sub_field('servicio_detalle');  ?>
            </div>
            <?php endwhile; ?>
          </div>    
          <?php endif ?>

           <?php if( have_rows('ambiente') ): ?>
          <div class="row detalles p-4 my-5">
            <h4 class="w-100 mb-5 py-5 px-4">Ambientes</h4>
            <?php while( have_rows('ambiente') ): the_row(); ?>
            <div class="col-12 col-sm-4 py-3">
              <i class="far fa-check-square"></i> <?php the_sub_field('ambiente_detalle');  ?>
            </div>
            <?php endwhile; ?>
          </div>    
          <?php endif ?>

           <?php if( have_rows('adicionales') ): ?>
          <div class="row detalles p-4 my-5">
            <h4 class="w-100 mb-5 py-5 px-4">Adicionales</h4>
            <?php while( have_rows('adicionales') ): the_row(); ?>
            <div class="col-12 col-sm-4 py-3">
              <i class="far fa-check-square"></i> <?php the_sub_field('adicionales_detalle');  ?>
            </div>
            <?php endwhile; ?>
          </div>    
          <?php endif ?>

          <?php if( have_rows('areas_comunes') ): ?>
          <div class="row detalles p-4 my-5">
            <h4 class="w-100 mb-5 py-5 px-4">Áreas Comunes</h4>
            <?php while( have_rows('areas_comunes') ): the_row(); ?>
            <div class="col-12 col-sm-4 py-3">
              <i class="far fa-check-square"></i> <?php the_sub_field('areas_comunes_detalle');  ?>
            </div>
            <?php endwhile; ?>
          </div>    
          <?php endif ?>  

          <?php if( have_rows('generales') ): ?>
          <div class="row detalles p-4 my-5">
            <h4 class="w-100 mb-5 py-5 px-4">Generales</h4>
            <?php while( have_rows('generales') ): the_row(); ?>
            <div class="col-12 col-sm-4 py-3">
              <i class="far fa-check-square"></i> <?php the_sub_field('generales_detalle');  ?>
            </div>
            <?php endwhile; ?>
          </div>    
          <?php endif ?>   

          
          <div class="wa text-center d-flex justify-content-center pt-5 align-items-center">
              <a class="w-100 py-3" href="https://api.whatsapp.com/send?phone=51921132920&text=interesado en <?php the_title(); ?>" target="_new">Para Más Información</a>
            </div>
        </div>
        <?php get_sidebar('inmuebles');?> 

      </div>
    </div>
  </div>
<?php get_footer( ); ?>