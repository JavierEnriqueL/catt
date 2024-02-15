
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
  <div class="propiedades py-5">
    <div class="container pt-5">
      <div class="row">
        <div class="col-12 col-sm-9">
          <div class="featured py-4">
          <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'post-thumbnail' );
                    } ?>
          </div>
          <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
          <?php the_content() ?>
          <?php endwhile; endif; ?> 
        </div>
        <?php get_sidebar();?>
        
      </div>
    </div>
  </div>
<?php get_footer( ); ?>