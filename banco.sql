CREATE DATABASE IF NOT EXISTS blockbuster_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE blockbuster_db;

-- Tabela dos Usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

-- Tabela dos Filmes com todas as colunas
CREATE TABLE IF NOT EXISTS filmes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    ano INT NOT NULL,
    sinopse TEXT NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    capa VARCHAR(500) NOT NULL,
    diretor VARCHAR(100) DEFAULT 'Não informado',
    elenco TEXT,
    classificacao VARCHAR(10) DEFAULT 'L',
    preco VARCHAR(50) DEFAULT 'R$ 7,90 / 48h'
);

-- Tabela Associativa (Locações)
CREATE TABLE IF NOT EXISTS locacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    filme_id INT NOT NULL,
    data_locacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (filme_id) REFERENCES filmes(id) ON DELETE CASCADE
);

-- Inserção inteligente: se o ID já existe, ele apenas atualiza os dados
INSERT INTO filmes (id, titulo, genero, ano, sinopse, categoria, capa, diretor, elenco, classificacao, preco) VALUES

-- == ANIME ==
(1, 'Akira', 'Anime', 1988, 'Um projeto militar secreto coloca Neo-Tóquio em perigo ao transformar um adolescente em um psicopata psíquico.', 'Anime', 'akira.jpg', 'Katsuhiro Otomo', 'Mitsuo Iwata, Nozomu Sasaki', '16', 'R$ 8,90 / 48h'),
(2, 'Ghost in The Shell', 'Anime', 1995, 'Uma policial ciborgue e seu parceiro caçam um hacker misterioso e poderoso.', 'Anime', 'ghost.jpg', 'Mamoru Oshii', 'Atsuko Tanaka, Akio Ōtsuka', '14', 'R$ 7,90 / 48h'),
(3, 'Your Name', 'Anime', 2016, 'Dois jovens estranhos compartilham uma conexão profunda e misteriosa ao trocarem de corpos.', 'Anime', 'yourname.jpg', 'Makoto Shinkai', 'Ryunosuke Kamiki, Mone Kamishiraishi', 'L', 'R$ 8,90 / 48h'),
(4, 'A Voz do Silêncio', 'Anime', 2016, 'Um ex-bully busca redenção reencontrando a garota surda que ele atormentava na escola.', 'Anime', 'avozdosilencio.jpg', 'Naoko Yamada', 'Miyu Irino, Saori Hayami', '12', 'R$ 7,90 / 48h'),
(5, 'The First Slam Dunk', 'Anime', 2022, 'Ryota Miyagi e o time de basquete do Shohoku enfrentam o desafiador campeonato nacional.', 'Anime', 'slamdunk.jpg', 'Takehiko Inoue', 'Shugo Nakamura, Jun Kasama', '12', 'R$ 9,90 / 48h'),
(6, 'Perfect Blue', 'Anime', 1997, 'Uma pop idol abandonando a carreira para virar atriz começa a perder o controle da realidade.', 'Anime', 'perfectblue.jpg', 'Satoshi Kon', 'Junko Iwao, Rica Matsumoto', '18', 'R$ 8,90 / 48h'),
(7, 'Paprika', 'Anime', 2006, 'Aparelhos que permitem entrar nos sonhos das pessoas são roubados, gerando caos.', 'Anime', 'paprika.jpg', 'Satoshi Kon', 'Megumi Hayashibara, Toru Emori', '16', 'R$ 8,90 / 48h'),
(8, 'Dragon Ball Super: Broly', 'Anime', 2018, 'Goku e Vegeta encontram um misterioso guerreiro Saiyajin chamado Broly.', 'Anime', 'dragonball.jpg', 'Tatsuya Nagamine', 'Masako Nozawa, Ryō Horikawa', '10', 'R$ 8,90 / 48h'),
(9, 'One Piece: Film Red', 'Anime', 2022, 'O bando do Chapéu de Palha vai a um show onde Uta, a diva mais amada do mundo, se revela.', 'Anime', 'onepiece.jpg', 'Goro Taniguchi', 'Mayumi Tanaka, Kaori Nazuka', '12', 'R$ 8,90 / 48h'),
(10, '5 Centimeters Per Second', 'Anime', 2007, 'Três histórias de amor e distância acompanham a vida de Takaki e Akane.', 'Anime', 'segundo.jpg', 'Makoto Shinkai', 'Kenji Mizuhashi, Satomi Hanamura', '12', 'R$ 6,90 / 48h'),
(11, 'Look Back', 'Anime', 2024, 'Duas jovens estudantes com paixões diferentes pelo desenho criam um forte laço artístico.', 'Anime', 'lookback.jpg', 'Kiyotaka Oshiyama', 'Kumi Kawai, Mizuki Yoshida', '12', 'R$ 8,90 / 48h'),

