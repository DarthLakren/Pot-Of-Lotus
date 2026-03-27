let lastScroll = 0;

window.addEventListener("scroll", () => {
  let currentScroll = window.pageYOffset;

  if (currentScroll > lastScroll) {
    // Bajando → oculta barra
    document.body.classList.add("hide-bar");
  } else {
    // Subiendo → muestra barra
    document.body.classList.remove("hide-bar");
  }

  lastScroll = currentScroll;
});

document.addEventListener("DOMContentLoaded", () => {

    const carrusel = document.getElementById("carrusel");
    const btnNext = document.querySelector(".btn-next");
    const btnPrev = document.querySelector(".btn-prev");

    btnNext.addEventListener("click", () => {
        carrusel.scrollBy({
            left: 250,
            behavior: 'smooth'
        });
    });

    btnPrev.addEventListener("click", () => {
        carrusel.scrollBy({
            left: -250,
            behavior: 'smooth'
        });
    });

});