<?php

/* estilos y scripts de la pagina */

  function wmt_theme_style(){
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/lib/font-awesome-4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('style_css', get_template_directory_uri() . '/css/style.css');
  }

  add_action( 'wp_enqueue_scripts', 'wmt_theme_style' );

  function wmt_theme_js(){

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js', array('jquery'), '', 'true');
    wp_enqueue_script('scripts_js', get_template_directory_uri() . '/js/main.js/', array('jquery','bootstrap_js'), '', 'true');
  }
  add_action( 'wp_enqueue_scripts', 'wmt_theme_js' );


/* menus de la pagina */

add_theme_support('menus'); // con este agrego el menu a la pagina

register_nav_menus( array(
  'principal-menu' => __( 'Menu Principal', 'mi-pag' ),
));

/* thumnails blogs */

add_theme_support( 'post-thumbnails' );

/* testimonios y portafolios */
add_action( 'init', 'create_post_type' );

function create_post_type() {

  /* testimonios */
  register_post_type( 'testimonios',
    array(
      'labels' => array(
        'name' => __( 'testimonios' ),
        'singular_name' => __( 'testimonios_2' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array(
        'title', 'editor', 'thumbnail'
      ), // para ponerle titulo imagen y imagen destacada
    )
  );

/* portafolio */
  register_post_type( 'MiPortafolio',
    array(
      'labels' => array(
        'name' => __( 'MiPortafolio' ),
        'singular_name' => __( 'portafolio_empresa' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies' => array('category'), // para agregar categorias a mis portafolios
      'supports' => array(
        'title', 'editor', 'thumbnail'
      ), // para ponerle titulo imagen y imagen destacada
    )
  );
}

?>
