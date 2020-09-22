
<!--  CSS  -->
<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/style.css">
<!--  CSS  -->
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/style.css">

<header class="contenedor">
    <nav class="menu">
        <ul class="ula">
            <li class="lia"><a class="ab active" href="../index.php">Inicio<i class=""></i></a></li>
            <li class="lia"><a class="ab" href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="lia"><a class="ab" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="lia"><a class="ab" href="#">Contacto <i class="far fa-envelope"></i></a></li>
            <li class="lia"><a class="ab" href="#"> <?php echo (__FILE__); ?>   <i class="far fa-envelope"></i></a></li>

            <?php if (isset($_SESSION['admin'])) :  ?>
                <li class="lia"><a class="ab" href="admin/index.php"><?php echo 'admin :' . $_SESSION['admin']; ?> <i class="fa fa-user"></i></a></li>                           
            <?php else : ?>
                <li class="lia"><a class="ab" href="login.php">Iniciar Sesion <i class="fa fa-user"></i></a></li>
            <?php endif; ?>
        </ul>

    </nav>
</header>