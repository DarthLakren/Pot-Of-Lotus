let buscador = document.getElementById("buscador");

buscador.addEventListener("keyup", buscar);

function buscar() {

    let texto = buscador.value.toLowerCase();

    let productos = document.getElementsByClassName("producto");

    for (let i = 0; i < productos.length; i++) {

        let producto = productos[i];

        let nombre = producto.getElementsByClassName("nombre")[0].textContent.toLowerCase();

        if (nombre.includes(texto)) {
            producto.style.display = "block";
        } else {
            producto.style.display = "none";
        }
    }
}