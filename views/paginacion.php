<?php $numero_paginas = numeroPaginas($blog_config['post_por_pagina'], $conexion); ?>

<section class="paginacion">
    <ul>
        <?php if (paginaActual() === 1) : ?>
            <li class="li-paginacion disabled">&laquo;</li>
        <?php else : ?>
            <li class="li-paginacion"><a href="index.php?p=<?php echo paginaActual() - 1 ?>">&laquo;</a></li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $numero_paginas; $i++) : ?>
            <?php if (paginaActual() === $i) : ?>
                <li class="li-paginacion">
                    <?php echo $i; ?>
                </li>
            <?php else : ?>
                <li class="li-paginacion"><a class="t-blanco" href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>
        <?php endfor; ?>

        <li class="li-paginacion"><a class="t-blanco" href="#">&raquo;</a></li>
    </ul>
</section>