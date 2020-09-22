<?php
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if(!$conexion){
    header('Location: error.php');
}

if(empty($id_articulo)){
    header('Location: index.php');
}

$post = obtenerPostPorId($conexion, $id_articulo);

//Si no existe post, redirige al index
if(!$post){
    header('Location: index.php');
}

$post = $post[0];

require 'views/single.view.php'
?>