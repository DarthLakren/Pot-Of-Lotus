const p1 = document.getElementById("pregunta1");
const r1 = document.getElementById("respuesta1");

const p2 = document.getElementById("pregunta2");
const r2 = document.getElementById("respuesta2");

const p3 = document.getElementById("pregunta3");
const r3 = document.getElementById("respuesta3");

function toggle(respuesta) {
    respuesta.classList.toggle("d-none");
}

p1.addEventListener("click", function() {
    toggle(r1);
});

p2.addEventListener("click", function() {
    toggle(r2);
});

p3.addEventListener("click", function() {
    toggle(r3);
});