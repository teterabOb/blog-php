<?php require '../views/header.php'; ?>

<div class="contenedor post">
    <h2>Panel de Control</h2>
    <div class="col-12">
        <a href="nuevo.php" class="btn btn-danger">Nuevo Post</a>
        <a href="cerrar.php" class="btn btn-danger">Cerrar Sesion</a>
    </div>

    <div class="col-12">
        <table class="table table-bordered">
            <tr class="bg-danger text-white">
                <th>#</th>
                <th>Titulo</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($posts as $post) : ?>
                <tr>
                    <td><?php echo $post['id']; ?></td>
                    <td><?php echo $post['titulo']; ?></td>
                    <td><a href="../admin/editar.php?id=<?php echo $post['id']; ?>"><i class="far fa-edit"> Editar</i></a></td>
                    <td><a href="../single.php?id=<?php echo $post['id']; ?>"><i class="fas fa-eye"> Ver</i></a></td>
                    <td><a href="../borrar.php?id=<?php echo $post['id']; ?>"><i class="far fa-trash-alt"> Borrar</a></i></td>
                </tr>


                <!--
                
            <div class="post">
                <article>
                    <h2 class="titutlo"><?php echo $post['id'] . '- ' . $post['titulo']; ?></h2>
                    <a href="../admin/editar.php?id=<?php echo $post['id']; ?>">Editar</a>
                    <a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
                    <a href="../borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
                </article>
            </div>
            

        -->

            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php require 'paginacion.php'; ?>