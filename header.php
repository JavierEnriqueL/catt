<!doctype html>
<html <?php language_attributes( 'html' ); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i|Open+Sans:400,400i,700,700i" rel="stylesheet">
    <title><?php wp_title(); ?></title>
    <?php wp_site_icon() ?>
	  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129489535-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129489535-1');
</script>
  </head>
  <body id="post-<?php the_ID(); ?>" <?php body_class(); ?>>
    <header class="d-none d-lg-block">
      <div class="container">
        <div class="row justify-content-between no-gutters">
          <div >
            <a class="d-inline-flex align-items-center px-4" href="tel:<?php the_field('link_telefono','option'); ?>"><i class="fas fa-phone mr-3"></i> <?php the_field('telefono','option'); ?></a> <a class="d-inline-flex align-items-center px-4" href="mailto:<?php the_field('email','option'); ?>"><i class="fas fa-envelope mr-3"></i> <?php the_field('email','option'); ?></a>
          </div>
          <div class="text-right redes">
          <?php 
      if( have_rows('redes_sociales','option') ):
      while( have_rows('redes_sociales','option') ): the_row(); ?>
            <a class="d-inline-flex align-items-center px-4" href="<?php the_sub_field('url_red'); ?>" target="_new"><i class="fab fa-<?php the_sub_field('nombre_red'); ?>"></i></a> 
            <?php endwhile; ?>
      <?php endif; ?> 
          </div>
        </div>
    </div>
    </header>
    <div class="container">
      <div class="row">
          <nav class="navbar w-100 navbar-expand-lg navbar-light p-0 ml-4">
              <a class="navbar-brand py-4" href="<?php echo get_settings('home'); ?>">
                <img src="<?php the_field('logo','option'); ?>" alt="CATT">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>  
              <?php
              wp_nav_menu( array(
                'theme_location'  => 'principal',
                'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
              ) );
            ?>
            </nav>
      </div>
    </div>