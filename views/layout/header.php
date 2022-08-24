<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/queries.css">
    </head>
    <body>
        <!-- LINKS -->
        <div id="links-header">
            <ul>
                <li><a href="#" class="links-li">Ayuda</a></li>
                <?php if (!isset($_SESSION['identity'])): ?>
                    <span class="links-li">|</span>
                    <li><a href="<?= base_url ?>usuario/logeo" class="links-li">Iniciar sesión</a></li>
                    <span class="links-li">|</span>
                    <li><a href="<?= base_url ?>usuario/registro" class="links-li">Regístrate</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['identity'])): ?>
                    <span class="links-li">|</span>
                    <li><p class="links-li" id="links-cuenta">Hola, <?= $_SESSION['identity']->nombre ?></p></li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- CABECERA -->
        <header id="header">
            <div id="logo-container">
                <a id="logo">
                    <img src="" alt="imagen-logo">
                </a>
                <a href="<?= base_url ?>">
                    <h1>LOGO</h1>
                </a>
            </div>

            <!-- MENU -->

            <nav id="menu">
                <ul>
                    <li><a href="">dfghjk</a></li>
                    <li><a href="">dfghjk</a></li>
                    <li><a href="">dfghjk</a></li>
                    <li><a href="">dfghjk</a></li>
                </ul>
            </nav>
            <div class="iconos">
                <a href=""><div><ion-icon class="fav-icono" name="bookmark-outline"></ion-icon></div></a>
                <a href=""><div><ion-icon class="bolsa-icono" name="bag-outline"></div></ion-icon></a>
                <a class="a-btn"><div><ion-icon class="btn" name="menu-outline"></ion-icon></div></a>
            </div>
        </header>

