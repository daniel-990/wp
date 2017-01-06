<h4 class="center relleno-bajo20px">Nuestros clientes dicen</h4>
<?php
 $args = array( 'post_type' => 'testimonios', 'posts_per_page' => 10 );
 $loop = new WP_Query( $args );
 while ( $loop->have_posts() ) : $loop->the_post();
?>

  <div class="container-fluid fondo-gris-testimonios">
    <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail(array('class' => 'margen-baja20px img-circle img-responsive container-fluid')); //clases dela imagen del post
    }
    ?>
    <p class="fontzise17px"><blockquote class="border-left"><?php the_content(); ?></blockquote></p>
    <h5 class="mayusculas"><?php the_title(); ?></h5>
    <a class="" href="#">Web Del Cliente</a>
  </div>

 <?php endwhile; ?>
