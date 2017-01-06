<?php
/**
 * Template Name: portafolio
 * Description: Pagina de portafolio
 */

 include 'header.php' ?>
 <?php include 'slider.php' ?>

 <section class="container container-fluid">
   <div class="row">

     <?php
      $args = array( 'post_type' => 'Miportafolio', 'posts_per_page' => 10 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
     ?>

     <div class="col-xs-6">

       <?php
       if ( has_post_thumbnail() ) {
         the_post_thumbnail(array('class' => 'margen-baja20px img-circle img-responsive container-fluid')); //clases dela imagen del post
       }
       ?>

       <p class="center">
         <h5 class="mayusculas"><?php the_title(); ?></h5>
         <p class="fontzise17px"><blockquote class="border-left"><?php the_content(); ?></blockquote></p>

         <p class="postmetadata"><?php the_category( '', '' ); ?></p>
       </p>
     </div>

     <?php endwhile; ?>
   </div>
 </section>

 <?php include 'footer.php' ?>
