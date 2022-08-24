<div id="menu-desplegable" class="hidden">
    <div class="iconos">
        <div><ion-icon class="btn" name="close-outline"></ion-icon></div>
    </div>


    <ul>
        <?php if (isset($_SESSION['identity'])): ?>
            <div id="cuenta-desplegable">
                <p>Tu cuenta</p>
            </div>
        <?php endif; ?>
        <li><a href="#" class="menu-li">Inicio</a></li>
        <li><a href="#" class="menu-li">Inicioswertt</a></li>                
        <li><a href="#" class="nav-li">Inicio</a></li>
        <li><a href="#" class="menu-li">Inicio</a></li>
        <li><a href="#" class="menu-li">Inicio</a></li>
    </ul>
    <div id="botones-menu">
        <?php if (!isset($_SESSION['identity'])): ?>
            <form action="<?= base_url ?>usuario/registro"><button id="btn-registro" >Regístrate</button></form>
            <form action="<?= base_url ?>usuario/logeo"><button id="btn-login">Iniciar sesión</button></form>
        <?php endif; ?>    
        <?php if (isset($_SESSION['identity'])): ?>
            <form action="<?= base_url ?>usuario/logout"><button id="btn-logout">Cerrar sesión</button></form>
        <?php endif; ?>
    </div>
</div>
<main id="content">