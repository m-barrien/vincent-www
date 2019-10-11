<?php
/*
Plugin Name: Vincent Custom Post Types
Description: Plugin para contenido de Vincent solar.
Author: Marcelo Barrientos
*/
 
// Hook <strong>lc_custom_post_servicio()</strong> to the init action hook
add_action( 'init', 'lc_custom_post_servicio' );
 
// The custom function to register a servicio post type
function lc_custom_post_servicio() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Servicios' ),
    'singular_name'      => __( 'Servicio' ),
    'add_new'            => __( 'Add New Servicio' ),
    'add_new_item'       => __( 'Add New Servicio' ),
    'edit_item'          => __( 'Edit Servicio' ),
    'new_item'           => __( 'New Servicio' ),
    'all_items'          => __( 'All Servicios' ),
    'view_item'          => __( 'View Servicio' ),
    'search_items'       => __( 'Search Servicios' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our servicios and servicio specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'thumbnail', 'excerpt', 'custom-fields' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'rewrite' => array('slug' => 'servicios'),
    'query_var'         => 'film'
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // Parameter 2 is the $args array
  register_post_type( 'servicio', $args);
}
 
// Hook <strong>lc_custom_post_oferta()</strong> to the init action hook
add_action( 'init', 'lc_custom_post_oferta' );
 
// The custom function to register a servicio post type
function lc_custom_post_oferta() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Ofertas' ),
    'singular_name'      => __( 'Oferta' ),
    'add_new'            => __( 'Add New Oferta' ),
    'add_new_item'       => __( 'Add New Oferta' ),
    'edit_item'          => __( 'Edit Oferta' ),
    'new_item'           => __( 'New Oferta' ),
    'all_items'          => __( 'All Ofertas' ),
    'view_item'          => __( 'View Oferta' ),
    'search_items'       => __( 'Search Ofertas' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our ofertas and oferta specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'thumbnail', 'excerpt', 'editor','custom-fields' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'show_in_menu'      => true,
    'taxonomies'        => array('oferta_tag'),
    'publicly_queryable'=> true,
    'has_archive'       => true,
    'rewrite' => array('slug' => 'ofertas'),
    'query_var'         => 'oferta'
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // Parameter 2 is the $args array
  register_post_type( 'oferta', $args);
}

// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'create_oferta_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function create_oferta_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Tipo oferta', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tipo oferta' ),
    'all_items' => __( 'All Tipo oferta' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Tipo oferta' ),
  );  
 
  register_taxonomy('tipo-kit',array('oferta'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipo-kit' ),
  ));
}

add_action( 'init', 'lc_custom_post_pregunta' );
 
// The custom function to register a pregunta post type
function lc_custom_post_pregunta() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Preguntas frecuentes' ),
    'singular_name'      => __( 'Pregunta' ),
    'add_new'            => __( 'Nueva Pregunta' ),
    'add_new_item'       => __( 'Nueva Pregunta' ),
    'edit_item'          => __( 'Editar Pregunta' ),
    'new_item'           => __( 'Nueva Pregunta' ),
    'all_items'          => __( 'Todas Preguntas frecuentes' ),
    'view_item'          => __( 'Ver Pregunta' ),
    'search_items'       => __( 'Buscar Preguntas frecuentes' ),
    'featured_image'     => 'Portada',
    'set_featured_image' => 'Add Portada'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our preguntas and pregunta specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'thumbnail', 'excerpt', 'editor', 'custom-fields' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'rewrite' => array('slug' => 'preguntas-frecuentes'),
    'query_var'         => 'pregunta'
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // Parameter 2 is the $args array
  register_post_type( 'pregunta', $args);
}

// Hook <strong>lc_custom_post_video()</strong> to the init action hook
add_action( 'init', 'lc_custom_post_video' );
 
// The custom function to register a video post type
function lc_custom_post_video() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Videos' ),
    'singular_name'      => __( 'Video' ),
    'add_new'            => __( 'Add New Video' ),
    'add_new_item'       => __( 'Add New Video' ),
    'edit_item'          => __( 'Edit Video' ),
    'new_item'           => __( 'New Video' ),
    'all_items'          => __( 'All Videos' ),
    'view_item'          => __( 'View Video' ),
    'search_items'       => __( 'Search Videos' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our videos and video specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'thumbnail', 'excerpt', 'custom-fields' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'rewrite' => array('slug' => 'videos'),
    'query_var'         => 'video'
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // Parameter 2 is the $args array
  register_post_type( 'video', $args);
}