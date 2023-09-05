<main class="contenedor seccion">
    <h1>Contacto</h1>
    <?php if($mensaje) { ?>
            <p class='alerta exito'><?php echo $mensaje; ?></p>
        <?php } ?>
    <picture>
        <source srcset="build/img/destacada3.avif" type="img/avif">
        <source srcset="build/img/destacada3.webp" type="img/webp">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
    </picture>
    <h2>Rellene el formulario</h2>
    <form action="/contacto" class="formulario" method="POST">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="name">Nombre</label>
            <input type="text" placeholder="Tu Nombre" id="name" name="contacto[nombre]" required>

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
        </fieldset>
        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <label for="opciones">Vende o compra</label>
            <select id="opciones" name="contacto[tipo]" required>
                <option value="" disabled selected>--Seleccione--</option>
                <option value="compra">Compra</option>
                <option value="vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu precio" id="presupuesto" name="contacto[precio]" required>
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input type="radio" id="contactar-telefono" value="telefono" name="contacto[contacto]" required>
                <label for="contactar-email">Email</label>
                <input type="radio" id="contactar-email" value="email" name="contacto[contacto]" required>
            </div>
            <div id="contacto">

            </div>

        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>