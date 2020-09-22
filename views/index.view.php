<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require 'header.php'; ?>

    <div class="container">
        <?php foreach ($posts as $post) : ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?> </a></h2>
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

        <?php endforeach; ?>

    </div>

    <div class="container">
        <?php foreach ($posts as $post) : ?>
            <div class="card">
                <h5 class="card-header"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?> </a></h5>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['fecha']; ?></h5>
                    <p class="card-text"><?php echo $post['texto']; ?> </p>
                    <a href="single.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Continuar Leyendo ...</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php require 'paginacion.php'; ?>


</body>

</html>