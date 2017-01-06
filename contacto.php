<?php
/**
 * Template Name: contacto
 * Description: Pagina de contacto
 */

include 'header.php' ?>
<?php include 'slider.php' ?>

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
  <div class="row">
    <div class="col-md-6">
      <?php if ( function_exists( 'smuzform_render_form' ) ) { smuzform_render_form('114'); } ?>
    </div>
    <div class="col-md-6">

      <?php include 'variables-globales.php'; ?>

      <?php
        require_once 'variables-globales.php';
        $recent = new WP_Query($id_contacto); while($recent->have_posts()) : $recent->the_post();
      ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

    </div>
  </div>
</section>

<?php include 'footer.php' ?>
