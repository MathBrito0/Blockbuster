let botao = document.getElementById("botao");
let ficha = document.getElementById("ficha");
let titulo = document.getElementById("ficha-titulo");
let sinopse = document.getElementById("ficha-sinopse");
let diretorEl = document.getElementById("ficha-diretor");
let elencoEl = document.getElementById("ficha-elenco");
let classificacaoEl = document.getElementById("ficha-classificacao");
let precoEl = document.getElementById("ficha-preco");
let lancamentoEl = document.getElementById("ficha-lancamento");
let imagemFicha = document.getElementById("ficha-img");

if (botao) {
    botao.addEventListener("click", function() {
        if (ficha) ficha.style.display = "none";
    });
}

function abrirFicha(filmeElemento) {
    if (!ficha) return;
    ficha.style.display = "flex";
    
    if (titulo) titulo.textContent = filmeElemento.dataset.titulo || "";
    if (sinopse) sinopse.textContent = filmeElemento.dataset.sinopse || "";
    
    let imgTag = filmeElemento.querySelector("img");
    if (imagemFicha && imgTag) {
        imagemFicha.src = imgTag.src;
    }
    
    if (diretorEl) diretorEl.textContent = filmeElemento.dataset.diretor || "Não informado";
    if (elencoEl) elencoEl.textContent = filmeElemento.dataset.elenco || "Não informado";
    if (precoEl) precoEl.textContent = filmeElemento.dataset.preco || "R$ 7,90 / 48h";
    if (lancamentoEl) lancamentoEl.textContent = filmeElemento.dataset.lancamento || "Não informado";
    
    if (classificacaoEl) {
        let classificacao = filmeElemento.dataset.classificacao || "L";
        classificacaoEl.textContent = classificacao;
        classificacaoEl.className = "classificacao-selo selo-" + classificacao;
    }
}