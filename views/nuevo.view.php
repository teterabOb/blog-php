<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo"><a href="">Nuevo Articulo</a></h2>
            <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input class="form-control" type="text" name="titulo" placeholder="Titulo del Articulo" > <br>
                <input class="form-control" type="text" name="extracto" placeholder="Extracto del Articulo"> <br>
                <textarea class="form-control" name="texto" placeholder="Texto del Articulo"  cols="60" rows="20"></textarea> <br>

                <div class="custom-file mb-3">
                <input class="custom-file-input" type="file" name="thumb">
                    <label class="custom-file-label">Seleccionar archivo...</label>
                    
                </div>

                
                <input class="btn btn-primary" type="submit" value="Crear Articulo">
            </form>
        </article>
    </div>
</div>