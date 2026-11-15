<?php
session_start();
require_once 'api/backend.php';     //Conecta com o banco

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.html');

    exit;
}




//Buscando os filmes no banco
try {
    $stmt = $pdo->query("SELECT * FROM filmes");
    $filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    $filmes = [];
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8"/>
        <title>Blockbuster</title>
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>

        <nav class="navbar">
            <a href="index.php" class="logo">Blockbuster</a>
            <button id="btn-novo-filme" class="btn-navbar">Cadastrar Novo Filme</button>
            <div class="user-info">
                <span>Bem-vindo ao nosso site Blockbuster</span>
                <a href="alugados.php" class="btn-navbar">Meus Filmes</a>
                <a href="api/sair.php" class="btn-navbar">Sair</a>
            </div>
        </nav>

        <div class="catalogo-container">

            <section class="prateleira">
                <h2 class="tag">Anime</h2>
                <ul class="list" id="prateleira-anime"></ul>
            </section>



<!-- PRATELEIRA DOS FILMES DA CATEGORIA 'AÇÃO' -->
            <section class="prateleira">
                <h2 class="tag">Ação</h2>
                <ul class="list" id="prateleira-acao"></ul>
            </section>





<!-- PRATELEIRA DOS FILMES DA CATEGORIA 'FICÇÃO CIENTÍFICA' -->
            <section class="prateleira">
                <h2 class="tag">Ficção Científica</h2>
                <ul class="list" id="prateleira-ficcao"></ul>
            </section>

            <section class="prateleira">
                <h2 class="tag">Outros</h2>
                <ul class="list" id="prateleira-outros"></ul>
            </section>
        </div>


<!-- Preenchendo a ficha do filme com JS -->
        <div class="ficha" id="ficha" style="display: none;">
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
                
                <div class="ficha-detalhes">
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

        <div class="ficha ficha-form" id="ficha-novo-filme">
            <div class="ficha-direita">
                <div class="ficha-cabecalho">
                    <h2>Cadastrar Novo Filme</h2>
                    <button type="button" id="fechar-novo-filme" class="btn-fechar">Fechar</button>
                </div>

                <form id="form-novo-filme">
                    <div class="campo">
                        <label for="titulo">Título</label>
                        <input type="text" id="titulo" name="titulo" required>
                    </div>

                    <div class="campo">
                        <label for="diretor">Diretor</label>
                        <input type="text" id="diretor" name="diretor" required>
                    </div>

                    <div class="campo">
                        <label for="genero">Gênero</label>
                        <input type="text" id="genero" name="genero" required>
                    </div>

                    <div class="campo">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" name="categoria" required>
                            <option value="" disabled selected>Selecione uma categoria</option>
                            <option value="Anime">Anime</option>
                            <option value="Ação">Ação</option>
                            <option value="Ficção Científica">Ficção Científica</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="ano">Ano</label>
                        <input type="number" id="ano" name="ano" min="1888" max="2100" required>
                    </div>

                    <div class="campo">
                        <label for="classificacao">Classificação</label>
                        <select id="classificacao" name="classificacao" required>
                            <option value="" disabled selected>Selecione a classificação</option>
                            <option value="L">L</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                            <option value="14">14</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="sinopse">Sinopse</label>
                        <textarea id="sinopse" name="sinopse" rows="4" required></textarea>
                    </div>

                    <button type="submit">Cadastrar</button>
                </form>

                <p class="mensagem" id="mensagem-filme"></p>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>