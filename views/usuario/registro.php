<div class="formularios">
    <h1>Únete a ...</h1>
    <form action="<?=base_url?>usuario/save" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>

        <input type="text" name="apellidos"placeholder="Apellidos" required>
        
        <input type="email" name="email" placeholder="Email" required>
        
        <input type="password" name="password" placeholder="Contraseña" required>

        <input type="text" name="date" placeholder="Fecha de nacimiento" onfocus="(this.type='date')" required> 

        <input type="checkbox" required>
        <p>Acepto la <a href="#" class="links-check">política de privacidad</a> y los <a href="#" links-check>términos de uso</a> de la empresa</p>
        

        <input type="submit" value="Enviar">
    </form>
</div>
