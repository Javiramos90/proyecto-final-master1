<?php
include './vistas/encabezado.php';
?>

<body>
    <header>
        <?php
        include './vistas/navbar.php';
        ?>
    </header>
    <main>
        <div class="img-privacidad">
            <a href="index.php"><img src="Imagenes/logo_SRF_sinFondo.png" alt=""></a>
        </div>
        <div class="portadaPolitica">
            <img src="Imagenes\politica-de-privacidad.png" alt="">
        </div>
        <div class="indicePolitica">
            <h2>Contenido que vas a observar [<a href="javascript:void(0);" class="toggle-link"
                    id="toggleLink">Mostrar</a>]</h2>
            <ul class="indice" id="indice">
                <li><a href="#responsable">1. Responsable del Tratamiento de Datos</a></li>
                <li><a href="#datos">2. Datos que Recopilamos</a></li>
                <li><a href="#finalidades">3. Finalidades del Tratamiento de Datos</a></li>
                <li><a href="#base-legal">4. Base Legal para el Tratamiento</a></li>
                <li><a href="#comparticion">5. Compartición de Datos con Terceros</a></li>
                <li><a href="#transferencias">6. Transferencias Internacionales de Datos</a></li>
                <li><a href="#seguridad">7. Seguridad de tus Datos</a></li>
                <li><a href="#derechos">8. Tus Derechos</a></li>
                <li><a href="#cookies">9. Cookies</a></li>
                <li><a href="#cambios">10. Cambios a esta Política de Privacidad</a></li>
                <li><a href="#contacto">11. Contacto</a></li>
            </ul>
        </div>

        <div class="politicaContenido">
            <h2 id="responsable">1. Responsable del Tratamiento de Datos</h2>
            <p>
                El responsable del tratamiento de tus datos personales es:
                <br> Nombre comercial: [Nombre de la Página de Viajes]
                <br> Domicilio: [Dirección física de la empresa]
                <br> Correo electrónico: [Correo electrónico de contacto]
                <br> Teléfono: [Número de teléfono, si aplica]
            </p>

            <h2 id="datos">2. Datos que Recopilamos</h2>
            <p>
                Recopilamos diferentes tipos de información, que puede incluir:
                <br><b>a) Datos Personales que Proporcionas Voluntariamente:</b>
                <ul>
                    <li>Nombre completo</li>
                    <li>Dirección de correo electrónico</li>
                    <li>Número de teléfono</li>
                    <li>Dirección postal</li>
                    <li>Información de pago</li>
                </ul>
                <br><b>b) Datos Recopilados Automáticamente:</b>
                <ul>
                    <li>Dirección IP</li>
                    <li>Tipo de dispositivo y navegador</li>
                    <li>Páginas visitadas</li>
                    <li>Datos de ubicación aproximada</li>
                </ul>
                <br><b>c) Cookies y Tecnologías Similares:</b>
                Utilizamos cookies para mejorar tu experiencia de usuario. Consulta nuestra <a href="#">Política de Cookies</a>.
            </p>

            <h2 id="finalidades">3. Finalidades del Tratamiento de Datos</h2>
            <p>
                Los datos personales recopilados serán utilizados para las siguientes finalidades:
                <ul>
                    <li>Gestionar tu cuenta y procesar tus reservas de viajes.</li>
                    <li>Enviarte confirmaciones de reservas y otra información relacionada con tus viajes.</li>
                    <li>Enviarte boletines informativos, promociones y ofertas (solo si has dado tu consentimiento).</li>
                    <li>Mejorar nuestra página web y personalizar tu experiencia de usuario.</li>
                    <li>Cumplir con obligaciones legales y resolver disputas.</li>
                </ul>
            </p>

            <h2 id="base-legal">4. Base Legal para el Tratamiento</h2>
            <p>
                El tratamiento de tus datos personales se basa en:
                <ul>
                    <li>Consentimiento explícito: Para el envío de comunicaciones promocionales.</li>
                    <li>Ejecución de un contrato: Para procesar tus reservas y gestionar los servicios solicitados.</li>
                    <li>Cumplimiento de obligaciones legales: Por ejemplo, retención de facturas conforme a la normativa fiscal.</li>
                </ul>
            </p>

            <h2 id="comparticion">5. Compartición de Datos con Terceros</h2>
            <p>
                No vendemos tus datos personales a terceros. Sin embargo, podemos compartir tu información con:
                <ul>
                    <li>Proveedores de servicios: Como plataformas de pago, operadores turísticos, agencias de transporte o servicios de alojamiento.</li>
                    <li>Autoridades legales: Si es requerido por ley o para proteger nuestros derechos legales.</li>
                    <li>Plataformas de análisis y marketing: Como Google Analytics, para mejorar nuestros servicios.</li>
                </ul>
            </p>

            <h2 id="transferencias">6. Transferencias Internacionales de Datos</h2>
            <p>
                Si tus datos son transferidos fuera del Espacio Económico Europeo (EEE), garantizamos que se realicen bajo las salvaguardas adecuadas, como cláusulas contractuales estándar aprobadas por la Comisión Europea.
            </p>

            <h2 id="seguridad">7. Seguridad de tus Datos</h2>
            <p>
                Hemos implementado medidas técnicas y organizativas para proteger tus datos frente a accesos no autorizados, pérdida o alteración, como:
                <ul>
                    <li>Encriptación de datos sensibles.</li>
                    <li>Acceso restringido a empleados autorizados.</li>
                    <li>Auditorías regulares de seguridad.</li>
                </ul>
            </p>

            <h2 id="derechos">8. Tus Derechos</h2>
            <p>
                Como usuario, tienes los siguientes derechos:
                <ul>
                    <li>Acceso: Solicitar una copia de tus datos personales.</li>
                    <li>Rectificación: Corregir datos inexactos o incompletos.</li>
                    <li>Supresión: Solicitar la eliminación de tus datos cuando ya no sean necesarios.</li>
                    <li>Oposición: Negarte al tratamiento de tus datos para ciertas finalidades, como marketing.</li>
                    <li>Portabilidad: Obtener tus datos en un formato estructurado y de uso común.</li>
                </ul>
                Para ejercer estos derechos, contáctanos en [Correo electrónico de contacto].
            </p>

            <h2 id="cookies">9. Cookies</h2>
            <p>
                Usamos cookies para personalizar tu experiencia y analizar el uso del sitio. Puedes gestionar tus preferencias en la configuración de tu navegador o en nuestra <a href="#">Política de Cookies</a>.
            </p>

            <h2 id="cambios">10. Cambios a esta Política de Privacidad</h2>
            <p>
                Nos reservamos el derecho de modificar esta política en cualquier momento. Publicaremos cualquier cambio en esta página y, si son significativos, te notificaremos por correo electrónico o mediante un aviso en el sitio web.
            </p>

            <h2 id="contacto">11. Contacto</h2>
            <p>
                Si tienes preguntas o inquietudes sobre esta Política de Privacidad, puedes comunicarte con nosotros en:
                <br> Correo electrónico: [Correo electrónico de contacto]
                <br> Teléfono: [Número de teléfono, si aplica]
            </p>
        </div>
    </main>
    <script>
        document.getElementById("toggleLink").addEventListener("click", function () {
            const indice = document.getElementById("indice");
            const link = document.getElementById("toggleLink");

            if (indice.style.display === "none" || indice.style.display === "") {
                indice.style.display = "block"; // Muestra el índice
                link.textContent = "Ocultar"; // Cambia el texto del enlace
            } else {
                indice.style.display = "none"; // Oculta el índice
                link.textContent = "Mostrar"; // Cambia el texto del enlace
            }
        });
    </script>
<?php
include './vistas/footer.php';
?>
</body>
