<?php get_header( ); ?>
<?php //Template name: Front Page  ?>

<?php if( get_field('imagen_banner') ): ?>

  <style>
#preloader {
    background-image: 
    url(<?php the_field('slider1'); ?>), url(<?php the_field('slider2'); ?>), url(<?php the_field('slider3'); ?>);   
    display: none;   
  }
  .banner-home {
  -webkit-animation-duration: 15s;
    animation-duration: 15s;
    -webkit-animation-name: cambio;
    animation-name: cambio;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-transition: 1s;
    transition: 1s;
  }
  @keyframes cambio {
    0% {
        background-image: url(<?php the_field('slider1'); ?>);
    }
    28% {
        background-image: url(<?php the_field('slider1'); ?>);
    }
    33% {  
        background-image: url(<?php the_field('slider2'); ?>);
    }
    61% {
        background-image: url(<?php the_field('slider2'); ?>);
    }
    66% {
        background-image: url(<?php the_field('slider3'); ?>);
    }
    95% {
        background-image: url(<?php the_field('slider3'); ?>);
    }
    100% {
        background-image: url(<?php the_field('slider1'); ?>);
    }
}
@-webkit-keyframes cambio {
    0% {
        background-image: url(<?php the_field('slider1'); ?>);
    }
    28% {
        background-image: url(<?php the_field('slider1'); ?>);
    }
    33% {  
        background-image: url(<?php the_field('slider2'); ?>);
    }
    61% {
        background-image: url(<?php the_field('slider2'); ?>);
    }
    66% {
        background-image: url(<?php the_field('slider3'); ?>);
    }
    95% {
        background-image: url(<?php the_field('slider3'); ?>);
    }
    100% {
        background-image: url(<?php the_field('slider1'); ?>);
    }
}
  </style>

<div id="preloader"></div>
<div class="banner-home">
      <div class="container h-100">
      <div class="row mx-auto h-100 align-items-center" >
        <div class="col-12 col-lg-5 bg-white px-4 py-5 text-center">
          <h1 class="mb-5 text-uppercase"><?php the_field('titulo_banner'); ?></h1>
          <a class="gold mx-3 d-inline-block py-3 px-5" href="<?php the_field('link_boton_banner'); ?>"><?php the_field('texto_boton_banner'); ?></a> <a class="white mx-3 d-inline-block py-3 px-5" href="<?php the_field('link_boton_banner_2'); ?>"><?php the_field('texto_boton_banner_2'); ?></a>
        </div>
      </div>
    </div>
    </div>
  <?php endif ?>
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
          <h2 class="w-100 text-capitalize  pt-3 pb-5 px-4 text-center text-sm-left">Destacados</h2>
          <?php 
            $args = array( 'post_type' => 'inmuebles', 'posts_per_page' => 3, 'orderby' => 'rand', );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
          echo '<div class="col-12 col-sm-4 py-4"><a class="prop-img d-block position-relative" href="';
          the_permalink();
          echo '">';
          if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'post-thumbnail' );
        } 
        echo '<span class="distrito d-block position-absolute py-3 px-4 rounded text-uppercase">'; 
                the_field('nombre_distrito'); 
        echo '</span>';
          echo '<span class="precio d-block position-absolute py-3 px-4 rounded text-uppercase">';
          if( get_field('precio') ) {
          the_field('precio');  }
        else {
         echo  'Contactar al vendedor';}
          echo '</span></a>
              <h3 class="p-4 text-uppercase"><a href="';
          the_permalink();
          echo '">';
          the_title();
          echo '</a></h3></div>';
       
          endwhile; 
          ?>  
        </div>
      </div>
    </div>
    <div class="text-prom py-5">
      <div class="container py-5">
        <div class="row py-5">
          <div class="col text-center">
          <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>        
        <?php the_content() ?>
        <?php endwhile; endif; ?> 
          </div>
        </div>
      </div>
    </div>
    <?php query_posts('cat=1&showposts=1'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="novedades py-5">
        <div class="container pt-5">
          <div class="row">
            <h2 class="w-100 text-capitalize  pt-3 pb-5 px-4  text-center text-sm-left">Novedades</h2>
            <?php endwhile; endif ?>

            <?php query_posts('cat=1&showposts=3'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-12 col-sm-4 py-4">
                <a class="d-block position-relative" href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'post-thumbnail' );
                    } ?></a>
                <h3 class="p-4 text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?> 
              </div>
              <?php endwhile; endif ?>
              <?php query_posts('cat=1&showposts=1'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> </div>
        </div>
      </div>  <?php endwhile; endif ?>   
<?php get_footer( ); ?>



         
      

  