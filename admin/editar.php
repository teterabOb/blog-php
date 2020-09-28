<?php  session_start();

require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);
if(!$conexion){
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = limpiarDatos($_POST['texto']);
    $id = limpiarDatos($_POST['id']);
    $thumb_guardada = limpiarDatos($_POST['thumb-guardada']);
    $thumb = $_FILES['thumb'];


    
    if(empty($thumb['name'])){
        $thumb = $thumb_guardada;
    }else{
        $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
        move_uploaded_file($_FILES['thumb']['tpm_name'], $archivo_subido);
        $thumb = $_FILES['thumb']['name'];
    }
    

    $statement = $conexion->prepare(
        "UPDATE posts SET   titulo = :titulo,
                            extracto = :extracto,
                            texto = :texto,
                            thumb = :thumb
        WHERE id = :id"
    );

    //Using execute, this returns true or false
    if($statement->execute(array(
         ':titulo' => $titulo,
         ':extracto' => $extracto,
         ':texto' => $texto, 
         ':thumb' => $thumb ,
         ':id' => 1
    ))){
        echo 'ejecutada correctamente ';
    }else{ 
        echo 'no ejecutada';
    }

    header('Location: index.php');

}else{
    
    $id_articulo = id_articulo($_GET['id']);
 
    if(empty($id_articulo)){
        header('Location: ' . RUTA . '/admin');
    }

    $post = obtenerPostPorId($conexion, $id_articulo);

    if (!$post) {
        header('Location: ' . RUTA . '/admin');
    }

    $post = $post[0];
    
}
require '../views/editar.view.php';

?>