-- == AÇÃO ==
(12, 'A Odisseia', 'Aventura', 1997, 'A clássica jornada épica de Odisseu enfrentando monstros e deuses para retornar a Ítaca.', 'Ação', 'odisseia.jpg', 'Andrei Konchalovsky', 'Armand Assante, Greta Scacchi', '14', 'R$ 7,90 / 48h'),
(13, 'Jogos Vorazes', 'Ação', 2012, 'Em um futuro distópico, jovens lutam até a morte em um reality show governamental.', 'Ação', 'jogosvorazes.jpg', 'Gary Ross', 'Jennifer Lawrence, Josh Hutcherson', '14', 'R$ 7,90 / 48h'),
(14, 'John Wick', 'Ação', 2014, 'Um ex-assassino de aluguel implacável volta à ativa para buscar vingança.', 'Ação', 'johnwick.jpg', 'Chad Stahelski', 'Keanu Reeves, Michael Nyqvist', '16', 'R$ 9,90 / 48h'),
(15, 'Blade Runner', 'Ação', 1982, 'Um caçador de androides renegados deve eliminar replicantes fugitivos em uma Los Angeles distópica.', 'Ação', 'bladerunner.jpg', 'Ridley Scott', 'Harrison Ford, Rutger Hauer', '14', 'R$ 8,90 / 48h'),
(16, 'Pulp Fiction', 'Ação', 1994, 'As vidas de dois assassinos de aluguel, um boxeador e um gângster se entrelaçam em histórias de crime.', 'Ação', 'pulpfiction.jpg', 'Quentin Tarantino', 'John Travolta, Uma Thurman, Samuel L. Jackson', '18', 'R$ 9,90 / 48h'),
(17, 'Kill Bill: Volume 1', 'Ação', 2003, 'Uma ex-assassina acorda de um coma e busca vingança contra seu antigo esquadrão.', 'Ação', 'killbill.jpg', 'Quentin Tarantino', 'Uma Thurman, Lucy Liu, Vivica A. Fox', '18', 'R$ 8,90 / 48h'),
(18, 'Sin City: A Cidade do Pecado', 'Ação', 2005, 'Histórias cruzadas de crimes e corrupção em uma cidade neo-noir extremamente estilizada.', 'Ação', 'sincity.jpg', 'Frank Miller, Robert Rodriguez', 'Mickey Rourke, Clive Owen, Bruce Willis', '18', 'R$ 8,90 / 48h'),
(19, 'Tropa de Elite', 'Ação', 2007, 'O capitão Nascimento do BOPE precisa liderar operações duras no Rio de Janeiro enquanto busca um substituto.', 'Ação', 'tropadeelite.jpg', 'José Padilha', 'Wagner Moura, Caio Junqueira', '16', 'R$ 7,90 / 48h'),
(20, 'Oldboy', 'Ação', 2003, 'Um homem é mantido em cativeiro por 15 anos sem explicação e depois liberado para buscar vingança.', 'Ação', 'oldboy.jpg', 'Park Chan-wook', 'Choi Min-sik, Yoo Ji-tae', '18', 'R$ 8,90 / 48h'),
(21, 'Batman Returns', 'Ação', 1992, 'Batman enfrenta o Pinguim e a misteriosa Mulher-Gato em Gotham City.', 'Ação', 'batmanreturns.jpg', 'Tim Burton', 'Michael Keaton, Danny DeVito, Michelle Pfeiffer', '12', 'R$ 7,90 / 48h'),
(22, 'Battle Royale', 'Ação', 2000, 'Estudantes japoneses são levados para uma ilha remota onde devem lutar até a morte.', 'Ação', 'battleroyale.jpg', 'Kinji Fukasaku', 'Tatsuya Fujiwara, Aki Maeda', '18', 'R$ 8,90 / 48h'),

