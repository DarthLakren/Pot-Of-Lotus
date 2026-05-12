const productosAnimar = document.getElementsByClassName('item-producto');

const tituloCatalogo = document.getElementById('titulo-catalogo');

function aplicarAnimacion(evento) {
    const elemento = evento.currentTarget;

    elemento.style.transform = "translateY(-12px) rotate(1deg)";
    elemento.style.zIndex = "10"; 
    elemento.style.filter = "brightness(1.1)";

}

function quitarAnimacion(evento) {
    const elemento = evento.currentTarget;
    elemento.style.transform = "translateY(0) rotate(0deg)";
    elemento.style.filter = "none";
    elemento.style.zIndex = "1";
}


for (let i = 0; i < productosAnimar.length; i++) {
    productosAnimar[i].addEventListener('mouseover', aplicarAnimacion);
    productosAnimar[i].addEventListener('mouseout', quitarAnimacion);
}

if (tituloCatalogo) {
    tituloCatalogo.style.transition = "all 0.5s ease";

    tituloCatalogo.addEventListener('mouseover', function() {
        tituloCatalogo.classList.add('text-warning');
        tituloCatalogo.style.letterSpacing = "2px"; 
    });

    tituloCatalogo.addEventListener('mouseout', function() {
        tituloCatalogo.classList.remove('text-warning');
        tituloCatalogo.style.letterSpacing = "normal";
    });
}