<?php
include_once './vistas/encabezado.php';
?>
<body>
    <header>
        <?php
        include './vistas/navbar.php';
        ?>
    </header>
    <main>
        <div class="contact">
            <h1>CONTACTO</h1>
            <p>¿Si tienes alguna duda de nuestros servicios? ¿Has tenido algun tipo de contratiempo con algun producto?¿Necesitas comentarnos algun tipo de experiencia para mejorar la calidad?</p>
            <p>Rellena este formulario o ponte en contacto con nosotros enviándonos un E-Mail a <b>info@Sinrumbofijo.com</b></p>
        </div>
        <form id="contactForm">
            <div class="item-contact">
                <h2 id="titleForm">Formulario</h2>
                <label for="nombre"><b>Nombre</b></label>
                <input required type="text" id="nombreForm">
            </div>
            <div class="item-contact">
                <label for="email"><b>Email</b></label>
                <input required type="email" id="emailForm">
            </div>
            <div class="item-contact">
                <label for="mensaje"><b>Comentario o Mensaje</b></label>
                <textarea name="mensaje" ></textarea>
            </div>
            <div class="item-contact">
                <label for="politica"><b>Acuerdo al RPGD</b></label>
               <p><input type="checkbox" name="" id="check-contact" class=""> Doy mi consentimiento para que esta web almacene la información que envío para que puedan responder a mi petición<br></p>
               <p><br>Rellenando este formulario nos estás proporcionando datos de carácter personal que serán tratados de forma segura, cumpliendo con el RGPD (Reglamento General de Protección de Datos). La legitimación se realiza a través de tu consentimiento explícito, marcando la pestaña de aceptación. Podrás ejercer tus derechos de acceso, rectificación, limitación y eliminación definitiva de los datos. Más información sobre Protección de Datos en nuestra política de privacidad.</p>

            </div>
            <button class="btn-contact">Enviar</button>
        </form>
    </main>
<?php
include './vistas/footer.php';
?>
</body>

</html>