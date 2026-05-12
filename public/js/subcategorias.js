const sNuevo = document.getElementById('s-nuevo');
const sModerado = document.getElementById('s-moderado');
const sDanado = document.getElementById('s-danado');
const sbPlay = document.getElementById('sb-play');
const sbBooster = document.getElementById('sb-booster');
const sbCollector = document.getElementById('sb-collector');
const slPresentacion = document.getElementById('sl-presentacion');
const slBundle = document.getElementById('sl-bundle');
const slPrecon = document.getElementById('sl-precon');

const btnLimpiarTodo = document.getElementById('cat-todo');

const productosSub = document.getElementsByClassName('item-producto');

const listaChecks = [
    sNuevo, sModerado, sDanado, 
    sbPlay, sbBooster, sbCollector, 
    slPresentacion, slBundle, slPrecon
];

function filtrarSubcategorias() {
  
    for (let i = 0; i < productosSub.length; i++) {
        productosSub[i].classList.add('d-none');
    }


    let seleccionadas = [];
    for (let i = 0; i < listaChecks.length; i++) {
        if (listaChecks[i] && listaChecks[i].checked) {
            seleccionadas.push(listaChecks[i].value);
        }
    }

    if (seleccionadas.length === 0) {
        for (let i = 0; i < productosSub.length; i++) {
            productosSub[i].classList.remove('d-none');
        }
        return;
    }

    for (let i = 0; i < productosSub.length; i++) {
        let producto = productosSub[i];
        for (let j = 0; j < seleccionadas.length; j++) {
            if (producto.classList.contains(seleccionadas[j])) {
                producto.classList.remove('d-none');
                break; 
            }
        }
    }
}

for (let i = 0; i < listaChecks.length; i++) {
    if (listaChecks[i]) {
        listaChecks[i].addEventListener('change', filtrarSubcategorias);
    }
}


if (btnLimpiarTodo) {
    btnLimpiarTodo.addEventListener('click', function() {
        for (let i = 0; i < listaChecks.length; i++) {
            if (listaChecks[i]) {
                listaChecks[i].checked = false;
            }
        }
        filtrarSubcategorias();
        

        if (typeof filtrarPorCategoria === 'function') {
            filtrarPorCategoria('todos');
        }
    });
}


window.limpiarGrupo = function(nombreGrupo) {
    for (let i = 0; i < listaChecks.length; i++) {
        if (listaChecks[i] && listaChecks[i].getAttribute('data-grupo') === nombreGrupo) {
            listaChecks[i].checked = false;
        }
    }
    filtrarSubcategorias();
};