-- == FICÇÃO CIENTÍFICA ==
(23, 'O Enigma de Outro Mundo', 'Ficção Científica', 1982, 'Uma equipe de cientistas na Antártida descobre uma criatura alienígena capaz de assimilar outras formas de vida.', 'Ficção Científica', 'thing.jpg', 'John Carpenter', 'Kurt Russell, Wilford Brimley', '14', 'R$ 7,90 / 48h'),
(24, 'Matrix', 'Ficção Científica', 1999, 'Um hacker descobre a verdade sobre a realidade simulada controlada por máquinas.', 'Ficção Científica', 'matrix.jpg', 'Lana Wachowski, Lilly Wachowski', 'Keanu Reeves, Laurence Fishburne', '14', 'R$ 8,90 / 48h'),
(25, 'Bugonia', 'Ficção Científica', 2025, 'Dois jovens obcecados por conspirações sequestram a CEO de uma grande empresa acreditando ser uma alienígena.', 'Ficção Científica', 'bugonia.jpg', 'Yorgos Lanthimos', 'Emma Stone, Jesse Plemons', '16', 'R$ 9,90 / 48h'),
(26, 'Resident Evil: O Hóspede Maldito', 'Ficção Científica', 2002, 'Uma equipe de comandos investiga um laboratório subterrâneo secreto onde um vírus mortal foi liberado.', 'Ficção Científica', 'residentevil.jpg', 'Paul W.S. Anderson', 'Milla Jovovich, Michelle Rodriguez', '16', 'R$ 7,90 / 48h'),
(27, 'Donnie Darko', 'Ficção Científica', 2001, 'Um adolescente perturbado tem visões de um coelho gigante que o manipula a cometer atos bizarros.', 'Ficção Científica', 'donniedarko.jpg', 'Richard Kelly', 'Jake Gyllenhaal, Jena Malone', '14', 'R$ 8,90 / 48h'),
(28, 'O Exterminador do Futuro 2', 'Ficção Científica', 1991, 'Um ciborgue é enviado do futuro para proteger o jovem John Connor de um modelo mais avançado.', 'Ficção Científica', 'terminator.jpg', 'James Cameron', 'Arnold Schwarzenegger, Linda Hamilton', '14', 'R$ 9,90 / 48h'),
(29, 'Homem-Aranha', 'Ficção Científica', 2002, 'Peter Parker ganha superpoderes após ser picado por uma aranha geneticamente modificada.', 'Ficção Científica', 'miranha.jpg', 'Sam Raimi', 'Tobey Maguire, Kirsten Dunst', '12', 'R$ 8,90 / 48h'),
(30, 'Avatar', 'Ficção Científica', 2009, 'Um fuzileiro naval paraplégico viaja para a lua Pandora e se envolve no conflito de seu povo nativo.', 'Ficção Científica', 'avatar.jpg', 'James Cameron', 'Sam Worthington, Zoe Saldana', '12', 'R$ 9,90 / 48h'),
(31, 'Twilight Zone', 'Ficção Científica', 1983, 'Antologia de histórias fantásticas e bizarras que exploram os limites da imaginação humana.', 'Ficção Científica', 'twilightzone.jpg', 'John Landis, Steven Spielberg', 'Dan Aykroyd, Vic Morrow', '14', 'R$ 7,90 / 48h'),
(32, 'Devoradores de Estrelas', 'Ficção Científica', 2026, 'Um astronauta solitário acorda em uma missão espacial de última hora para salvar a Terra da extinção solar.', 'Ficção Científica', 'devoradoresdeestrelas.jpg', 'Phil Lord, Christopher Miller', 'Ryan Gosling, Sandra Hüller', '12', 'R$ 9,90 / 48h')

ON DUPLICATE KEY UPDATE 
    titulo = VALUES(titulo),
    genero = VALUES(genero),
    ano = VALUES(ano),
    sinopse = VALUES(sinopse),
    categoria = VALUES(categoria),
    capa = VALUES(capa),
    diretor = VALUES(diretor),
    elenco = VALUES(elenco),
    classificacao = VALUES(classificacao),
    preco = VALUES(preco);