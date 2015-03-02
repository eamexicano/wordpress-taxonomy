<?php
/*
Plugin Name: Lenguajes
Plugin URI: http://blog.eamexicano.com/wordpress/wordpress-taxonomias-personalizadas/
Description: Permite crear relaciones M:M con las publicaciones 
Version: 0.1.0
Author:  eamexicano
Author URI: http://www.eamexicano.com
License: MIT
*/

/*
  Utilizamos un arreglo para almacenar las etiquetas 
  que se van a visualizar en la interfaz.
*/

 $etiquetas = array(
   'name' => __( 'Lenguajes' ),
   'singular_name' => __( 'Lenguaje' ),
   'add_new' => __( 'Nuevo lenguaje' ),
   'all_items' => __('Todos los lenguajes'),
   'add_new_item' => __( 'Agregar lenguaje' ),    
   'edit_item' => __( 'Editar lenguaje' ),
   'new_item' => __( 'Nuevo lenguaje' ),
   'view_item' => __( 'Ver lenguajes' ),
   'search_items' => __( 'Buscar lenguajes' ),
   'update_item' => __('Actualizar lenguaje'),
   'separate_items_with_commas' => __('Separa los lenguajes con comas'),
   'popular_items' => __('Lenguajes más utilizados'),
   'choose_from_most_used' => __('Elige entre los lenguajes más utilizados'),
   'add_or_remove_items' => __( 'Agregar o quitar lenguajes'),
   'not_found' => __('No se encontraron lenguajes'),
   'not_found_in_trash' => __('No se encontraron lenguajes en la basura'), 
   'menu_name' => __("Lenguajes")
 );

/*
  Definimos las propiedades de comportamiento. 
  Para asignar las etiquetas utilizamos el nombre del arreglo. 
  De esta manera queda un poco más legible el código. 
*/  
$opciones = array(
    'public' => true,
    'labels' => $etiquetas,
    'hierarchical' => false,
    'rewrite' => array( 'slug' => 'lenguaje', 'with_front' => true )      
);

/*
  Definimos la función que se va a encadenar al evento init. 
  Registramos el nombre de la taxonomía, lo asociamos
  a los tipos de entrada donde queramos utilizar la taxonomía
  y establecemos las opciones. 
*/
function registrar_taxonomia() {
  	register_taxonomy('lenguaje', array( 'page', 'post' ), $opciones);
}

/*
  Creamos el hook para mandar registrar la taxonomía.
*/
add_action('init', 'registrar_taxonomia', 0);

?>