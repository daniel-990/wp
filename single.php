<?php include 'header.php' ?>
<?php include 'slider.php' ?>
<section id="blogs" class='ancho80 container-fluid relleno-bajo50px'>
  <h3 class="center relleno-bajo20px">Blog</h3>

  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class=" margen-baja20px">
        <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail(array('class' => 'margen-baja20px img-circle img-responsive container-fluid')); //clases dela imagen del post
        }
        ?>
        <p class="center ancho80 container-fluid">
          <h4 class=""><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
          <p class="postmetadata"><?php _e( 'Categoria' ); ?> <?php the_category( '', '' ); ?></p>
          <small><?php the_time('F jS, Y'); ?> Autor <?php the_author_posts_link(); ?></small>
          <p class="center">
            <?php the_content(); //contenido del post ?>
          </p>
        </p>
        <br />
        <p><?php comments_template(); ?></p>
      </div>

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

  </div>
</section>

<?php include 'footer.php' ?>
