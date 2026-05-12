const cartasProductos = document.getElementsByClassName('item-producto');

function resaltarProducto(evento) {
    const div = evento.currentTarget;

    div.style.transform = "scale(1.09)";
    div.style.transition = "transform 0.3s ease"; 
    div.style.zIndex = "10";


    div.classList.remove('border-secondary'); 
    
    div.classList.add('shadow-lg', 'rounded','border','border-danger','border-5' );
}

function restaurarProducto(evento) {
    const div = evento.currentTarget;


    div.style.transform = "scale(1)";
    div.style.zIndex = "1";


    div.classList.remove('shadow-lg', 'rounded');
}

for (let i = 0; i < cartasProductos.length; i++) {
    cartasProductos[i].addEventListener('mouseover', resaltarProducto);
    cartasProductos[i].addEventListener('mouseout', restaurarProducto);
}
