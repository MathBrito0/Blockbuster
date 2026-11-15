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

botao.addEventListener("click", function() {
    ficha.style.display = "none";
});


document.addEventListener("DOMContentLoaded", async () => {
    const container = document.getElementById("lista-filmes");

    try {
        const resposta = await fetch("api/filmes.php");
        const resultado = await resposta.json();

        if (!resposta.ok) {
            console.error("Erro ao buscar filmes:", resultado.erro);
            return;
        }

        // Limpeza do container para montar o 3D
        container.innerHTML = "";

        resultado.dados.forEach(filme => {
            const dvdCase = document.createElement("div");
            dvdCase.classList.add("dvd-case");
            dvdCase.setAttribute("onclick", "abrirFicha(this)");
            
            dvdCase.dataset.titulo = filme.titulo || "Título indisponível";
            dvdCase.dataset.sinopse = filme.sinopse || "Sinopse não registrada";
            dvdCase.dataset.diretor = filme.diretor || "Não informado";
            dvdCase.dataset.elenco = filme.elenco || "Não informado";
            dvdCase.dataset.classificacao = filme.classificacao || "L";
            dvdCase.dataset.preco = filme.preco || "R$ 7,90 / 48h";
            dvdCase.dataset.lancamento = filme.ano || filme.lancamento|| "Não informado";

            dvdCase.innerHTML = `
                <div class="dvd-cover">
                    <img src="img/assets/${filme.capa}" alt="${filme.titulo}">
                    <div class="dvd-info">
                        <h3>${filme.titulo}</h3>
                        <p>${filme.genero || ""} (${filme.ano || ""})</p>
                    </div>
                </div>
            `;

            container.appendChild(dvdCase);
        });;
    
    } catch (erro) {
        console.error("Erro de conexão ao carregar o catálogo:", erro);

    }
});

function abrirFicha(filmeElemento) {
    ficha.style.display = "flex";
    
    titulo.textContent = filmeElemento.dataset.titulo;
    sinopse.textContent = filmeElemento.dataset.sinopse;
    
    let caminhoImg = filmeElemento.querySelector("img").src;
    imagemFicha.src = caminhoImg;
    
    if (diretorEl) diretorEl.textContent = filmeElemento.dataset.diretor;
    if (elencoEl) elencoEl.textContent = filmeElemento.dataset.elenco;
    if (precoEl) precoEl.textContent = filmeElemento.dataset.preco;
    if (lancamentoEl) lancamentoEl.textContent = filmeElemento.dataset.lancamento;
    
    if (classificacaoEl) {
        let classificacao = filmeElemento.dataset.classificacao || "L";
        classificacaoEl.textContent = classificacao;
        classificacaoEl.className = "classificacao-selo selo-" + classificacao;
    }
};