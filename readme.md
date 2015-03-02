lenguajes.php
================

Ejemplo de referencia para generar una taxonomía en wordpress. 
La taxonomía se utiliza para clasificar páginas y entradas con lenguajes (de marcado / programación).  
Los lenguajes se tienen que dar de alta ya sea al momento de generar el contenido o en el menú de lenguajes.  
Se incluyen una plantilla taxonomy-lenguaje.php que se utiliza para visualizar las páginas y entradas  
que pertenezcan a cierto lenguaje. 


Uso
===

Incluir el archivo lenguajes.php en la carpeta de plugins - wp-content/plugins -.  
Incluir el archivo taxonomy-lenguaje.php en la carpeta del tema que estés utilizando actualmente.  

Plantillas
==========

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

Referencia <http://blog.eamexicano.com/wordpress/wordpress-taxonomias-personalizadas/>
