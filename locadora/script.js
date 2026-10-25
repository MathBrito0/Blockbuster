let botao = document.getElementById("botao");
let ficha = document.getElementById("ficha");
let titulo = document.getElementById("ficha-titulo");
let sinopse = document.getElementById("ficha-sinopse");

botao.addEventListener("click", function() {
    ficha.style.display = "none";
});

function abrirFicha(filme) {
    ficha.style.display = "block";
    titulo.textContent = filme.dataset.titulo;
    sinopse.textContent = filme.dataset.sinopse;
};