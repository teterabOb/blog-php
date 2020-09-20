<?php require 'header.php'; ?>


<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo"><a href="#"> <?php echo $post['titulo']; ?></a></h2>
            <p class="fecha"><?php echo $post['fecha']; ?></p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?> /imagenes/1.png" alt="">
                </a>
            </div>
            <p class="extracto">
                <?php echo nl2br($post['texto']); ?>
            </p>
        </article>
    </div>
</div>