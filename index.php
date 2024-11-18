<?php
include './vistas/encabezado.php';
?>

<body>
    <header>
        <?php
        include './vistas/navbar.php';
        ?>
        <div class="img-container">
            <div class="img-portada">
                <div>
                    <h1 class="titulo">Descubre España<br>Sin Rumbo Fijo</h1>
                </div>
                <div class="slide"
                    style="background-image: radial-gradient(circle, rgba(52, 128, 58, 0), rgba(252, 252, 252, 0)), url('Imagenes/portada/portada-mochilas.jpg');">
                </div>
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('Imagenes/portada/portada-montaña.jpg');">
                </div>
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('Imagenes/portada/portada_desierto2.jpg');">
                </div>
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('Imagenes/portada/portada_montana_nevada2.jpg');">
                </div>
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('Imagenes/portada/portada_playa2.jpg');">
                </div>
            </div>
        </div>
    </header>
    <main>
        <h2>
            Te invitamos a explorar España como nunca antes. Descubre pueblos encantadores, playas
            escondidas, rutas de montaña y la vibrante cultura española. Te llevamos a través de cada rincón de este
            país diverso, con consejos, historias y recomendaciones para que tu aventura en España sea inolvidable
        </h2>

        <h3>¡BIENVENID@ A PROXIMO DESTINO!</h3>

        <div id="map">
            <div class="mapa">
                <?php
                include_once "mapa.html";
                ?>
            </div>
        </div>
    </main>
    <?php
    include './vistas/footer.php';
    ?>
    <script src="js/principal.js"></script>
</body>

</html>