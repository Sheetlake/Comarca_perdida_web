
document.addEventListener("DOMContentLoaded", (event) => {
    let mobile_btn = document.querySelector(".navbar__mobile-btn");
    let mobile_menu = document.querySelector(".navbar__mobile-list");

    mobile_btn.addEventListener("click", () => {
        let menu_open = document.querySelector(".menu__open");
        
        if(!menu_open){
            mobile_menu.style.display = "block";
            mobile_menu.classList.add("menu__open");
        }
        else{
            mobile_menu.style.display = "none";
            mobile_menu.classList.remove("menu__open");
        }
    })

    /*Funcion para los submenus al ser varios*/
    const submenu = (boton, submenu, className) =>{
        boton.addEventListener("click", () => {
            let drop = document.querySelector(`.${className}`);

            if(!drop){
                submenu.style.display = "block";
                submenu.classList.add(className);
            }

            else{
                submenu.style.display = "none";
                submenu.classList.remove(className);
            }
        })
        
    }
        /*Seleccionamos los botones y los submenus correspondientes*/
        
        /*Primer submenu*/        
        let dropDown1_btn = document.querySelector("#icon1");
        let dropDown1_submenu = document.querySelector("#submenu1");
        
        /*Segundo submenu*/
        let dropDown2_btn = document.querySelector("#icon2");
        let dropDown2_submenu = document.querySelector("#submenu2");

        submenu(dropDown1_btn, dropDown1_submenu, "dropdown1");
        submenu(dropDown2_btn, dropDown2_submenu, "dropdown2");

        //

});