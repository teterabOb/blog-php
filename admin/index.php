<?php session_start();
//Archivo index del panel de administracion
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

//Comprobar sesion
comprobarSession();

if(!$conexion){
    header('Location: ../error.php');
}

$posts = obtenerPost($blog_config['post_por_pagina'], $conexion);

require '../views/admin_index.view.php';



?>