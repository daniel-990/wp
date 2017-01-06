<?php
/**
 * Template Name: pagina de inicio
 * Description: Pagina de inicio
 */

include 'header.php' ?>
<?php include 'slider.php' ?>

<section class='relleno-bajo50px ancho80 container-fluid'>
  <div class="row">
    <div class="col-md-4">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p>
          <?php the_content(); ?>
        </p>
      <?php endwhile; else : ?>
        <p><?php _e( 'no hay contenido para mostrar...' ); ?></p>
      <?php endif; ?>
    </div>

    <div class="col-md-4">

      <?php include 'variables-globales.php'; ?>

      <?php
        require_once 'variables-globales.php';
        $recent = new WP_Query($id_contacto); while($recent->have_posts()) : $recent->the_post();
      ?>

      <p>
          <?php the_content(); ?>
      </p>


			<?php endwhile; ?>

    </div>
    <div class="col-md-4">
      <p>
        <?php the_content(); ?>
      </p>
    </div>
  </div>
</section>
<hr/>

    <h4 class="center relleno-bajo20px">Ultimos Blogs</h4>
    <section class="container-fluid container">
      <div class="row">
        <?php
        $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <div class="col-xs-6">
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
    </div>
  </section>

  <?php include 'footer.php' ?>
  </body>
</html>
