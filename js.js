const Http = new XMLHttpRequest();
const ul = document.getElementById('company-results');

const movieId = 776835; // ID de ejemplo para la película "No Time to Die"
const apiKey = '5cca8eb88c838ba5c62f06b7b6a8a2b2';

const url = `https://api.themoviedb.org/3/movie/${movieId}?api_key=${apiKey}&language=en-US`;
const url1 = `https://api.themoviedb.org/3/movie/${movieId}/images?api_key=${apiKey}&language=en-US`;

Http.open('GET', url);
Http.send();

Http.onreadystatechange = (e) => {
  if (Http.readyState === 4 && Http.status === 200) {
    const response = JSON.parse(Http.responseText);
    const title = response.title;
    const releaseDate = response.release_date;
    const overview = response.overview;

    const liTitle = document.createElement('li');
    liTitle.textContent = `Title: ${title}`;
    ul.appendChild(liTitle);

    const liReleaseDate = document.createElement('li');
    liReleaseDate.textContent = `Release date: ${releaseDate}`;
    ul.appendChild(liReleaseDate);

    const liOverview = document.createElement('li');
    liOverview.textContent = `Overview: ${overview}`;
    ul.appendChild(liOverview);

    Http.open('GET', url1);
    Http.send();

    Http.onreadystatechange = (e) => {
      if (Http.readyState === 4 && Http.status === 200) {
        const response = JSON.parse(Http.responseText);
        const images = response.backdrops;
        if (images.length > 0) {
          const imageUrl = 'https://image.tmdb.org/t/p/w500' + images[0].file_path;
          const img = document.getElementById('movie-image');
          img.src = imageUrl;
        }
      }
    };
  }
};


// window.onload = function() {
//     setTimeout(removeLoader, 1500); // tiempo en milisegundos
//   };
  
//   function removeLoader() {
//     var loader = document.getElementById("loader");
//     loader.parentNode.removeChild(loader);
//   }

// particlesJS("particles-js", {
//     "particles": {
//         "number": {
//             "value": 80,
//             "density": {
//                 "enable": true,
//                 "value_area": 500,
//             }
//         },
//         "color": {
//             "value": "#ffffff"
//         },
//         "shape": {
//             "type": "circle",
//             "stroke": {
//                 "width": 0,
//                 "color": "#000000"
//             },
//             "polygon": {
//                 "nb_sides": 5
//             },
//         },
//         "opacity": {
//             "value": 0.5,
//             "random": false,
//             "anim": {
//                 "enable": false,
//                 "speed": 1,
//                 "opacity_min": 0.1,
//                 "sync": false
//             }
//         },
//         "size": {
//             "value": 5,
//             "random": true,
//             "anim": {
//                 "enable": false,
//                 "speed": 300,
//                 "size_min": 0.1,
//                 "sync": false
//             }
//         },
//         "line_linked": {
//             "enable": true,
//             "distance": 150,
//             "color": "#ffffff",
//             "opacity": 0.4,
//             "width": 1
//         },
//         "move": {
//             "enable": true,
//             "speed": 6,
//             "direction": "none",
//             "random": false,
//             "straight": false,
//             "out_mode": "out",
//             "bounce": false,
//             "attract": {
//                 "enable": false,
//                 "rotateX": 600,
//                 "rotateY": 1200
//             }
//         }
//     },
//     "interactivity": {
//         "detect_on": "canvas",
//         "events": {
//             "onhover": {
//                 "enable": true,
//                 "mode": "repulse"
//             },
//             "onclick": {
//                 "enable": true,
//                 "mode": "push"
//             },
//             "resize": true
//         },
//         "modes": {
//             "grab": {
//                 "distance": 400,
//                 "line_linked": {
//                     "opacity": 1
//                 }
//             },
//             "bubble": {
//                 "distance": 400,
//                 "size": 5,
//                 "duration": 2,
//                 "opacity": 8,
//                 "speed": 3
//             },
//             "repulse": {
//                 "distance": 50,
//                 "duration": 0.4
//             },
//             "push": {
//                 "particles_nb": 4
//             },
//             "remove": {
//                 "particles_nb": 6
//             }
//         }
//     },
//     "retina_detect": true
// });



// const Http = new XMLHttpRequest();
// const url = 'www.thecocktaildb.com/api/json/v1/1/search.php?f=a'; // Puedes cambiar el número del ID para obtener diferentes comentarios
// const listaComentarios = document.getElementById('lista-api');

// Http.open("GET", url);
// Http.send();

// Http.onreadystatechange = (e) => {
//     if (Http.readyState === 4 && Http.status === 200) {
//         const respuesta = JSON.parse(Http.responseText);

//         if (Array.isArray(respuesta)) { // Si la respuesta es un array
//             respuesta.forEach(comentario => {
//                 const li = document.createElement('li');
//                 li.textContent = comentario.name;
//                 listaComentarios.appendChild(li);
//             });
//         } else { // Si la respuesta es un solo objeto
//             const li = document.createElement('li');
//             li.textContent = respuesta.name;
//             listaComentarios.appendChild(li);
//         }
//     }
// };
