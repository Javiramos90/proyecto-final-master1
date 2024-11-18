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
            <img data-id="santander" src="Imagenes/Lugares/Cantabria/santander.png" alt="">
            <img data-id="torrelavega" src="Imagenes/Lugares/Cantabria/torrelavega.png" alt="">
            <img data-id="castro-urdiales" src="Imagenes/Lugares/Cantabria/castro-urdiales.png" alt="">
 </section>
    </main>
<?php
include './vistas/footer.php';
?>
<script src="js\selectProvincia.js"></script>
</body>

</html>