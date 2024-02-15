
<?php get_header( ); ?>

<div class="titulo">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col">
                    <h1 class="m-0"><?php post_type_archive_title(); ?></h1> 

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
        <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
          <div class="col-12 col-sm-4 py-4">
            <a class="prop-img d-block position-relative" href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'post-thumbnail' );
        }?> <span class="distrito d-block position-absolute py-3 px-4 rounded text-uppercase"><?php the_field('nombre_distrito'); ?></span>
        <span class="precio d-block position-absolute py-3 px-4 rounded text-uppercase">
 <?php if( get_field('precio') ): ?>
        <?php the_field('precio'); ?>
      <?php else: ?>
        Contactar al vendedor
        <?php endif ?>
        </span></a>
            <h3 class="p-4 text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php if( get_field('numero_de_dormitorios') ): ?>
            <div class="ammenities px-4 py-3 d-flex justify-content-between">
              <div class="label"><i class="fas fa-bed mr-3"></i>Dormitorios</div><div><?php the_field('numero_de_dormitorios'); ?></div>
            </div>
            <?php endif ?>
            <?php if( get_field('numero_de_banos') ): ?>
            <div class="ammenities px-4 py-3 d-flex justify-content-between">
              <div class="label"><i class="fas fa-shower mr-3"></i>Baños</div><div><?php the_field('numero_de_banos'); ?></div>
            </div>
            <?php endif ?>
          </div>
          <?php endwhile; endif; ?>
          <div class="row mx-auto w-100 justify-content-center">
      <?php the_posts_pagination( array(
                'screen_reader_text' => ' ',
    'mid_size'  => 1,
    'prev_text' => __( '<< ', 'textdomain' ),
    'next_text' => __( ' >>', 'textdomain' ),
) ); ?>   
</div>
        </div>
        </div>
      </div>
    </div>
<?php get_footer( ); ?>