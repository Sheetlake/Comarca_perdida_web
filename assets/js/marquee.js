
document.addEventListener("DOMContentLoaded", () => {

  const track = document.querySelector(".marquee__track");
  const list = document.querySelector(".marquee_list");

  // Para evitar errores
  if (!track || !list) {
    console.error("No se encontró .marquee__container o .marquee_list");
    return;
  }

  // Clonamos la lista original y la añadimos al final del contenedor del track
  // El clon lo hacemos para evitar el espacio en blanco a la derecha de la lista original

  const clone = list.cloneNode(true);
  
  //Metemos el clon en la "cinta"
  track.appendChild(clone);

  requestAnimationFrame(() => {

    const width = list.scrollWidth; // ancho de la lista original con gap incluido y elementos no visibles

    let i = 0;
    const speed = 1; // px por frame — ajusta velocidad

    // Hacemos que la marquesina se pare si el cursor entra.
    // Asi permitimos al usuario escoger el post que quiera.

    let pause = false;
    track.addEventListener("mouseenter", () => { pause = true; });
    track.addEventListener("mouseleave", () => { pause = false; });

    const move = () => {
      if (!pause) {
        i += speed;

        // Aqui calculamos cuando se resetea la posicion
        if (i >= width){
            i -= width;
        }
        track.style.transform = `translateX(-${i}px)`;
      }
      requestAnimationFrame(move);
    };

    // arrancar la animación
    requestAnimationFrame(move);
  });
});