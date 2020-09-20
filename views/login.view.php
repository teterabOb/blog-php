<?php
require 'header.php';
?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo"><a href="#"> </a></h2>
            <form class='formulario' method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="usuario" placeholder="Usuario"> </br>
                <input type="password" name="password" placeholder="Password"> </br>
                <input type="submit" value="Iniciar Sesion">
            </form>
        </article>
    </div>
</div>