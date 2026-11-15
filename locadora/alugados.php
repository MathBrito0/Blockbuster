<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.html');
    
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <title>Blockbuster - Meus Filmes</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body class="pagina-alugados">
        
        <nav class="navbar">
            <a href="index.php" class="logo">Blockbuster</a>
            <div class="user-info">
                <span>Bem-vindo ao nosso site Blockbuster</span>
                <a href="index.php" class="btn-navbar">Catálogo</a>
                <a href="api/sair.php" class="btn-navbar">Sair</a>
            </div>
        </nav>
        

        <div class="catalogo-container">

            <section class="prateleira">
                <h2 class="tag">Anime</h2>
                <ul class="list" id="prateleira-anime"></ul>
            </section>

            <section class="prateleira">
                <h2 class="tag">Ação</h2>
                <ul class="list" id="prateleira-acao"></ul>
            </section>

            <section class="prateleira">
                <h2 class="tag">Ficção Científica</h2>
                <ul class="list" id="prateleira-ficcao"></ul>
            </section>

            <section class="prateleira">
                <h2 class="tag">Outros</h2>
                <ul class="list" id="prateleira-outros"></ul>
            </section>

        </div>

        <div class="ficha" id="ficha">
            <div class="ficha-esquerda">
                <div class="dvd-case">
                    <div id="ficha-capa" class="capa-cinza"></div>
                    <div class="plastic_shine"></div>
                </div>
            </div>

            <div class="ficha-direita">
                <div class="ficha-cabecalho">
                    <h2 id="ficha-titulo">Título</h2>
                    <span id="ficha-classificacao" class="classificacao-selo">12</span>
                </div>

                <p id="ficha-sinopse" class="ficha-sinopse-texto">Sinopse</p>

                <div class="ficha-rodape">
                    <p><strong>DIRETOR:</strong> <span id="ficha-diretor">-</span></p>
                    <p><strong>GÊNERO:</strong> <span id="ficha-genero">-</span></p>
                    <p><strong>ANO:</strong> <span id="ficha-ano">-</span></p>
                </div>

                <div class="ficha-rodape">
                    <div class="preco-etiqueta">R$ 7,90 / 48h</div>
                    <div class="ficha-botoes">
                        <button id="btn-alugar" class="btn-alugar">Alugar</button>
                        <button id="btn-devolver" class="btn-fechar">Devolver</button>
                        <button id="botao" class="btn-fechar">Fechar</button>
                    </div>
                </div>

                <p class="mensagem" id="mensagem-aluguel"></p>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>