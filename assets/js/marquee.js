
document.addEventListener("DOMContentLoaded", (event) =>{

    let marquee = (listMarquee, speed) => {
        
        // Seleccionamos el elemento que mandamos como argumento
        // En este caso el contenedor de la lista de elementos de la marquesina
        const list = document.querySelector(listMarquee);
        let i=0;

        //Con una funcion setInterval poniendo que este ejecutandose constantemente
        // (Intervalo 0)
        setInterval(() => {
            //Modificamos el margen izquierdo para desplazarla de derecha a izquierda
            //creando el efecto de movimiento
            list.style.marginLeft = `-${i}px`;

            //Cuando 
            if(i>list.clientWidth){
                i = 0;
            }
            i += speed;
        }, 0);
    }
    //LLamo a la funcion y paso la lista y la velocidad a la que
    //quiero que se llame.
    marquee(".marquee__container", 0.2);
});

/*
document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector(".marquee__container");
  const list = document.querySelector(".marquee_list");

  if (!container || !list) {
    console.error("No se encontró .marquee__container o .marquee_list");
    return;
  }

  // --- PREPARAR ESTRUCTURA: crear un 'track' y mover la lista dentro ---
  const track = document.createElement("div");
  track.className = "marquee__track-js";

  // estilos inline mínimos para asegurarnos el comportamiento (no tocan tu CSS existente)
  track.style.display = "flex";
  track.style.flexWrap = "nowrap";
  track.style.alignItems = "center";
  track.style.willChange = "transform";

  // Insertamos el track dentro del container y movemos la lista dentro del track
  container.appendChild(track);
  track.appendChild(list); // mueve el <ul> al track

  // Clonamos la lista y la añadimos al final del track (continuidad visual)
  const clone = list.cloneNode(true);
  track.appendChild(clone);

  // Aseguramos que las dos listas estén en fila
  list.style.display = "flex";
  list.style.flexWrap = "nowrap";
  clone.style.display = "flex";
  clone.style.flexWrap = "nowrap";

  // Forzamos un repaint para asegurarnos de que los anchos están disponibles
  // y luego calculamos el ancho de la lista original (incluye gap)
  requestAnimationFrame(() => {
    const width = list.scrollWidth; // ancho de la lista original (incl. gap)
    if (width === 0) {
      console.error("Ancho de lista = 0. Revisa que los LI sean visibles.");
      return;
    }

    let x = 0;
    const speed = 2; // px por frame — ajusta velocidad

    // opcional: pausa al hover
    let paused = false;
    container.addEventListener("mouseenter", () => { paused = true; });
    container.addEventListener("mouseleave", () => { paused = false; });

    const step = () => {
      if (!paused) {
        x += speed;
        // evitamos salto brusco usando modulo (mantiene continuidad)
        if (x >= width) x -= width;
        track.style.transform = `translateX(-${x}px)`;
      }
      requestAnimationFrame(step);
    };

    // arrancar la animación
    requestAnimationFrame(step);
  });
});*/