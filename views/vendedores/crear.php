<main class="contenedor seccion">
    <h1>Registrar Vendedor</h1>
    <a href="/admin" class="boton-verde">Volver</a>
    
    <?php foreach($errores as $error) { ?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>
    <?php } ?>
    
    <form action="/vendedores/crear" class="formulario" method="POST">
        <?php include 'formulario.php'; ?>

        <input type="submit" value="Registrar vendedor" class="boton boton-verde">
    </form>
</main>