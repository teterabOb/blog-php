<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  CSS 
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
     -->

    <title>Document</title>
</head>
<body>

    <?php require 'header.php'; ?>

    <div class="contenedor">
        <?php foreach ($posts as $post):?> 
            <div class="post">
            <article>
                <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']?> </a></h2>
                <p class="fecha"><?php echo $post['fecha']; ?></p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?> /imagenes/1.png" alt="">
                    </a>
                </div>
                <p class="extracto">
                    <?php echo $post['extracto']; ?>
                </p>
                <a href="#" class="continuar">Continuar Leyendo</a>
            </article>
        </div>
        
    <?php endforeach;?>
        
    </div>


    <?php require 'paginacion.php'; ?>

    
</body>
</html>
