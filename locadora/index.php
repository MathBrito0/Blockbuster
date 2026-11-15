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
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="1988">
                        <img src="img/assets/akira.jpg" alt="Akira">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Ghost in The Shell" 
                        data-sinopse="Uma policial ciborgue e seu parceiro caçam um hacker misterioso e poderoso." 
                        data-diretor="Mamoru Oshii" 
                        data-elenco="Atsuko Tanaka, Akio Ōtsuka" 
                        data-classificacao="14"
                        data-preco="R$ 7,90 / 48h"
                        data-lancamento="1995">
                        <img src="img/assets/ghost.jpg" alt="Ghost in the Shell">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Your Name" 
                        data-sinopse="Dois estranhos estão ligados de uma maneira bizarra, mais quando uma conexão é formada, a distância será a única coisa que os manterá separados?"
                        data-diretor="Makoto Shinkai" 
                        data-elenco="Ryunosuke Kamiki, Mone Kamishiraishi" 
                        data-classificacao="L"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2016">
                        <img src="img/assets/yourname.jpg" alt="Your Name">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie"
                        onclick="abrirFicha(this)"
                        data-titulo="A Voz do Silêncio"
                        data-sinopse="Um jovem é excluído por seus colegas depois de intimidar uma menina surda ao ponto de mudar de escola. Anos depois, ele parte para o caminho da redenção."
                        data-diretor="Naoko Yamada" 
                        data-elenco="Miyu Irino, Saori Hayami" 
                        data-classificacao="12"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2016">
                        <img src="img/assets/avozdosilencio.jpg" alt="A Voz do Silêncio">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie"
                        onclick="abrirFicha(this)" 
                        data-titulo="The First Slam Dunk" 
                        data-sinopse="Seguindo os passos de seu irmão mais velho, que foi um famoso jogador de basquete local, Ryota Miyagi joga no Campeonato Nacional Interescolar com o time da Shohoku High School, que fica prestes a desafiar os atuais campeões."
                        data-diretor="Takehiko Inoue" 
                        data-elenco="Shugo Nakamura, Jun Kasama" 
                        data-classificacao="12"
                        data-preco="R$ 9,90 / 48h"
                        data-lancamento="2022">
                        <img src="img/assets/slamdunk.jpg" alt="The First Slam Dunk">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie"
                        onclick="abrirFicha(this)"
                        data-titulo="Perfect Blue" 
                        data-sinopse="A vida de uma cantora aposentada é sacudida quando ela é perseguida por um fã obcecado."
                        data-diretor="Satoshi Kon" 
                        data-elenco="Junko Iwao, Rica Matsumoto" 
                        data-classificacao="18"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="1997">
                        <img src="img/assets/perfectblue.jpg" alt="Perfect Blue">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie"
                        onclick="abrirFicha(this)"
                        data-titulo="Paprika" 
                        data-sinopse="Uma máquina que permite que terapaeutas entrem nos sonhos de seus pacientes é roubada. Uma terapeuta e sua equipe correm contra o tempo para identificar o ladrão e impedir que ele use a máquina para invadir a mente das pessoas."
                        data-diretor="Satoshi Kon" 
                        data-elenco="Megumi Hayashibara, Toru Emori" 
                        data-classificacao="16"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2006">
                        <img src="img/assets/paprika.jpg" alt="Paprika">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie"
                        onclick="abrirFicha(this)"
                        data-titulo="Dragon Ball Super: Broly" 
                        data-sinopse="Goku e Vegeta encontram Broly, um guerreiro Saiyajin diferente de qualquer lutador que eles já enfrentaram antes."
                        data-diretor="Tatsuya Nagamine" 
                        data-elenco="Masako Nozawa, Ryō Horikawa" 
                        data-classificacao="10"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2018">
                        <img src="img/assets/dragonball.jpg" alt="Dragon Ball Super: Broly">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="One Piece: Film Red" 
                        data-sinopse="Uta, a cantora mais amada do planeta, é conhecida por esconder sua própria identidade ao se apresentar. Agora, pela primeira vez, ela se revelará ao mundo. Todos os fãs de Uta, incluindo os Chapéus de Palha liderados por Luffy, aguardam."
                        data-diretor="Goro Taniguchi" 
                        data-elenco="Mayumi Tanaka, Kaori Nazuka" 
                        data-classificacao="12"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2022">
                        <img src="img/assets/onepiece.jpg" alt="One Piece: Film Red">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie"
                        onclick="abrirFicha(this)"
                        data-titulo="5 Centimeters Per Second" 
                        data-sinopse="Segue um jovem chamado Takaki através de sua vida enquanto invernos rigorosos, tecnologia fria e finalmente as obrigações e responsabilidades dos adultos convergem para testar as delicadas pétalas do amor."
                        data-diretor="Makoto Shinkai" 
                        data-elenco="Kenji Mizuhashi, Satomi Hanamura" 
                        data-classificacao="12"
                        data-preco="R$ 6,90 / 48h"
                        data-lancamento="2007">
                        <img src="img/assets/segundo.jpg" alt="5 Centimeters Per Second">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie"
                        onclick="abrirFicha(this)"
                        data-titulo="Look Back" 
                        data-sinopse="A excessivamente confiante Fujino e a reclusa Kyomoto não poderiam ser mais diferentes, mas o amor por desenhar mangás une as duas garotas de uma cidade pequena."
                        data-diretor="Kiyotaka Oshiyama" 
                        data-elenco="Kumi Kawai, Mizuki Yoshida" 
                        data-classificacao="12"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2024">
                        <img src="img/assets/lookback.jpg" alt="Look Back">
                        <div class="plastic_shine"></div>
                    </li>
                </ul>
            </section>

            <section class="prateleira">
                <h2 class="tag">Ação</h2>
                <ul class="list">
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="A Odisseia" 
                        data-sinopse="Após a Guerra de Troia, o herói grego Odisseu retorna a Ítaca, na Grécia, enfrentando figuras da mitologia grega como o Ciclope Polifemo, as Sereias e Calipso."
                        data-diretor="Andrei Konchalovsky"
                        data-elenco="Armand Assante, Greta Scacchi"
                        data-classificacao="14"
                        data-preco="R$ 7,90 / 48h"
                        data-lancamento="1997">
                        <img src="img/assets/odisseia.jpg" alt="A Odisseia">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Jogos Vorazes" 
                        data-sinopse="Katness Everden voluntariamente se ofreçe no lugar da sua irmã nos Jogos Vorazes, uma competição once jovens de cada um dos distritos de Panem são escolhidos aleatoriamente para brigar."
                        data-diretor="Gary Ross"
                        data-elenco="Jennifer Lawrence, Josh Hutcherson"
                        data-classificacao="14"
                        data-preco="R$ 7,90 / 48h"
                        data-lancamento="2012">
                        <img src="img/assets/jogosvorazes.jpg" alt="Jogos Vorazes">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="John Wick" 
                        data-sinopse="John Wick é um ex-assassino de aluguel em luto por perder seu grande amor. Quando invadem sua casa, o roubam e matam seu cachorro, ele é forçado a voltar à ativa para se vingar."
                        data-diretor="Chad Stahelski"
                        data-elenco="Keanu Reeves, Michael Nyqvist"
                        data-classificacao="16"
                        data-preco="R$ 9,90 / 48h"
                        data-lancamento="2014">
                        <img src="img/assets/johnwick.jpg" alt="John Wick">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Blade Runner" 
                        data-sinopse="Um blade runner deve perseguir e eliminar quatro replicantes que roubaram uma nave no espaço e retornaram à Terra para encontrar seu criador."
                        data-diretor="Ridley Scott"
                        data-elenco="Harrison Ford, Rutger Hauer"
                        data-classificacao="14"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="1982">
                        <img src="img/assets/bladerunner.jpg" alt="Blade Runner">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Pulp Fiction" 
                        data-sinopse="As vidas de dois assassinos da máfia, um boxeador, um gângster e sua esposa, e um par de bandidos se entrelaçam em quatro histórias de violência e redenção."
                        data-diretor="Quentin Tarantino"
                        data-elenco="John Travolta, Uma Thurman, Samuel L. Jackson"
                        data-classificacao="18"
                        data-preco="R$ 9,90 / 48h"
                        data-lancamento="1994">
                        <img src="img/assets/pulpfiction.jpg" alt="Pulp Fiction">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Kill Bill: Volume 1" 
                        data-sinopse="Depois de despertar de um coma de quatro anos, uma antiga assassina busca vingança contra o grupo de assassinos que a traiu."
                        data-diretor="Quentin Tarantino"
                        data-elenco="Uma Thurman, Lucy Liu, Vivica A. Fox"
                        data-classificacao="18"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2003">
                        <img src="img/assets/killbill.jpg" alt="Kill Bill: Volume 1">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Sin City: A Cidade do Pecado" 
                        data-sinopse="Uma exploração da sombria e miserável Basin City e três de seus moradores, todos envolvidos em violenta corrupção."
                        data-diretor="Frank Miller, Robert Rodriguez"
                        data-elenco="Mickey Rourke, Clive Owen, Bruce Willis"
                        data-classificacao="18"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2005">
                        <img src="img/assets/sincity.jpg" alt="Sin City: A Cidade do Pecado">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Tropa de Elite" 
                        data-sinopse="Em 1997, o capitão Nascimento tem que encontrar seu substituto enquanto luta contra os narcotraficantes e criminosos antes da chegada do Papa ao Rio de Janeiro, Brasil."
                        data-diretor="José Padilha"
                        data-elenco="Wagner Moura, Caio Junqueira"
                        data-classificacao="16"
                        data-preco="R$ 7,90 / 48h"
                        data-lancamento="2007">
                        <img src="img/assets/tropadeelite.jpg" alt="Tropa de Elite">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Oldboy" 
                        data-sinopse="Depois de ter sido raptado e preso por quinze anos, Oh Dae-Su é libertado, e descobre que tem 5 dias para encontrar seu sequestrador."
                        data-diretor="Park Chan-wook"
                        data-elenco="Choi Min-sik, Yoo Ji-tae"
                        data-classificacao="18"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2003">
                        <img src="img/assets/oldboy.jpg" alt="Oldboy">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Batman Returns" 
                        data-sinopse="O Pinguim elabora um plano para ganhar a confiança dos cidadãos de Gotham e, assim, assumir o controle. Somente Batman descobre as verdadeiras intenções do criminoso, mas sua visão é bloqueada pela sedutora e letal Mulher Gato."
                        data-diretor="Tim Burton"
                        data-elenco="Michael Keaton, Danny DeVito, Michelle Pfeiffer"
                        data-classificacao="12"
                        data-preco="R$ 7,90 / 48h"
                        data-lancamento="1992">
                        <img src="img/assets/batmanreturns.jpg" alt="Batman Returns">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Battle Royale" 
                        data-sinopse="No futuro, o governo japonês captura uma classe de alunos do nono ano e os força a matarem uns aos outros sob o revolucionário Ato da Batalha Real."
                        data-diretor="Kinji Fukasaku"
                        data-elenco="Tatsuya Fujiwara, Aki Maeda"
                        data-classificacao="18"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2000">
                        <img src="img/assets/battleroyale.jpg" alt="Battle Royale">
                        <div class="plastic_shine"></div>
                    </li>
                </ul>
            </section>

            <section class="prateleira">
                <h2 class="tag">Ficção Científica</h2>
                <ul class="list">
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="O Enigma de Outro Mundo" 
                        data-sinopse="Uma equipe de pesquisa na Antártica é caçada por um alienígena que muda de forma e assume a aparência de suas vítimas."
                        data-diretor="John Carpenter"
                        data-elenco="Kurt Russell, Wilford Brimley"
                        data-classificacao="14"
                        data-preco="R$ 7,90 / 48h"
                        data-lancamento="1982">
                        <img src="img/assets/thing.jpg" alt="O Enigma de Outro Mundo">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Matrix" 
                        data-sinopse="Um hacker aprende com os misteriosos rebeldes sobre a verdadeira natureza de sua realidade e seu papel na guerra contra seus controladores."
                        data-diretor="Lana Wachowski, Lilly Wachowski"
                        data-elenco="Keanu Reeves, Laurence Fishburne"
                        data-classificacao="14"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="1999">
                        <img src="img/assets/matrix.jpg" alt="Matrix">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Bugonia" 
                        data-sinopse="Um jovem captura e interroga um empresário que ele acredita ser um invasor alienígena. O capturador, sua namorada, o empresário e um detetive particular se envolvem em uma tensa batalha psicológica."
                        data-diretor="Yorgos Lanthimos"
                        data-elenco="Emma Stone, Jesse Plemons"
                        data-classificacao="16"
                        data-preco="R$ 9,90 / 48h"
                        data-lancamento="2025">
                        <img src="img/assets/bugonia.jpg" alt="Bugonia">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Resident Evil: O Hóspede Maldito" 
                        data-sinopse="Uma unidade militar especial luta contra um supercomputador poderoso e fora de controle, e centenas de cientistas que se transformaram em criaturas carnívoras após um acidente no laboratório."
                        data-diretor="Paul W.S. Anderson"
                        data-elenco="Milla Jovovich, Michelle Rodriguez"
                        data-classificacao="16"
                        data-preco="R$ 7,90 / 48h"
                        data-lancamento="2002">
                        <img src="img/assets/residentevil.jpg" alt="Resident Evil: O Hóspede Maldito">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Acompanhante Perfeita" 
                        data-sinopse="Um fim de semana entre amigos em uma cabana remota se transforma em caos após a revelação de que um dos hóspedes não é o que parece."
                        data-diretor="Não informado"
                        data-elenco="Não informado"
                        data-classificacao="14"
                        data-preco="R$ 7,90 / 48h"
                        data-lancamento="2024">
                        <img src="img/assets/acompanhanteperfeita.jpg" alt="Acompanhante Perfeita">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Donnie Darko" 
                        data-sinopse="Um adolescente é atormentado com visões dum homem num terno de coelho quem o manipula a fazer crimes."
                        data-diretor="Richard Kelly"
                        data-elenco="Jake Gyllenhaal, Jena Malone"
                        data-classificacao="14"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2001">
                        <img src="img/assets/donniedarko.jpg" alt="Donnie Darko">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="O Exterminador do Futuro 2: O Julgamento Final" 
                        data-sinopse="Um ciborgue, idêntico ao que falhou em matar Sarah Connor, agora deve proteger o filho de dez anos dela, John, de um ciborgue ainda mais avançado e poderoso."
                        data-diretor="James Cameron"
                        data-elenco="Arnold Schwarzenegger, Linda Hamilton"
                        data-classificacao="14"
                        data-preco="R$ 9,90 / 48h"
                        data-lancamento="1991">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg89b6SqqTWNRVwUxLuka44DZp9yQOkdrMjt8BW6cs2w&s=10" alt="O Exterminador do Futuro 2: O Julgamento Final">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Homem-Aranha" 
                        data-sinopse="Após ser picado por uma aranha geneticamente modificada, o tímido adolescente Peter Parker ganha poderes incríveis e se torna o super-herói Homem-Aranha, devendo enfrentar um vingativo inimigo conhecido como Duende Verde"
                        data-diretor="Sam Raimi"
                        data-elenco="Tobey Maguire, Kirsten Dunst"
                        data-classificacao="12"
                        data-preco="R$ 8,90 / 48h"
                        data-lancamento="2002">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh3dgi97RteEUA-6RtKl1787H1ervD_cEUJyW4yHYVKA&s=10" alt="Homem-Aranha (Sam Raimi)">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Avatar" 
                        data-sinopse="Um militar paraplégico despachado para a lua Pandora em uma missão única fica dividido entre seguir suas ordens e proteger o mundo que ele sente ser sua casa."
                        data-diretor="James Cameron"
                        data-elenco="Sam Worthington, Zoe Saldana"
                        data-classificacao="12"
                        data-preco="R$ 9,90 / 48h"
                        data-lancamento="2009">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-FhonmGA35-Qx8CNrC4Q9ALHD4ov0NpHuvhtTJ1DX5g&s=10" alt="Avatar">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Twilight Zone" 
                        data-sinopse="Quatro segmentos de terror e ficção científica, dirigidos por quatro diretores famosos, cada um deles sendo uma nova versão de uma história clássica da série de televisão histórica de Rod Serling."
                        data-diretor="John Landis, Steven Spielberg"
                        data-elenco="Dan Aykroyd, Vic Morrow"
                        data-classificacao="14"
                        data-preco="R$ 7,90 / 48h"
                        data-lancamento="1983">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6oasPaNN9qNjGEClqvep0xwa2cBZwbmsBwfNwck_GVw&s=10" alt="Twilight Zone">
                        <div class="plastic_shine"></div>
                    </li>
                    <li class="movie" 
                        onclick="abrirFicha(this)" 
                        data-titulo="Devoradores de Estrelas" 
                        data-sinopse="Um astronauta tenta salvar a Terra enquanto está sozinho no espaço sideral."
                        data-diretor="Phil Lord, Christopher Miller"
                        data-elenco="Ryan Gosling, Sandra Hüller"
                        data-classificacao="12"
                        data-preco="R$ 9,90 / 48h"
                        data-lancamento="2026">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS34CltVd8Gr21BGM5yXb3BGaPe566GvqeEDE-tR7qzQQ&s=10" alt="Project Hail Mary">
                        <div class="plastic_shine"></div>
                    </li>
                </ul>
            </section>

        </div>

        <div class="ficha" id="ficha">
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