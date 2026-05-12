const btnSingle = document.getElementById('cat-single');
const btnSobre = document.getElementById('cat-sobre');
const btnBundle = document.getElementById('cat-sellado');

const productos = document.getElementsByClassName('item-producto');

function filtrarPorCategoria(categoria) {
    for (let i = 0; i < productos.length; i++) {
        productos[i].classList.add('d-none');
    }

    for (let i = 0; i < productos.length; i++) {
        let producto = productos[i];
 
        if (categoria === 'todos' || producto.classList.contains(categoria)) {
            producto.classList.remove('d-none');
        }
    }
}


btnSingle.addEventListener('click', function() {
    const cat = btnSingle.getAttribute('data-categoria');
    filtrarPorCategoria(cat);
});

btnSobre.addEventListener('click', function() {
    const cat = btnSobre.getAttribute('data-categoria');
    filtrarPorCategoria(cat);
});

btnBundle.addEventListener('click', function() {
    const cat = btnBundle.getAttribute('data-categoria');
    filtrarPorCategoria(cat);
});