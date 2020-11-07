<?php

function braweria_wp_setup() {
	wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap");
	wp_enqueue_script("fontawesome", "//kit.fontawesome.com/5659311191.js");
  wp_enqueue_style("style", get_stylesheet_uri(), NULL, "1.0.0", "all");
  wp_enqueue_script( "scripts", get_template_directory_uri() . "/assets/js/scripts.js", array(), "1.0.0", true );
};

add_action("wp_enqueue_scripts", "braweria_wp_setup");


function braweria_wp_theme_support(){
  add_theme_support("post-thumbnails");
  add_theme_support( "title-tag");
  add_theme_support( 'html5',
    array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}

add_action( 'after_setup_theme', 'braweria_wp_theme_support' );


function default_post_metadata__thumbnail_id( $value, $object_id, $meta_key, $single, $meta_type ) {
  if ( '_thumbnail_id' == $meta_key ) {
    $value = 3142; // the ID for the default image
  }
  return $value;
}

add_filter( 'default_post_metadata', 'default_post_metadata__thumbnail_id', 10, 5 );


function braweria_wp_comment_pagination() {
 // if (get_comment_pages_count() > 1 && get_option( "page_comments" )): 
    require(get_template_directory(  ) . "/template-parts/comment-pagination.php" );
  //endif;
}


function braweria_menus() {
  register_nav_menus(
    array(
      'header-menu'   => __( 'Header Menu' ),
      'footer-menu'   => __( 'Footer Menu' ),
      'context-menu'  => __('Context Menu'),
      'social-menu'   => __('Social Menu')
     )
   );
 }

 add_action( 'init', 'braweria_menus' );


?>