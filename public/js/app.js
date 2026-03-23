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