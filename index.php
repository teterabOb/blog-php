<?php
require 'admin/config.php';
require 'functions.php';
session_start();


$conexion = conexion($bd_config);
if(!$conexion){
    //la funcion header redirige al archivo parametrizado
    header('Location: error.php');
}

$posts = obtenerPost($blog_config['post_por_pagina'], $conexion);

if(!$posts){
    header('Location: error.php');
}
 
require 'views/index.view.php';
?>

