<main class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>
        <?php include 'iconos.php' ?>
    </main>
    <section class="seccion contenedor">
        <h2>Casas y Apartamentos en Venta</h2>
        <?php 
            include 'listado.php'; 
        ?>
        <div class="alinear-derecha">
            <a href="/propiedades" class="boton-verde">
                Ver todas
            </a>
        </div>
    </section>
    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>
            Rellena el formulario de contacto y un asesor se pondra en contacto contigo en breve.
        </p>
        <a href="contacto.html" class="boton-amarillo">
            Contactanos
        </a>
    </section>
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.avif" type="img/avif">
                        <source srcset="build/img/blog1.webp" type="img/webp">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.avif" type="img/avif">
                        <source srcset="build/img/blog2.webp" type="img/webp">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para la decoracion de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>
            </article>
        </section>
        <section class="textimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>El personal se comporto de una forma excelente, muy buena atencion, y la casa que me ofrecion cumple con mis expectativas</blockquote>
                <p>- Pablo Vivas Garcia</p>
            </div>
        </section>
    </div>