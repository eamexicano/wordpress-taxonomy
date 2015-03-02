<?php
/*
Plugin Name: {Nombre}
Plugin URI: {http://www.example.com/}
Description: {Descripción}
Version: {Versión}
Author:  {Author}
Author URI: {http://www.example.com}
License: MIT
*/


 $etiquetas = array(
   'name' => __( '{Taxonomías}' ),
   'singular_name' => __( '{Taxonomía}' ),
   'add_new' => __( '{Nueva taxonomía}' ),
   'all_items' => __('{Todas las taxonomías}'),
   'add_new_item' => __( '{Agregar taxonomía}' ),    
   'edit_item' => __( '{Editar taxonomía}' ),
   'new_item' => __( '{Nueva taxonomía}' ),
   'view_item' => __( '{Ver taxonomías}' ),
   'search_items' => __( '{Buscar taxonomías}' ),
   'update_item' => __('{Actualizar taxonomías}'),
   'separate_items_with_commas' => __('{Separa las taxonomías con comas}'),
   'popular_items' => __('{Taxonomías más utilizadas}'),
   'choose_from_most_used' => __('{Elige entre las taxonomías más utilizadas}'),
   'add_or_remove_items' => __( '{Agregar o quitar taxonomías}'),
   'not_found' => __('{No se encontraron taxonomías}'),
   'not_found_in_trash' => __('{No se encontraron taxonomías en la basura}'),
   'menu_name' => __("{Taxonomías}")
 );

/*
  Definimos las propiedades de comportamiento. 
  Para asignar las etiquetas utilizamos el nombre del arreglo. 
  De esta manera queda un poco más legible el código. 
*/  
$opciones = array(
    'labels' => $etiquetas,  
    'public' => true,
    'show_ui' => true,
    'show_tagcloud' => false,
    'show_in_nav_menus' => false,
    'hierarchical' => false,
    'query_var' => 'taxonomia',    
    'rewrite' => array( 'slug' => 'taxonomia', 'with_front' => true ),
    'sort' => false
);

function registrar_taxonomia() {
  	register_taxonomy('taxonomias', array( 'page', 'post' ), $opciones);
}

/*
  Creamos el hook para mandar registrar la taxonomía.
*/
add_action('init', 'registrar_taxonomia', 0);

?>