const params = new URLSearchParams(window.location.search);
const provincia = params.get("provincia");
const element = document.querySelector(`[data-id="${provincia}"]`);
element.style.width = '640px';

// Obtener todas las imágenes en la galería
const images = document.querySelectorAll('#image-gallery img');

// Definir un objeto con los títulos y textos
const placeInfo = {
    "almeria": {
        title: "Almería",
        text: "Almería es conocida por su arquitectura árabe y su impresionante costa."
    },
    "cadiz": {
        title: "Cádiz",
        text: "Cádiz, famosa por su casco antiguo y sus playas, tiene un ambiente único."
    },
    "cordoba": {
        title: "Córdoba",
        text: "Córdoba es famosa por la Mezquita-Catedral, una de las maravillas de la arquitectura islámica."
    },
    "huelva": {
        title: "Huelva",
        text: "Huelva es conocida por su rica historia minera y su proximidad al Parque Nacional de Doñana."
    },
    "granada": {
        title: "Granada",
        text: "Granada es famosa por la Alhambra, una fortaleza y palacio histórico de los moros."
    },
    "jaen": {
        title: "Jaén",
        text: "Jaén es conocida por sus olivos y su patrimonio medieval."
    },
    "malaga": {
        title: "Málaga",
        text: "Málaga es la ciudad natal de Picasso, con playas y un centro histórico vibrante."
    },
    "sevilla": {
        title: "Sevilla",
        text: "Sevilla es famosa por la Giralda y su flamenco, la cuna del arte flamenco."
    }
};

// Agregar un evento click a cada imagen
images.forEach(image => {
    image.addEventListener('click', () => {
        const dataId = image.getAttribute('data-id');
        const infoDiv = image.nextElementSibling; // El div .info debajo de la imagen

        // Insertar título y texto según el id de la imagen
        if (placeInfo[dataId]) {
            infoDiv.innerHTML = `
                <h3>${placeInfo[dataId].title}</h3>
                <p>${placeInfo[dataId].text}</p>
            `;
        }
    });
});