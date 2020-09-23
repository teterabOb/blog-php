<?php
function conexion($bd_config){
    try {
        //$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config["basedatos"].'',$bd_config["usuario"],$bd_config["pass"]);
        $conexion = new PDO('mysql:host=localhost;dbname=blog','root','');
        return $conexion;
    } catch (PDOException $e) {                     
        echo "Error: ". $e->getMessage();
     }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}


function obtenerPost($post_por_pagina, $conexion){
    $inicio = (paginaActual() > 1) ? paginaActual() * $post_por_pagina - $post_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT  SQL_CALC_FOUND_ROWS id,titulo,extracto,fecha,texto,IF(ISNULL(THUMB)=1,\"\",THUMB) AS THUMB
                                    FROM    posts 
                                    WHERE ID > 0 LIMIT $inicio, $post_por_pagina");
    //$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM posts WHERE ID > 0 LIMIT $inicio, $post_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtenerPostPorId($conexion, $id){
    $resultado = $conexion->prepare("SELECT * FROM posts WHERE id = $id");
    $resultado->execute();
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function paginaActual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function id_articulo($id){
    return (int)limpiarDatos($id);
}

function comprobarSession(){
    if(!isset($_SESSION['admin'])){
        header('Location: ' . RUTA);
    }
}

function numeroPaginas($post_por_pagina, $conexion){
    $total_post = $conexion->prepare('SELECT FOUND_ROWS() AS total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    $numero_paginas = ceil($total_post / $post_por_pagina);
    return $numero_paginas;

}