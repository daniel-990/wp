<?php
/**
 * Template Name: nosotros
 * Description: Pagina que habla sobre la empresa
 */

include 'header.php' ?>
<?php include 'slider.php' ?>


<section class="container container-fluid">
  <h2 class="center"><?php the_title();?></h2>
  <!--<img src="https://placeholdit.imgix.net/~text?txtsize=14&txt=150%C3%97150&w=150&h=150" class="margen-baja20px img-circle img-responsive container-fluid">-->

  <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail(array('class' => 'margen-baja20px img-circle img-responsive container-fluid')); //clases dela imagen del post
    }
  ?>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="margen-baja20px ancho80 container-fluid center">
        <p class="center ancho80 container-fluid">
          <?php the_content(); ?>
        </p>
      </div>


  <?php endwhile; else : ?>
    <p><?php _e( 'no hay contenido para mostrar...' ); ?></p>
  <?php endif; ?>

  <hr/>

  <section class="container-fluid container">

        <?php include 'content-testimonios.php' ?>

  </section>
</section>

<?php include 'footer.php' ?>
