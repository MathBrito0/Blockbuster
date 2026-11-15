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
            <div class="user-info">
                <span>Bem-vindo ao nosso site Blockbuster</span>
                <a href="api/sair.php" class="btn-sair">Sair</a>
            </div>
        </nav>

        <div class="catalogo-container">


<!-- PRATELEIRA DOS FILMES DA CATEGORIA 'ANIME' -->

            <section class="prateleira">
                <h2 class="tag">Anime</h2>
                <ul class="list">
                    <?php foreach ($filmes as $filme): ?>
                        <?php if ($filme['categoria'] === 'Anime'): ?>
                        <li class="movie"
                            onclick="abrirFicha(this)"
                            data-titulo="<?= htmlspecialchars($filme['titulo']) ?>"
                            data-sinopse="<?= htmlspecialchars($filme['sinopse']) ?>"
                            data-diretor="<?= htmlspecialchars($filme['diretor']) ?>"
                            data-elenco="<?= htmlspecialchars($filme['elenco']) ?>"
                            data-classificacao="<?= htmlspecialchars($filme['classificacao']) ?>"
                            data-preco="<?= htmlspecialchars($filme['preco']) ?>"
                            data-lancamento="<?= htmlspecialchars($filme['ano']) ?>">

                            <img src="img/assets/<?= htmlspecialchars($filme['capa']) ?>" alt="<?= htmlspecialchars($filme['titulo']) ?>">
                            <div class="plastic_shine"></div>
                        
                        </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </section>



<!-- PRATELEIRA DOS FILMES DA CATEGORIA 'AÇÃO' -->
            <section class="prateleira">
                <h2 class="tag">Ação</h2>
                <ul class="list">
                    <?php foreach ($filmes as $filme): ?>
                        <?php if ($filme['categoria'] === 'Ação'): ?>
                        <li class="movie"
                            onclick="abrirFicha(this)"
                            data-titulo="<?= htmlspecialchars($filme['titulo']) ?>"
                            data-sinopse="<?= htmlspecialchars($filme['sinopse']) ?>"
                            data-diretor="<?= htmlspecialchars($filme['diretor']) ?>"
                            data-elenco="<?= htmlspecialchars($filme['elenco']) ?>"
                            data-classificacao="<?= htmlspecialchars($filme['classificacao']) ?>"
                            data-preco="<?= htmlspecialchars($filme['preco']) ?>"
                            data-lancamento="<?= htmlspecialchars($filme['ano']) ?>">

                            <img src="img/assets/<?= htmlspecialchars($filme['capa']) ?>" alt="<?= htmlspecialchars($filme['titulo']) ?>">
                            <div class="plastic_shine"></div>
                        
                        </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </section>





<!-- PRATELEIRA DOS FILMES DA CATEGORIA 'FICÇÃO CIENTÍFICA' -->
            <section class="prateleira">
                <h2 class="tag">Ficção Científica</h2>
                <ul class="list">
                    <?php foreach ($filmes as $filme): ?>
                        <?php if ($filme['categoria'] === 'Ficção Científica'): ?>
                        <li class="movie"
                            onclick="abrirFicha(this)"
                            data-titulo="<?= htmlspecialchars($filme['titulo']) ?>"
                            data-sinopse="<?= htmlspecialchars($filme['sinopse']) ?>"
                            data-diretor="<?= htmlspecialchars($filme['diretor']) ?>"
                            data-elenco="<?= htmlspecialchars($filme['elenco']) ?>"
                            data-classificacao="<?= htmlspecialchars($filme['classificacao']) ?>"
                            data-preco="<?= htmlspecialchars($filme['preco']) ?>"
                            data-lancamento="<?= htmlspecialchars($filme['ano']) ?>">

                            <img src="img/assets/<?= htmlspecialchars($filme['capa']) ?>" alt="<?= htmlspecialchars($filme['titulo']) ?>">
                            <div class="plastic_shine"></div>
                        
                        </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>


<!-- Preenchendo a ficha do filme com JS -->
        <div class="ficha" id="ficha" style="display: none;">
            <div class="ficha-esquerda">
                <div class="dvd-case">
                    <img id="ficha-img" src=""/>
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
                    <p><strong>ELENCO:</strong> <span id="ficha-elenco">-</span></p>
                    <p><strong>ANO:</strong> <span id="ficha-lancamento">-</span></p>
                </div>

                <div class="ficha-rodape">
                    <div class="preco-etiqueta" id="ficha_preco">R$ 7,90 / 48h</div>
                    <div class="ficha-botoes">
                        <button class="btn-alugar">Alugar</button>
                        <button id="botao" class="btn-fechar">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>