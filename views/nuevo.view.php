<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo"><a href="">Nuevo Articulo</a></h2>
            <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="titulo" placeholder="Titulo del Articulo" > <br>
                <input type="text" name="extracto" placeholder="Extracto del Articulo"> <br>
                <textarea name="texto" placeholder="Texto del Articulo"  cols="60" rows="20"></textarea> <br>
                <input type="file" name="thumb">
                <input type="submit" value="Crear Articulo">
            </form>
        </article>
    </div>
</div>