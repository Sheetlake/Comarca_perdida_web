// Funcionalidades y estilos

document.addEventListener("DOMContentLoaded", (event) => {
    
    // Obtenemos  los elementos con los que queremos interactuar por medio
    // de su clase. En este caso el input de buscar y el boton de la lupa
    let input_search =  document.querySelector(".search__input");
    let btn_search = document.querySelector(".navbar__button");

    btn_search.addEventListener("click", () => {
        let visible = document.querySelector(".visible");

        if(visible){            
            input_search.style.width = "0";
            input_search.style.padding = "0rem";              
            input_search.classList.remove("visible");
        }
        else{
            input_search.style.width = "20rem";
            input_search.style.padding = "0.5rem";            
            input_search.classList.add("visible");
        }
    });


    // Manipulacion del frame del video
    
    //Cogemos el elemento iframe de la caja del video principal y la lista
    //de videos como un array
    const iframe = document.querySelector(".videos__main-video iframe");
    const videoList = document.querySelectorAll(".videos__video");
    const videoTitle = document.querySelector(".main-video__title");
    const videoAuthor = document.querySelector(".main-video__author");

    // Recorremos el array y le añadimos un eventlistener para cambiar el src del iframe
    // Asi evitamos recargar la pagina cambiando el video central.
    videoList.forEach(video => {
        
        video.addEventListener("click", (event) => {
            event.preventDefault();
            
            const videoId = video.getAttribute("data-video-id");
            const title = video.querySelector(".video__link").textContent.trim();
            const author = video.querySelector(".video__author").textContent.trim();
            if (!videoId) return;

            // Cambiamos la URL del iframe
            iframe.src = `https://www.youtube.com/embed/${videoId}`;
            videoTitle.textContent = title;
            videoAuthor.textContent = author;
            //Cambiamos la clase del video para resaltar que video esta seleccionado en la lista
            videoList.forEach(v => {
                v.classList.remove("active-video")
            });
            video.classList.add("active-video");
        });
    });

})