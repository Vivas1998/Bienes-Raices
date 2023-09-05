<main class="contenedor seccion">
    <h1>Actualizar propiedad</h1>
    <?php foreach($errores as $error) { ?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>
    <?php } ?>
    <a href="/admin" class="boton-verde">Volver</a>
    <form method="post" class="formulario" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>
        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>
</main>