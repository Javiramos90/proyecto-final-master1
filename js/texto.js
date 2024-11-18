// // Creamos un objeto con los títulos y textos asociados a cada imagen
// const info = {
//     almeria: {
//         title: "Almería",
//         text: "Almería, conocida por su sol y playas."
//     },
//     cadiz: {
//         title: "Cádiz",
//         text: "Cádiz es famosa por su puerto y la catedral."
//     },
//     cordoba: {
//         title: "Córdoba",
//         text: "Córdoba destaca por su mezquita y el casco antiguo."
//     },
//     huelva: {
//         title: "Huelva",
//         text: "Huelva es conocida por el Rocío y su costa."
//     },
//     granada: {
//         title: "Granada",
//         text: "Granada es famosa por la Alhambra y su historia morisca."
//     },
//     jaen: {
//         title: "Jaén",
//         text: "Jaén es conocida por su aceite de oliva y la catedral."
//     },
//     malaga: {
//         title: "Málaga",
//         text: "Málaga es famosa por su puerto y su clima cálido."
//     },
//     sevilla: {
//         title: "Sevilla",
//         text: "Sevilla destaca por la Giralda y la Plaza de España."
//     }
// };

// // Función para añadir títulos y textos debajo de las imágenes
// function addTitlesAndTexts() {
//     // Recorremos todas las imágenes dentro de #image-gallery
//     const images = document.querySelectorAll('#image-gallery img');
    
//     images.forEach(image => {
//         // Obtener el data-id de la imagen
//         const province = image.getAttribute('data-id');
        
//         // Si existe información para esa provincia
//         if (info[province]) {
//             // Crear el contenedor para el título y el texto
//             const container = document.createElement('div');
//             container.classList.add('image-info');  // Añadimos una clase para estilizar

//             // Crear el título
//             const title = document.createElement('h3');
//             title.textContent = info[province].title;

//             // Crear el texto
//             const text = document.createElement('p');
//             text.textContent = info[province].text;

//             // Añadir el título y el texto al contenedor
//             container.appendChild(title);
//             container.appendChild(text);

//             // Insertar el contenedor debajo de la imagen
//             image.parentElement.appendChild(container);
//         }
//     });
// }

// // Llamamos a la función para añadir los títulos y textos cuando la página cargue
// window.onload = addTitlesAndTexts;
