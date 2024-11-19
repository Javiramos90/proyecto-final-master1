// Creamos un objeto con los títulos y textos asociados a cada imagen
const info = {
    almeria: {
        title: "Almería",
        image: "Imagenes/Lugares/Andalucia/almeria-image.png",
        tittleHistoria: "Almería: Desde sus orígenes hasta la actualidad",
        textDescripcion:"Los primeros asentamientos humanos en la región de Almería se remontan al Paleolítico, con evidencias de actividad humana en cuevas como la de Los Letreros y Ambrosio. Sin embargo, destaca especialmente la Edad del Cobre con la Cultura de Los Millares (3000-1800 a.C.), ubicada cerca de Santa Fe de Mondújar, que se considera uno de los primeros yacimientos urbanizados en Europa Occidental. Posteriormente, la Cultura de El Argar (2200-1500 a.C.) alcanzó gran relevancia en la Edad del Bronce, caracterizada por sus avanzadas prácticas metalúrgicas. En la Edad Antigua, la costa de Almería atrajo a comerciantes fenicios y griegos, quienes establecieron pequeños enclaves para el intercambio de metales y productos. Más tarde, los cartagineses también se asentaron en la región, especialmente durante su expansión por el Mediterráneo. Con la llegada de los romanos en el siglo III a.C., Almería se integró en la provincia de Hispania Baetica. Durante este período, el comercio marítimo floreció, especialmente en el puerto de Murgi (actual El Ejido). La agricultura, la minería y la producción de salazón se convirtieron en pilares económicos.",
        textDescripcion1:"El siglo XIX marcó un renacimiento económico gracias a la minería, especialmente la extracción de plomo en Sierra Almagrera y Sierra de Gádor. Almería se integró en el sistema ferroviario, lo que facilitó el transporte de minerales y productos agrícolas. Durante la Guerra Civil Española (1936-1939), Almería fue escenario de bombardeos, incluyendo el ataque de la flota nazi al puerto en 1937. La posguerra trajo pobreza y emigración, agravada por la falta de infraestructuras y el aislamiento de la región. En la segunda mitad del siglo XX, Almería experimentó una transformación con el desarrollo de la agricultura intensiva bajo plástico, especialmente en el Campo de Dalías. Además, la provincia comenzó a atraer turistas gracias a su clima, paisajes desérticos y playas. El cine también jugó un papel importante, convirtiendo el Desierto de Tabernas en un plató natural para películas como Lawrence de Arabia y El bueno, el feo y el malo.",
        textDescripcion2:"En la actualidad, Almería es una provincia moderna que combina su rico legado histórico con un desarrollo económico basado en la agricultura de alta tecnología, el turismo sostenible y la industria cinematográfica. Su capital, la ciudad de Almería, alberga monumentos como la Alcazaba, la Catedral y un animado puerto que refleja siglos de historia marítima.",
        tittleInteres:"¿Que hacer Podemos hacer en Almeria ?",
        image1:"Imagenes/Lugares/Andalucia/que-ver-almeria-provincia.png",
        textInteres1:"10 Lugares que ver en Almeria",
        image2:"Imagenes/Lugares/Andalucia/comer-en-almeria.png",
        textInteres2:"Lugares Recomendables para comer en Almeria"
    },
    cadiz: {
        title: "Cádiz",
        text: "Cádiz es famosa por su puerto y la catedral."
    },
    cordoba: {
        title: "Córdoba",
        text: "Córdoba destaca por su mezquita y el casco antiguo."
    },
    huelva: {
        title: "Huelva",
        text: "Huelva es conocida por el Rocío y su costa."
    },
    granada: {
        title: "Granada",
        text: "Granada es famosa por la Alhambra y su historia morisca."
    },
    jaen: {
        title: "Jaén",
        text: "Jaén es conocida por su aceite de oliva y la catedral."
    },
    malaga: {
        title: "Málaga",
        text: "Málaga es famosa por su puerto y su clima cálido."
    },
    sevilla: {
        title: "Sevilla",
        text: "Sevilla destaca por la Giralda y la Plaza de España."
    }
};

// Función para añadir títulos y textos debajo de las imágenes
function addTitlesAndTexts() {
    // Recorremos todas las imágenes dentro de #image-gallery
    const images = document.querySelectorAll('#image-gallery img');
    
    images.forEach(image => {
        // Obtener el data-id de la imagen
        const province = image.getAttribute('data-id');
        
        // Si existe información para esa provincia
        if (info[province]) {
            // Crear el contenedor para el título y el texto
            const container = document.createElement('div');
            container.classList.add('image-info');  // Añadimos una clase para estilizar

            // Crear el título
            const title = document.createElement('h3');
            title.textContent = info[province].title;

            // Crear el texto
            const text = document.createElement('p');
            text.textContent = info[province].text;

            // Añadir el título y el texto al contenedor
            container.appendChild(title);
            container.appendChild(text);

            // Insertar el contenedor debajo de la imagen
            image.parentElement.appendChild(container);
        }
    });
}

function mostrarInfoProvincia(){
    const contenedor = document.querySelector('.info')
    const image = info[provincia].image ? `<img src="${info[provincia].image}"/>` : '';
    const  image1 = info[provincia].image1 ? `<img src="${info[provincia].image1}"/>` : '';
    const  image2 = info[provincia].image2 ? `<img src="${info[provincia].image2}"/>` : '';
    contenedor.innerHTML = `
    <h3 class="tittle">${info[provincia].title}</h3>
    <div class="imageProvince">${image}</div>
    <hr>
    <hr>
    <h4>${info[provincia].tittleHistoria}</h4>
    <hr>
    <hr>
    <p>${info[provincia].textDescripcion}</p>
    <p>${info[provincia].textDescripcion1}</p>
    <p>${info[provincia].textDescripcion2}</p>
    <hr>
    <hr>
    <h4>${info[provincia].tittleInteres}</h4>
    <hr>
    <hr>
    <div class="container-provincia">
        <div class= "visitar-provicia">
        ${image1}
         <p>${info[provincia].textInteres1}</p> 
        </div>
        <div class= "comer-provincia">
        ${image2}
         <p>${info[provincia].textInteres2}</p> 
        </div>
    
    </div>

    `
}

// Llamamos a la función para añadir los títulos y textos cuando la página cargue
// window.onload = addTitlesAndTexts;
window.onload = mostrarInfoProvincia;
