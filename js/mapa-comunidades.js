document.addEventListener('DOMContentLoaded', function () {
    console.log('El DOM está completamente cargado');
    // Aquí puedes ejecutar tu código
    const miElementos = document.querySelectorAll('.lugar')
    miElementos.forEach(elemento => {
        elemento.addEventListener("mouseenter", (event) => {
            resaltarProvincia(event.target)
        });
        elemento.addEventListener("mouseleave", deshabilitarProvincia
        );

    })
})

function resaltarProvincia(event) {
    const comunidad = event.text.trim()
    console.log(comunidad);
    switch (comunidad) {
        case "Andalucia":
            $('.spain').attr('src', './img/andalucia.png')
            break;
        case "Aragon":
            $('.spain').attr('src', './img/aragon.png')
            break;
        case "Asturias":
            $('.spain').attr('src', './img/asturias.png')
            break;
        case "Baleares":
            $('.spain').attr('src', './img/baleares.png')
            break;
        case "Canarias":
            $('.spain').attr('src', './img/canarias.png')
            break;
        case "Cantabria":
            $('.spain').attr('src', 'img/cantabria.png')
            break;
        case "Castilla y Leon":
            $('.spain').attr('src', './img/castilla-y-leon.png')
            break;
        case "Castilla-LaMancha":
            $('.spain').attr('src', 'img/castilla-la-mancha.png')
            break;
        case "Cataluña":
            $('.spain').attr('src', './img/catalunya.png')
            break;
        case "Ceuta":
            $('.spain').attr('src', './img/ceuta.png')
            break;
        case "Valencia":
            $('.spain').attr('src', './img/comun-valenciana.png')
            break;
        case "Extremadura":
            $('.spain').attr('src', './img/extremadura.png')
            break;
        case "Galicia":
            $('.spain').attr('src', './img/galicia.png')
            break;
        case "Madrid":
            $('.spain').attr('src', './img/madrid.png')
            break;
        case "Melilla":
            $('.spain').attr('src', './img/melilla.png')
            break;
        case "Murcia":
            $('.spain').attr('src', './img/murcia.png')
            break;
        case "Navarra":
            $('.spain').attr('src', './img/navarra.png')
            break;
        case "Pais Vasco":
            $('.spain').attr('src', './img/pais-vasco.png')
            break;
        case "La Rioja":
            $('.spain').attr('src', './img/rioja.png')
            break;
        default:

            break;
    }

}
function deshabilitarProvincia() {
     $('.spain').attr('src', './img/transparente.png')

}