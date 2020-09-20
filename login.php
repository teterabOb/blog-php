<?php session_start();
require 'admin/config.php';
require 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);

    if($usuario == $blog_admin['usuario'] && $password ==  $blog_admin['password']){
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('Location: index.php');
    }

}

/*
$errores = '';

if(isset($_POST['submit'])){
    $usuario = $POST['usuario'];
    $password = $POST['password'];

    if(!empty($usuario)){
        $usuario = trim($usuario);
        $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
    }else{
        $errores .= 'Por favor ingresar un nombre <br />';
    }
    if(!empty($password)){
        $password = trim($password);
    }else{
        $errores .= 'Por favor ingresar una contraseña <br />';
    }
}
*/


require 'views/login.view.php';

?>
