<?php get_header( ); ?>

<div class="titulo">
    <div class="container py-5">
      <div class="row py-3">
        <div class="col">
          <h1 class="m-0"><?php single_cat_title() ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="propiedades py-5">
    <div class="container pt-5">
      <div class="row">
        <div class="col-12 col-sm-9">
          <div class="row">
          <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>"  <?php post_class( 'col-12 col-sm-6 py-4' ); ?>>
              <a class="prop-img d-block position-relative" href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'post-thumbnail' );
                    } ?>
              </a>
              <h3 class="p-4 text-uppercase">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
            </div>
          <?php endwhile; endif; ?>

          </div>
          <div class="row mx-auto w-100 justify-content-center">
      <?php the_posts_pagination( array(
                'screen_reader_text' => ' ',
    'mid_size'  => 1,
    'prev_text' => __( '<< ', 'textdomain' ),
    'next_text' => __( ' >>', 'textdomain' ),
) ); ?>   
</div>
        </div>
        <?php get_sidebar();?>         
      </div>
    </div>
  </div>
<?php get_footer( ); ?>