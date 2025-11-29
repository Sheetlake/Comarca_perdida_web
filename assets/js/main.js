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

})