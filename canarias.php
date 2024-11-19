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
        <section id="image-gallery">
            <img data-id="fuerteventura" src="Imagenes/Lugares/Canarias/fuerteventura.png" alt="">
            <img data-id="la-gomera" src="Imagenes/Lugares/Canarias/la_gomera.png" alt="">
            <img data-id="lanzarote" src="Imagenes/Lugares/Canarias/lanzarote.png" alt="">
            <img data-id="las-palmas" src="Imagenes/Lugares/Canarias/el-rocio-huelva.png" alt="">
            <img data-id="tenerife" src="Imagenes/Lugares/Canarias/granada_Alhambra.png" alt="">
           </section>
    </main>
<?php
include './vistas/footer.php';
?>
<script src="js\selectProvincia.js"></script>
</body>

</html>