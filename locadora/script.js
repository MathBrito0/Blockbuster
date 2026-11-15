let botao = document.getElementById("botao");
let ficha = document.getElementById("ficha");
let titulo = document.getElementById("ficha-titulo");
let sinopse = document.getElementById("ficha-sinopse");
let diretorEl = document.getElementById("ficha-diretor");
let generoEl = document.getElementById("ficha-genero");
let anoEl = document.getElementById("ficha-ano");
let classificacaoEl = document.getElementById("ficha-classificacao");
let capaFicha = document.getElementById("ficha-capa");
let btnNovoFilme = document.getElementById("btn-novo-filme");
let fichaNovoFilme = document.getElementById("ficha-novo-filme");
let fecharNovoFilme = document.getElementById("fechar-novo-filme");
let formNovoFilme = document.getElementById("form-novo-filme");
let mensagemFilme = document.getElementById("mensagem-filme");
let prateleiraAnime = document.getElementById("prateleira-anime");
let prateleiraAcao = document.getElementById("prateleira-acao");
let prateleiraFiccao = document.getElementById("prateleira-ficcao");
let prateleiraOutros = document.getElementById("prateleira-outros");

botao.addEventListener("click", function() {
    ficha.style.display = "none";
});

btnNovoFilme.addEventListener("click", function() {
    ficha.style.display = "none";
    mensagemFilme.textContent = "";
    fichaNovoFilme.style.display = "flex";
});

fecharNovoFilme.addEventListener("click", function() {
    fichaNovoFilme.style.display = "none";
});

formNovoFilme.addEventListener("submit", async (e) => {
    e.preventDefault();
    mensagemFilme.textContent = "Cadastrando...";
    mensagemFilme.style.color = "yellow";

    const formData = new FormData(e.target);
    const corpo = new URLSearchParams(formData);

    try {
        const resposta = await fetch("api/cadastrar_filme.php", {
            method: "POST",
            headers: {"Content-Type": "application/x-www-form-urlencoded"},
            body: corpo
        });

        const dados = await resposta.json();

        if (!resposta.ok) {
            mensagemFilme.textContent = dados.erro;
            mensagemFilme.style.color = "#ff6b6b";
            return;
        }

        mensagemFilme.textContent = dados.mensagem;
        mensagemFilme.style.color = "#a8ff60";
        formNovoFilme.reset();
        carregarFilmes();

        setTimeout(() => {
            fichaNovoFilme.style.display = "none";
            mensagemFilme.textContent = "";
        }, 1500);
    } catch (erro) {
        console.error("Erro:", erro);
        mensagemFilme.textContent = "Erro de conexão com o servidor";
        mensagemFilme.style.color = "#ff6b6b";
    }
});

function abrirFicha(filme) {
    ficha.style.display = "flex";
    titulo.textContent = filme.dataset.titulo;
    sinopse.textContent = filme.dataset.sinopse;
    capaFicha.textContent = filme.dataset.titulo;
    let anoFicha = document.createElement("span");
    anoFicha.textContent = filme.dataset.ano;
    capaFicha.appendChild(anoFicha);
    diretorEl.textContent = filme.dataset.diretor;
    generoEl.textContent = filme.dataset.genero;
    anoEl.textContent = filme.dataset.ano;
    classificacaoEl.textContent = filme.dataset.classificacao;
    classificacaoEl.className = "classificacao-selo selo-" + filme.dataset.classificacao;
};

function mostrarVazio(prateleira) {
    if (prateleira.children.length == 0) {
        let vazio = document.createElement("li");
        vazio.className = "vazio";
        vazio.textContent = "Nenhum filme cadastrado";
        prateleira.appendChild(vazio);
    }
}

async function carregarFilmes() {
    try {
        const resposta = await fetch("api/filmes.php");
        const resultado = await resposta.json();

        if (!resposta.ok) {
            console.error("Erro ao buscar filmes:", resultado.erro);
            return;
        }

        prateleiraAnime.innerHTML = "";
        prateleiraAcao.innerHTML = "";
        prateleiraFiccao.innerHTML = "";
        prateleiraOutros.innerHTML = "";

        resultado.dados.forEach(filme => {
            let item = document.createElement("li");
            item.className = "movie";
            item.setAttribute("onclick", "abrirFicha(this)");
            item.dataset.titulo = filme.titulo;
            item.dataset.sinopse = filme.sinopse;
            item.dataset.diretor = filme.diretor;
            item.dataset.genero = filme.genero;
            item.dataset.ano = filme.ano;
            item.dataset.classificacao = filme.classificacao;

            let capa = document.createElement("div");
            capa.className = "capa-cinza";
            capa.textContent = filme.titulo;
            let anoCapa = document.createElement("span");
            anoCapa.textContent = filme.ano;
            capa.appendChild(anoCapa);
            item.appendChild(capa);

            let brilho = document.createElement("div");
            brilho.className = "plastic_shine";
            item.appendChild(brilho);

            if (filme.categoria == "Anime") {
                prateleiraAnime.appendChild(item);
            } else if (filme.categoria == "Ação") {
                prateleiraAcao.appendChild(item);
            } else if (filme.categoria == "Ficção Científica") {
                prateleiraFiccao.appendChild(item);
            } else {
                prateleiraOutros.appendChild(item);
            }
        });

        mostrarVazio(prateleiraAnime);
        mostrarVazio(prateleiraAcao);
        mostrarVazio(prateleiraFiccao);
        mostrarVazio(prateleiraOutros);

    } catch (erro) {
        console.error("Erro de conexão ao carregar o catálogo:", erro);
    }
}

document.addEventListener("DOMContentLoaded", carregarFilmes);
