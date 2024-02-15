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
    <div class="container contenidos py-5">
        <div class="row">
            <div class="col">
            <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>        
        <?php the_content() ?>
        <?php endwhile; endif; ?> 
            </div>
        </div>
    </div>
<?php get_footer( ); ?>



         
      

  