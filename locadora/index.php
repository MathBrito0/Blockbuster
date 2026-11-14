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
        <title>Blockbuster</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        
        <nav class="navbar">
            <a href="index.html" class="logo">Blockbuster</a>
            <div class="user-info">
                <span>Bem-vindo ao nosso site Blockbuster</span>
                <a href="api/sair.php" class="btn-sair">Sair</a>
            </div>
        </nav>
        

        <div class="catalogo-container">
            
            <section class="prateleira">
                <h2 class="tag">Anime</h2>
                <ul class="list">
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Akira" 
                        data-sinopse="Um projeto militar secreto coloca Neo-Tóquio em perigo ao transformar um adolescente membro de uma gangue de motoqueiros em um psicopata psíquico furioso que só pode ser detido por seu melhor amigo." 
                        data-diretor="Katsuhiro Otomo" 
                        data-elenco="Mitsuo Iwata, Nozomu Sasaki" 
                        data-classificacao="16"
                        data-preco="R$ 8,90 / 48h">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ8H_MgwChXa_jCj_xHCZRfYcbroj0XDZWL57AoRjdAA&s=10" alt="Akira">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Ghost in The Shell" data-sinopse="Uma policial ciborgue e seu parceiro caçam um hacker misterioso e poderoso.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJLXDIdCI_Z63sLIPZIqJPlDaYI9eFv_BsAwSyEHECnv0dIF92JzAdu9s&s=10" alt="Ghost in the Shell">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Your Name" data-sinopse="Dois estranhos estão ligados de uma maneira bizarra, mais quando uma conexão é formada, a distância será a única coisa que os manterá separados?">
                        <img src="https://br.web.img3.acsta.net/pictures/17/10/04/19/01/4966397.jpg" alt="Your Name">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="A Voz do Silêncio" data-sinopse="Um jovem é excluído por seus colegas depois de intimidar uma menina surda ao ponto de mudar de escola. Anos depois, ele parte para o caminho da redenção.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo-fe9nLCzNtMKj8tZuJgHuoP8gMwEadRErHbxUbaZjaJIEZGDQutISBDC&s=10" alt="A Voz do Silêncio">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="The First Slam Dunk" data-sinopse="Seguindo os passos de seu irmão mais velho, que foi um famoso jogador de basquete local, Ryota Miyagi joga no Campeonato Nacional Interescolar com o time da Shohoku High School, que fica prestes a desafiar os atuais campeões.">
                        <img src="https://br.web.img3.acsta.net/pictures/23/08/03/16/24/3906277.jpg" alt="The First Slam Dunk">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Perfect Blue" data-sinopse="A vida duma cantora aposentada é sacudida quando ela é perseguida por um fã obcecado.">
                        <img src="https://m.media-amazon.com/images/M/MV5BYjkyZjY1OWItNjYyNC00ZjlhLTgwOTAtMGNiYTFmYTNmZDI3XkEyXkFqcGc@._V1_.jpg" alt="Perfect Blue">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Paprika" data-sinopse="Uma máquina que permite que terapaeutas entrem nos sonhos de seus pacientes é roubada. Uma terapeuta e sua equipe correm contra o tempo para identificar o ladrão e impedir que ele use a máquina para invadir a mente das pessoas.">
                        <img src="https://m.media-amazon.com/images/M/MV5BZGJkYjkyMDUtM2U3ZC00NDM3LWI0MzItZjU5MmYwYjg2YmIwXkEyXkFqcGc@._V1_.jpg" alt="Paprika">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Dragon Ball Super: Broly" data-sinopse="Goku e Vegeta encontram Broly, um guerreiro Saiyajin diferente de qualquer lutador que eles já enfrentaram antes.">
                        <img src="https://m.media-amazon.com/images/I/71unLCt2UOL._AC_UF1000,1000_QL80_.jpg" alt="Dragon Ball Super: Broly">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="One Piece: Film Red" data-sinopse="Uta, a cantora mais amada do planeta, é conhecida por esconder sua própria identidade ao se apresentar. Agora, pela primeira vez, ela se revelará ao mundo. Todos os fãs de Uta, incluindo os Chapéus de Palha liderados por Luffy, aguardam.">
                        <img src="https://m.media-amazon.com/images/I/918XK4NjVRL._AC_UF1000,1000_QL80_.jpg" alt="One Piece: Film Red">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="5 Centimeters Per Second" data-sinopse="Segue um jovem chamado Takaki através de sua vida enquanto invernos rigorosos, tecnologia fria e finalmente as obrigações e responsabilidades dos adultos convergem para testar as delicadas pétalas do amor.">
                        <img src="https://upload.wikimedia.org/wikipedia/pt/0/0b/By%C5%8Dsoku_Go_Senchim%C4%93toru.png?utm_source=pt.wikipedia.org&utm_campaign=index&utm_content=original" alt="5 Centimeters Per Second">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Look Back" data-sinopse="A excessivamente confiante Fujino e a reclusa Kyomoto não poderiam ser mais diferentes, mas o amor por desenhar mangás une as duas garotas de uma cidade pequena.">
                        <img src="https://m.media-amazon.com/images/M/MV5BODdjMDUyYmEtMDU3NC00MDhhLThiYjAtOTgxNzI4M2Q2NTdiXkEyXkFqcGc@._V1_QL75_UX380_CR0,12,380,562_.jpg" alt="Look Back">
                        <div class="plastic_shine"></div>
                    </li>
                </ul>
            </section>

            <section class="prateleira">
                <h2 class="tag">Ação</h2>
                <ul class="list">
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="A Odisseia" data-sinopse="Após a Guerra de Troia, o herói grego Odisseu retorna a Ítaca, na Grécia, enfrentando figuras da mitologia grega como o Ciclope Polifemo, as Sereias e Calipso.">
                        <img src="https://m.media-amazon.com/images/M/MV5BNTcyNmJlZmQtNDUwYy00NDBjLTg1NGQtYTY2Y2UxMWM3NmI1XkEyXkFqcGc@._V1_QL75_UX380_CR0,0,380,562_.jpg" alt="A Odisseia">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Jogos Vorazes" data-sinopse="Katness Everden voluntariamente se ofreçe no lugar da sua irmã nos Jogos Vorazes, uma competição once jovens de cada um dos distritos de Panem são escolhidos aleatoriamente para brigar.">
                        <img src="https://m.media-amazon.com/images/M/MV5BY2QxODRlN2EtZjA5Zi00ODUxLTg4YTgtYWEyZTMyYWNlMzg0XkEyXkFqcGc@._V1_QL75_UY562_CR2,0,380,562_.jpg" alt="Jogos Vorazes">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="John Wick" data-sinopse="John Wick é um ex-assassino de aluguel em luto por perder seu grande amor. Quando invadem sua casa, o roubam e matam seu cachorro, ele é forçado a voltar à ativa para se vingar.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7FjYP8yzUXNOFjc2oFgj83TK7EvR6x9osKl6F--e7uw&s=10" alt="John Wick">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Blade Runner" data-sinopse="Um blade runner deve perseguir e eliminar quatro replicantes que roubaram uma nave no espaço e retornaram à Terra para encontrar seu criador.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsP2j2bVP3UPZeXsU8G5Yd2lo0YCg_GVBrzoA7i4GUwg&s=10" alt="Blade Runner">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Pulp Fiction" data-sinopse="As vidas de dois assassinos da máfia, um boxeador, um gângster e sua esposa, e um par de bandidos se entrelaçam em quatro histórias de violência e redenção.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuH1AePojNVVfa-CtYe4MDGho5jTZkss8fNvXLYZPBzA&s=10" alt="Pulp Fiction">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Kill Bill: Volume 1" data-sinopse="Depois de despertar de um coma de quatro anos, uma antiga assassina busca vingança contra o grupo de assassinos que a traiu.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk3CGAtRF0kEBWzP2ss2uMHyBI8fV0M0W_H-UEe_VaMA&s=10" alt="Kill Bill: Volume 1">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Sin City: A Cidade do Pecado" data-sinopse="Uma exploração da sombria e miserável Basin City e três de seus moradores, todos envolvidos em violenta corrupção.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzomSyIXV6z8IeQor9gE0lSnrV8E0rNRkKLO_qrUKPeA&s=10" alt="Sin City: A Cidade do Pecado">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Tropa de Elite" data-sinopse="Em 1997, o capitão Nascimento tem que encontrar seu substituto enquanto luta contra os narcotraficantes e criminosos antes da chegada do Papa ao Rio de Janeiro, Brasil.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAcWy7IdPv2fcBn4CGe7DW3m7WQXdwT8eKZXifbSXVyw&s=10" alt="Tropa de Elite">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Oldboy" data-sinopse="Depois de ter sido raptado e preso por quinze anos, Oh Dae-Su é libertado, e descobre que tem 5 dias para encontrar seu sequestrador.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyS933N6jG2on7XtNiMeOYVYCrAJts_buEDzZNsWog2Q&s=10" alt="Oldboy">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Batman Returns" data-sinopse="O Pinguim elabora um plano para ganhar a confiança dos cidadãos de Gotham e, assim, assumir o controle. Somente Batman descobre as verdadeiras intenções do criminoso, mas sua visão é bloqueada pela sedutora e letal Mulher Gato.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfh4LFrGBZAuzylJyX3N1I_pNcZE546jLK-JdNqHRcZw&s=10" alt="Batman Returns">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Battle Royale" data-sinopse="No futuro, o governo japonês captura uma classe de alunos do nono ano e os força a matarem uns aos outros sob o revolucionário Ato da Batalha Real.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcdgoEhG66A5FAzMSlqYCfe2aVQLif1wmfSLvBDoDfVA&s=10" alt="Battle Royale">
                        <div class="plastic_shine"></div>
                    </li>
                </ul>
            </section>

            <section class="prateleira">
                <h2 class="tag">Ficção Científica</h2>
                <ul class="list">
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="O Enigma de Outro Mundo" data-sinopse="Uma equipe de pesquisa na Antártica é caçada por um alienígena que muda de forma e assume a aparência de suas vítimas.">
                        <img src="https://m.media-amazon.com/images/M/MV5BMDY5NTQ3MDgtNTg5YS00Y2JmLTkwMjYtYzVhZDc4MmUwMzY3XkEyXkFqcGc@._V1_QL75_UY562_CR29,0,380,562_.jpg" alt="O Enigma de Outro Mundo">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Matrix" data-sinopse="Um hacker aprende com os misteriosos rebeldes sobre a verdadeira natureza de sua realidade e seu papel na guerra contra seus controladores.">
                        <img src="https://m.media-amazon.com/images/M/MV5BNThiYTQzOTUtNmFjYy00OWEwLTg2NWUtMmM3NGE0YjFjOWRjXkEyXkFqcGc@._V1_QL75_UX380_CR0,4,380,562_.jpg" alt="Matrix">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Bugonia" data-sinopse="Um jovem captura e interroga um empresário que ele acredita ser um invasor alienígena. O capturador, sua namorada, o empresário e um detetive particular se envolvem em uma tensa batalha psicológica.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKAWB5EjMh1N5Rd-4oLnXIHi02v9IsUZpkdLUVkmPDqA&s=10" alt="Bugonia">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Resident Evil: O Hóspede Maldito" data-sinopse="Uma unidade militar especial luta contra um supercomputador poderoso e fora de controle, e centenas de cientistas que se transformaram em criaturas carnívoras após um acidente no laboratório.">
                        <img src="https://m.media-amazon.com/images/M/MV5BNjQ2ODM3MTYtOTNkOS00YmUwLThlMGItNmNmZjhlZDg3MzhmXkEyXkFqcGc@._V1_QL75_UX380_CR0,4,380,562_.jpg" alt="Resident Evil: O Hóspede Maldito">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Acompanhante Perfeita" data-sinopse="Um fim de semana entre amigos em uma cabana remota se transforma em caos após a revelação de que um dos hóspedes não é o que parece.">
                        <img src="https://m.media-amazon.com/images/M/MV5BODgwNDZkZjctYWU5Zi00MzdhLWJlMDctYTI3ZTQxMzRhZDUwXkEyXkFqcGc@._V1_QL75_UX380_CR0,0,380,562_.jpg" alt="Acompanhante Perfeita">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Donnie Darko" data-sinopse="Um adolescente é atormentado com visões dum homem num terno de coelho quem o manipula a fazer crimes.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3cdIqjHd8U7nGqH7WteO_iWba1QnVNI27RWztHx2xfA&s=10" alt="Donnie Darko">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="O Exterminador do Futuro 2: O Julgamento Final" data-sinopse="Um ciborgue, idêntico ao que falhou em matar Sarah Connor, agora deve proteger o filho de dez anos dela, John, de um ciborgue ainda mais avançado e poderoso.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg89b6SqqTWNRVwUxLuka44DZp9yQOkdrMjt8BW6cs2w&s=10" alt="O Exterminador do Futuro 2: O Julgamento Final">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Homem-Aranha" data-sinopse="Após ser picado por uma aranha geneticamente modificada, o tímido adolescente Peter Parker ganha poderes incríveis e se torna o super-herói Homem-Aranha, devendo enfrentar um vingativo inimigo conhecido como Duende Verde">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh3dgi97RteEUA-6RtKl1787H1ervD_cEUJyW4yHYVKA&s=10" alt="Homem-Aranha (Sam Raimi)">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Avatar" data-sinopse="Um militar paraplégico despachado para a lua Pandora em uma missão única fica dividido entre seguir suas ordens e proteger o mundo que ele sente ser sua casa.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-FhonmGA35-Qx8CNrC4Q9ALHD4ov0NpHuvhtTJ1DX5g&s=10" alt="Avatar">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Twilight Zone" data-sinopse="Quatro segmentos de terror e ficção científica, dirigidos por quatro diretores famosos, cada um deles sendo uma nova versão de uma história clássica da série de televisão histórica de Rod Serling.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6oasPaNN9qNjGEClqvep0xwa2cBZwbmsBwfNwck_GVw&s=10" alt="Twilight Zone">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" onclick="abrirFicha(this)" data-titulo="Devoradores de Estrelas" data-sinopse="Um astronauta tenta salvar a Terra enquanto está sozinho no espaço sideral.">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS34CltVd8Gr21BGM5yXb3BGaPe566GvqeEDE-tR7qzQQ&s=10" alt="Project Hail Mary">
                        <div class="plastic_shine"></div>
                    </li>
                </ul>
            </section>

        </div>

        <div class="ficha" id="ficha">
            <div class="ficha-esquerda">
                <div class="dvd-case">
                    <img id="ficha-img" src""/>
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
                    <p><strong>ELENCO:</strong> <span id="ficha-elenco">-</span></p>
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

        <div id="lista-filmes"></div>
        <script src="script.js"></script>
    </body>
</html>