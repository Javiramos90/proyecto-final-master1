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
                <img data-id="aviles" src="Imagenes/Lugares/Asturias/aviles.png" alt="">
                <img data-id="gijon" src="Imagenes/Lugares/Asturias/gijon.png" alt="">
                <img  data-id="oviedo" src="Imagenes/Lugares/Asturias/oviedo.png" alt=""> 
        </section>
    </main>
<?php
include './vistas/footer.php';
?>
<script src="js\selectProvincia.js"></script>
</body>

</html>