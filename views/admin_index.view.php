<?php require '../views/header.php'; ?>

<div class="contenedor">
<h2>Panel de Control</h2>
    <?php foreach ($posts as $post):?> 
        <div class="post">
        <article>
           <h2 class="titutlo"></h2>
           <a href="#">Ver</a>
           <a href="#">Editar</a>
           <a href="#">Borrar</a>
        </article>
    </div>
    
<?php endforeach;?>
    
</div>
