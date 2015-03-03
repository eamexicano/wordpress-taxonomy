Wordpress Taxonomy
==================

Ejemplo de referencia para generar una taxonomía en wordpress con fines didácticos y recreativos.  
La taxonomía - lenguajes - se utiliza para clasificar páginas y entradas con lenguajes (pensando en 
lenguajes de marcado y / o programación).  
Los lenguajes se pueden registrar al momento de generar el contenido o en el menú de lenguajes.  
Se incluye el archivo taxonomy-lenguaje.php  que es una plantilla que se utiliza para visualizar las páginas y entradas  
que pertenezcan a cierto lenguaje (determinado en el URL). 


Uso
===

Incluir el archivo lenguajes.php en la carpeta de plugins - wp-content/plugins -.  
Incluir el archivo taxonomy-lenguaje.php en la carpeta del tema que estés utilizando.  

Plantillas
==========

Se incluye una plantilla para generar taxonomías - taxonomy-template.php - y la plantilla para el tema - theme-template-taxonomy.php -.  
En el archivo taxonomy-template.php modificar los comentarios para que describan tu taxonomía:  

Plugin Name: {Nombre}  
Plugin URI: {http://www.example.com/}  
Description: {Descripción}  
Version: {Versión}  
Author:  {Author}  
Author URI: {http://www.example.com}  
License: MIT  

Actualizar el texto que está entre llaves {} (y borrar las llaves) en la definición de etiquetas,  
slug (dentro de las opciones) y el nombre de tu taxonomía en register_taxonomy.  

Ajusta el comportamiento de tu taxonomía. 

Si vas a utilizar los enlaces permanentes - permalinks - vuelve a guardar los cambios después de  
activar el plugin de la taxonomía.

Cambia el nombre del archivo - taxonomy-template.php - por el nombre de tu taxonomia.php

Si quieres utilizar la plantilla para el tema cambia el nombre del archivo theme-template-taxonomy.php por el nombre   
taxonomy-{taxonomia}.php donde {taxonomia} es el nombre de tu taxonomía. 

Si quieres visualizar las taxonomías que están asociadas a la entradas cambia el valor {taxonomia} por el nombre de tu taxonomía
en la función get_the_term_list


Referencia 
==========

[Taxonomías personalizadas](http://blog.eamexicano.com/wordpress/wordpress-taxonomias-personalizadas/)

[@eamexicano](http://www.eamexicano.com)  

Licencia MIT
============