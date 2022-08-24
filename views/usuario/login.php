<div class="formularios">
    <h1>Inicio de sesión</h1>
    <form action="<?=base_url?>usuario/login" method="post">
        <input type="email" name="email" placeholder="email" required>

        <input type="password" name="password" placeholder="contraseña" required>

        <input type="submit" value="Enviar">
    </form>
</div>