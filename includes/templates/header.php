<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bienesraices/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienesraices/index.php">
                    <img src="/bienesraices/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>
                <div class="mobile-menu">
                    <img src="/bienesraices/build/img/barras.svg" alt="Icono Menu">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/bienesraices/build/img/dark-mode.svg" alt="Tema oscuro">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if($auth) { ?>
                            <a href="cerrar-sesion.php">Cerrar Sesion</a>
                        <?php } ?>
                    </nav>
                </div>
            </div>

            <?php
            if(@$inicio) {
            ?>
            <h1>Venta de Casa y Apartamentos Exclusivos de Lujo</h1>
            <?php } ?>
        </div>
    </header>