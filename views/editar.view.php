<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo"><a >Editar Articulo</a></h2>
            <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                <input type="hidden" name="id" value="<?php echo $post['titulo']; ?>">
                <input class="form-control" type="text" name="titulo" placeholder="Titulo del Articulo" value="<?php echo $post['titulo']; ?>"> <br>
                <input class="form-control" type="text" name="extracto" placeholder="Extracto del Articulo" value="<?php echo $post['extracto']; ?>"> <br>
                <textarea class="form-control" name="texto" placeholder="Texto del Articulo"  cols="60" rows="20" value="<?php echo $post['texto']; ?>"><?php echo $post['texto']; ?></textarea> <br>

              
                
                <input type="file" name="thumb" id="">
                <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">
                             
              

                
                <?php /*echo 'El thumb :'. gettype( $post['thumb']); */?>
                <?php /*echo print_r($post); */?>
                <input class="btn btn-primary" type="submit" value="Editar Articulo">
            </form>
           
        </article>
    </div>
</div>