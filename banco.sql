CREATE DATABASE IF NOT EXISTS blockbuster_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE blockbuster_db;

-- Tabela dos usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo VARCHAR(50) DEFAULT 'cliente'
);

-- Tabela dos filmes
CREATE TABLE IF NOT EXISTS filmes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    diretor VARCHAR(100) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    ano INT NOT NULL,
    sinopse TEXT NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    classificacao VARCHAR(2) NOT NULL,
    capa VARCHAR(500) NOT NULL
);

-- Tabela associativa das locações
CREATE TABLE IF NOT EXISTS locacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    filme_id INT NOT NULL,
    data_locacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (filme_id) REFERENCES filmes(id) ON DELETE CASCADE
);



-- ==========================================
-- 1. ANIME
-- ==========================================
INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Look Back', 'Kiyotaka Oshiyama', 'Anime', 2024, 'Duas estudantes com paixões opostas pela arte criam um laço inquebrável através de seus mangás.', 'Anime', '12', 'lookback.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Look Back');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT '5 Centímetros por Segundo', 'Makoto Shinkai', 'Anime', 2007, 'A história de Takaki e Akane em três momentos distintos de suas vidas, marcada pela distância e pelo tempo.', 'Anime', '10', 'segundo.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = '5 Centímetros por Segundo');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'One Piece Film: Red', 'Goro Taniguchi', 'Anime', 2022, 'O bando do Chapéu de Palha vai a um festival assistir a Uta, a cantora mais amada do mundo, que é filha de Shanks.', 'Anime', '12', 'onepiece.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'One Piece Film: Red');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Dragon Ball Super: Broly', 'Tatsuya Nagamine', 'Anime', 2018, 'Goku e Vegeta encontram Broly, um misterioso saiyajin com um poder devastador que foi exilado.', 'Anime', '10', 'dragonball.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Dragon Ball Super: Broly');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Paprika', 'Satoshi Kon', 'Anime', 2006, 'Uma terapeuta usa um dispositivo experimental para entrar nos sonhos dos pacientes.', 'Anime', '16', 'paprika.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Paprika');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Perfect Blue', 'Satoshi Kon', 'Anime', 1997, 'Uma cantora pop vira atriz e começa a perder a noção da realidade ao ser perseguida.', 'Anime', '18', 'perfectblue.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Perfect Blue');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'The First Slam Dunk', 'Takehiko Inoue', 'Anime', 2022, 'Ryota Miyagi e o time do colégio Shohoku enfrentan o desafio definitivo no campeonato nacional de basquete.', 'Anime', '12', 'slamdunk.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'The First Slam Dunk');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'A Voz do Silêncio (Koe no Katachi)', 'Naoko Yamada', 'Anime', 2016, 'Um ex-valentão busca redenção ao reencontrar a colega surda que atormentava na escola.', 'Anime', '12', 'avozdosilencio.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'A Voz do Silêncio (Koe no Katachi)');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Your Name (Kimi no Na wa)', 'Makoto Shinkai', 'Anime', 2016, 'Dois adolescentes trocam de corpo misteriosamente durante o sono e criam um forte laço.', 'Anime', '12', 'yourname.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Your Name (Kimi no Na wa)');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Ghost in the Shell: O Fantasma do Futuro', 'Mamoru Oshii', 'Anime', 1995, 'Uma agente ciborgue da segurança pública caça um misterioso hacker.', 'Anime', '16', 'ghost.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Ghost in the Shell: O Fantasma do Futuro');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Akira', 'Katsuhiro Otomo', 'Anime', 1988, 'Em Neo-Tóquio, um jovem ganha poderes telecinéticos incontroláveis.', 'Anime', '16', 'akira.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Akira');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'A Viagem de Chihiro', 'Hayao Miyazaki', 'Anime', 2001, 'Uma garota entra em um mundo mágico governado por espíritos para salvar seus pais.', 'Anime', 'L', 'viagemdechihiro.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'A Viagem de Chihiro');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Princesa Mononoke', 'Hayao Miyazaki', 'Anime', 1997, 'Um príncipe se envolve na guerra entre deuses da floresta e humanos.', 'Anime', '12', 'mononoke.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Princesa Mononoke');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Meu Amigo Totoro', 'Hayao Miyazaki', 'Anime', 1988, 'Duas irmãs descobrem que a floresta vizinha é habitada por espíritos amigáveis.', 'Anime', 'L', 'totoro.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Meu Amigo Totoro');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Castelo Animado', 'Hayao Miyazaki', 'Anime', 2004, 'Uma jovem transformada em idosa busca refúgio no castelo de um mago.', 'Anime', 'L', 'casteloanimado.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Castelo Animado');


-- ==========================================
-- 2. AÇÃO
-- ==========================================
INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Battle Royale', 'Kinji Fukasaku', 'Ação', 2000, 'Estudantes do ensino médio são colocados em uma ilha isolada para lutar até a morte.', 'Ação', '18', 'battleroyale.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Battle Royale');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Batman: O Retorno', 'Tim Burton', 'Ação', 1992, 'Batman enfrenta o Pinguim e a enigmática Mulher-Gato em Gotham City.', 'Ação', '12', 'batmanreturns.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Batman: O Retorno');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Oldboy', 'Park Chan-wook', 'Ação', 2003, 'Um homem é mantido em cativeiro por 15 anos sem explicação e busca vingança implacável.', 'Ação', '18', 'oldboy.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Oldboy');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Tropa de Elite', 'José Padilha', 'Ação', 2007, 'O Capitão Nascimento lidera o BOPE no Rio de Janeiro enquanto busca um substituto.', 'Ação', '16', 'tropadeelite.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Tropa de Elite');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Sin City', 'Frank Miller', 'Ação', 2005, 'Histórias cruzadas de crimes e corrupção em uma cidade sombria e violenta.', 'Ação', '18', 'sincity.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Sin City');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Kill Bill: Volume 1', 'Quentin Tarantino', 'Ação', 2003, 'Uma ex-assassina desperta do coma decidida a se vingar de seus antigos colegas.', 'Ação', '18', 'killbill.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Kill Bill: Volume 1');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Pulp Fiction', 'Quentin Tarantino', 'Ação', 1994, 'As vidas de dois assassinos da máfia, um pugilista e outros marginais se entrelaçam.', 'Ação', '18', 'pulpfiction.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Pulp Fiction');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Blade Runner', 'Ridley Scott', 'Ação', 1982, 'Um caçador de androides deve perseguir e eliminar replicantes rebeldes em uma Los Angeles futurista.', 'Ação', '14', 'bladerunner.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Blade Runner');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'John Wick: De Volta ao Jogo', 'Chad Stahelski', 'Ação', 2014, 'Um ex-assassino sai da aposentadoria para caçar os gângsteres que destruíram sua vida.', 'Ação', '16', 'johnwick.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'John Wick: De Volta ao Jogo');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Jogos Vorazes', 'Gary Ross', 'Ação', 2012, 'Em um futuro distópico, jovens lutam até a morte em um reality show cruel.', 'Ação', '14', 'jogosvorazes.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Jogos Vorazes');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Duro de Matar', 'John McTiernan', 'Ação', 1988, 'Um policial tenta salvar reféns em um prédio dominado por terroristas.', 'Ação', '16', 'durodematar.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Duro de Matar');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Gladiador', 'Ridley Scott', 'Ação', 2000, 'Um general romano traído busca vingança na arena.', 'Ação', '16', 'gladiador.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Gladiador');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Mad Max: Estrada da Fúria', 'George Miller', 'Ação', 2015, 'Em um mundo pós-apocalíptico, uma mulher rebela-se contra um tirano.', 'Ação', '16', 'madmax.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Mad Max: Estrada da Fúria');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Exterminador do Futuro 2', 'James Cameron', 'Ação', 1991, 'Um ciborgue protege o líder da resistência humana.', 'Ação', '14', 'terminator.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Exterminador do Futuro 2');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Batman: O Cavaleiro das Trevas', 'Christopher Nolan', 'Ação', 2008, 'Batman enfrenta o caos instaurado pelo Coringa em Gotham.', 'Ação', '14', 'batmannolan.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Batman: O Cavaleiro das Trevas');


-- ==========================================
-- 3. FICÇÃO CIENTÍFICA
-- ==========================================
INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Sobrevivente', 'Paul Michael Glaser', 'Ficção Científica', 1987, 'Em um futuro totalitário, um homem é forçado a participar de um jogo mortal de sobrevivência.', 'Ficção Científica', '16', 'sobrevivente.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Sobrevivente');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Avatar', 'James Cameron', 'Ficção Científica', 2009, 'Um fuzileiro viaja para Pandora e se divide entre ordens e os nativos.', 'Ficção Científica', '12', 'avatar.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Avatar');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa)
SELECT 'Metropolis', 'Fritz Lang', 'Ficção Científica', 1927, 'Metrópolis, ano 2026. A cidade se divide rigidamente entre os poderosos no plano superior e os operários, em regime de escravidão, vivendo num local subterrâneo com suas famílias..', 'Ficção Científica', 'L', 'metropolis.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Metropolis');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Donnie Darko', 'Richard Kelly', 'Ficção Científica', 2001, 'Um jovem perturbado tem visões de um coelho gigante que o manipula para cometer crimes.', 'Ficção Científica', '14', 'donniedarko.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Donnie Darko');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Resident Evil', 'Paul W. S. Anderson', 'Ficção Científica', 2002, 'Uma equipe de comandos investiga um laboratório subterrâneo tomado por zumbis.', 'Ficção Científica', '16', 'residentevil.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Resident Evil');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Quinto Elemento', 'Luc Besson', 'Ficção Científica', 1997, 'Um taxista no século XXIII precisa salvar a Terra de uma força cósmica maligna.', 'Ficção Científica', '12', 'quintoelemento.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Quinto Elemento');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Matrix', 'Lana e Lilly Wachowski', 'Ficção Científica', 1999, 'Um hacker descobre a ilusão da realidade controlada por máquinas.', 'Ficção Científica', '14', 'matrix.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Matrix');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Interestelar', 'Christopher Nolan', 'Ficção Científica', 2014, 'Astronautas viajam por um buraco de minhoca em busca de um novo lar para a humanidade.', 'Ficção Científica', '10', 'interestelar.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Interestelar');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Jurassic Park', 'Steven Spielberg', 'Ficção Científica', 1993, 'Cientistas visitam um parque com dinossauros clonados que acabam escapando.', 'Ficção Científica', '10', 'jurassicpark.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Jurassic Park');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'De Volta para o Futuro', 'Robert Zemeckis', 'Ficção Científica', 1985, 'Um jovem viaja acidentalmente ao passado em uma máquina do tempo.', 'Ficção Científica', '10', 'mcfly.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'De Volta para o Futuro');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Star Wars: Episódio IV - Uma Nova Esperança', 'George Lucas', 'Ficção Científica', 1977, 'Um jovem fazendeiro junta-se a mestres Jedi para salvar a galáxia.', 'Ficção Científica', 'L', 'starwars.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Star Wars: Episódio IV - Uma Nova Esperança');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Blade Runner 2049', 'Denis Villeneuve', 'Ficção Científica', 2017, 'Um novo policial descobre um segredo que pode mergulhar a sociedade no caos.', 'Ficção Científica', '16', 'bladerunner2049.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Blade Runner 2049');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Wall-E', 'Andrew Stanton', 'Ficção Científica', 2008, 'Um pequeno robô em uma Terra abandonada embarca em uma jornada espacial.', 'Ficção Científica', 'L', 'walle.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Wall-E');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'A Chegada', 'Denis Villeneuve', 'Ficção Científica', 2016, 'Uma linguista é recrutada para se comunicar com alienígenas na Terra.', 'Ficção Científica', '10', 'achegada.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'A Chegada');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Duna', 'Denis Villeneuve', 'Ficção Científica', 2021, 'Paul Atreides viaja para o planeta mais perigoso do universo.', 'Ficção Científica', '14', 'duna.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Duna');


-- ==========================================
-- 4. ANIMAÇÃO
-- ==========================================
INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Toy Story', 'John Lasseter', 'Animação', 1995, 'Brinquedos ganham vida quando os humanos não estão olhando.', 'Animação', 'L', 'toystory.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Toy Story');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Rei Leão', 'Roger Allers e Rob Minkoff', 'Animação', 1994, 'Um jovem leão foge após a morte do pai e retorna para reivindicar o trono.', 'Animação', 'L', 'reileao.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Rei Leão');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Shrek', 'Andrew Adamson e Vicky Jenson', 'Animação', 2001, 'Um ogro relutante embarca em uma jornada para resgatar uma princesa.', 'Animação', 'L', 'shrek.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Shrek');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Procurando Nemo', 'Andrew Stanton', 'Animação', 2003, 'Um peixe-palhaço cruza o oceano para resgatar seu filho.', 'Animação', 'L', 'nemo.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Procurando Nemo');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Monstros S.A.', 'Pete Docter', 'Animação', 2001, 'Monstros que assustam crianças acabam acolhendo uma garotinha humana.', 'Animação', 'L', 'monstros.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Monstros S.A.');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Os Incríveis', 'Brad Bird', 'Animação', 2004, 'Uma família de super-heróis aposentados volta à ativa.', 'Animação', 'L', 'osincriveis.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Os Incríveis');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Up: Altas Aventuras', 'Pete Docter', 'Animação', 2009, 'Um idoso amarra milhares de balões à sua casa para voar.', 'Animação', 'L', 'up.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Up: Altas Aventuras');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Ratatouille', 'Brad Bird', 'Animação', 2007, 'Um rato com talento para a culinária sonha em ser chef em Paris.', 'Animação', 'L', 'ratatouille.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Ratatouille');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Como Treinar o Seu Dragão', 'Dean DeBlois', 'Animação', 2010, 'Um jovem viking faz amizade com um raro dragão.', 'Animação', 'L', 'treinardragao.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Como Treinar o Seu Dragão');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Divertida Mente', 'Pete Docter', 'Animação', 2015, 'As emoções na mente de uma garota tentam guiá-la.', 'Animação', 'L', 'divertidamente.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Divertida Mente');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Viva: A Vida é uma Festa', 'Lee Unkrich', 'Animação', 2017, 'Um garoto viaja acidentalmente para a Terra dos Mortos.', 'Animação', 'L', 'viva.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Viva: A Vida é uma Festa');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Kung Fu Panda', 'Mark Osborne', 'Animação', 2008, 'Um panda preguiçoso é escolhido como o Dragão Guerreiro.', 'Animação', 'L', 'kungfupanda.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Kung Fu Panda');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Aladdin', 'Ron Clements', 'Animação', 1992, 'Um jovem humilde encontra uma lâmpada mágica com um gênio.', 'Animação', 'L', 'aladdin.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Aladdin');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'A Era do Gelo', 'Chris Wedge', 'Animação', 2002, 'Um mamute e seus amigos unem forças para devolver um bebê humano.', 'Animação', 'L', 'aeradogelo.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'A Era do Gelo');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Vida de Inseto', 'John Lasseter', 'Animação', 1998, 'Uma formiga contrata insetos artistas de circo para defender sua colônia.', 'Animação', 'L', 'vidadeinseto.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Vida de Inseto');


-- ==========================================
-- 5. COMÉDIA
-- ==========================================
INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'As Branquelas', 'Keenen Ivory Wayans', 'Comédia', 2004, 'Dois agentes do FBI se disfarçam de socialites.', 'Comédia', '12', 'branquelas.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'As Branquelas');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Se Beber, Não Case!', 'Todd Phillips', 'Comédia', 2009, 'Amigos acordam em Las Vegas sem lembrar de nada da noite anterior.', 'Comédia', '16', 'naocase.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Se Beber, Não Case!');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Auto da Compadecida', 'Guel Arraes', 'Comédia', 2000, 'As aventuras de João Grilo e Chicó no sertão.', 'Comédia', '12', 'compadecida.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Auto da Compadecida');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa)
SELECT 'Gente Grande 2', 'Dennis Dugan', 'Comédia', 2013, 'Lenny Feder e a família se mudam para a própria cidade natal para ficar perto dos amigos.', 'Comédia', '12', 'gentegrande.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Gente Grande 2');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Superbad: É Hoje', 'Greg Mottola', 'Comédia', 2007, 'Dois amigos do colegial tentam comprar bebidas para uma festa.', 'Comédia', '16', 'superbad.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Superbad: É Hoje');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Click', 'Frank Coraci', 'Comédia', 2006, 'Um homem encontra um controle remoto mágico que avança sua vida.', 'Comédia', '12', 'click.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Click');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Debi & Loide: Dois Idiotas em Apuros', 'Peter Farrelly', 'Comédia', 1994, 'Dois amigos viajam pelos EUA para devolver uma maleta.', 'Comédia', '12', 'debielloide.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Debi & Loide: Dois Idiotas em Apuros');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Todo Poderoso', 'Tom Shadyac', 'Comédia', 2003, 'Um homem recebe poderes divinos por uma semana.', 'Comédia', '10', 'todopoderoso.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Todo Poderoso');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'As Loucuras de Dick e Jane', 'Dean Parisot', 'Comédia', 2005, 'Um casal perde todo o dinheiro e recorre a pequenos roubos.', 'Comédia', '10', 'dickejane.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'As Loucuras de Dick e Jane');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Meninas Malvadas', 'Mark Waters', 'Comédia', 2004, 'Uma adolescente tenta se encaixar no grupo mais popular da escola.', 'Comédia', '12', 'meninasmalvadas.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Meninas Malvadas');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'A Mentira', 'Will Gluck', 'Comédia', 2010, 'Uma estudante espalha uma mentira inofensiva sobre sua reputação.', 'Comédia', '14', 'amentira.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'A Mentira');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Vizinhos', 'Nicholas Stoller', 'Comédia', 2014, 'Um casal entra em guerra contra uma fraternidade barulhenta.', 'Comédia', '16', 'vizinhos.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Vizinhos');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Mamma Mia!', 'Phyllida Lloyd', 'Comédia', 2008, 'Uma noiva convida três antigos amores da mãe para descobrir seu pai.', 'Comédia', 'L', 'mammamia.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Mamma Mia!');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Mentiroso', 'Tom Shadyac', 'Comédia', 1997, 'Um advogado mentiroso fica impedido de mentir por um dia.', 'Comédia', '10', 'omentiroso.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Mentiroso');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Gente Grande', 'Dennis Dugan', 'Comédia', 2010, 'Cinco amigos de infância se reencontram no fim de semana.', 'Comédia', '12', 'gentegrande1.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Gente Grande');


-- ==========================================
-- 6. TERROR
-- ==========================================
INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Exorcista', 'William Friedkin', 'Terror', 1973, 'Uma jovem é possuída por uma entidade demoníaca.', 'Terror', '18', 'exorcista.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Exorcista');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Invocação do Mal', 'James Wan', 'Terror', 2013, 'Investigadores paranormais ajudam uma família aterrorizada.', 'Terror', '14', 'invocacaodomal.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Invocação do Mal');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Corra!', 'Jordan Peele', 'Terror', 2017, 'Um jovem descobre um segredo perturbador na casa da família da namorada.', 'Terror', '14', 'corra.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Corra!');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Hereditário', 'Ari Aster', 'Terror', 2018, 'Uma família desvenda segredos aterrorizantes após a morte da avó.', 'Terror', '16', 'hereditario.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Hereditário');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'It: A Coisa', 'Andy Muschietti', 'Terror', 2017, 'Crianças enfrentam uma criatura metamorfa disfarçada de palhaço.', 'Terror', '16', 'it.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'It: A Coisa');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Iluminado', 'Stanley Kubrick', 'Terror', 1980, 'Um escritor aceita um emprego em um hotel isolado e enlouquece.', 'Terror', '16', 'oiluminado.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Iluminado');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Pânico', 'Wes Craven', 'Terror', 1996, 'Um assassino mascarado implacável aterroriza estudantes.', 'Terror', '18', 'panico.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Pânico');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Halloween', 'John Carpenter', 'Terror', 1978, 'Michael Myers escapa de um sanatório e retorna à sua cidade natal.', 'Terror', '16', 'halloween.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Halloween');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Um Lugar Silencioso', 'John Krasinski', 'Terror', 2018, 'Uma família sobrevive em silêncio absoluto em um mundo caçado por som.', 'Terror', '14', 'umlugarsilencioso.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Um Lugar Silencioso');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Atividade Paranormal', 'Oren Peli', 'Terror', 2007, 'Casal instala câmeras para registrar manifestações em casa.', 'Terror', '14', 'atividadeparanormal.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Atividade Paranormal');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Invocação do Mal 2', 'James Wan', 'Terror', 2016, 'Investigadores viajam a Londres para ajudar uma família atormentada.', 'Terror', '14', 'invocacaodomal2.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Invocação do Mal 2');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Jogos Mortais', 'James Wan', 'Terror', 2004, 'Homens acordam em um banheiro subterrâneo em um jogo sádico.', 'Terror', '18', 'jogosmortais.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Jogos Mortais');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Sobrenatural', 'James Wan', 'Terror', 2010, 'Família tenta impedir que entidades capturem seu filho em coma.', 'Terror', '14', 'sobrenatural.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Sobrenatural');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Bebê de Rosemary', 'Roman Polanski', 'Terror', 1968, 'Grávida desconfia que vizinhos têm planos sinistros para seu bebê.', 'Terror', '16', 'bebederosemary.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Bebê de Rosemary');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Annabelle', 'John R. Leonetti', 'Terror', 2014, 'Casal é aterrorizado por uma boneca antiga possuída.', 'Terror', '14', 'annabelle.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Annabelle');


-- ==========================================
-- 7. DRAMA
-- ==========================================
INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Poderoso Chefão', 'Francis Ford Coppola', 'Drama', 1972, 'A saga de uma família mafiosa e sua luta pelo poder.', 'Drama', '16', 'godfather.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Poderoso Chefão');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Forrest Gump', 'Robert Zemeckis', 'Drama', 1994, 'A história de um homem simples que marcou gerações.', 'Drama', '12', 'forestgump.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Forrest Gump');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Um Sonho de Liberdade', 'Frank Darabont', 'Drama', 1994, 'A esperança e a amizade resistem dentro de uma prisão rígida.', 'Drama', '16', 'sonhodeliberdade.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Um Sonho de Liberdade');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'A Lista de Schindler', 'Steven Spielberg', 'Drama', 1993, 'A história real de Oskar Schindler que salvou mais de mil judeus.', 'Drama', '14', 'schindler.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'A Lista de Schindler');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Clube da Luta', 'David Fincher', 'Drama', 1999, 'Homem insone cria um clube da luta secreto com vendedor.', 'Drama', '18', 'clubedaluta.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Clube da Luta');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'À Procura da Felicidade', 'Gabriele Muccino', 'Drama', 2006, 'Pai lutando contra a pobreza extrema busca um futuro melhor para o filho.', 'Drama', 'L', 'procurandofelicidade.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'À Procura da Felicidade');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Titanic', 'James Cameron', 'Drama', 1997, 'Romance apaixonado a bordo do famoso navio condenado.', 'Drama', '12', 'titanic.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Titanic');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Parasita', 'Bong Joon-ho', 'Drama', 2019, 'Família pobre infiltra-se na rotina de uma família rica.', 'Drama', '16', 'parasita.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Parasita');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Whiplash: Em Busca da Perfeição', 'Damien Chazelle', 'Drama', 2014, 'Baterista jovem enfrenta um professor implacável.', 'Drama', '12', 'whiplash.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Whiplash: Em Busca da Perfeição');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Show de Truman', 'Peter Weir', 'Drama', 1998, 'Um homem descobre que toda a sua vida é na verdade um gigantesco programa de televisão transmitido ao vivo para o mundo.', 'Drama', '12', 'showdetruman.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Show de Truman');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Green Book: O Guia', 'Peter Farrelly', 'Drama', 2018, 'Segurança torna-se motorista de pianista em turnê pelo sul dos EUA.', 'Drama', '12', 'greenbook.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Green Book: O Guia');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Sociedade dos Poetas Mortos', 'Peter Weir', 'Drama', 1989, 'Professor excêntrico inspira alunos em colégio conservador.', 'Drama', '12', 'sociedadeposetas.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Sociedade dos Poetas Mortos');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Central do Brasil', 'Walter Salles', 'Drama', 1998, 'Ex-professora ajuda garoto a procurar o pai após perder a mãe.', 'Drama', '12', 'centraldobrasil.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Central do Brasil');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'O Pianista', 'Roman Polanski', 'Drama', 2002, 'Músico judeu polonês luta para sobreviver à guerra.', 'Drama', '14', 'pianista.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'O Pianista');

INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) 
SELECT 'Milagre na Cela 7', 'Mehmet Ada Öztekin', 'Drama', 2019, 'Pai com deficiência intelectual é acusado injustamente.', 'Drama', '14', 'milagrecela7.jpg'
FROM DUAL WHERE NOT EXISTS (SELECT * FROM filmes WHERE titulo = 'Milagre na Cela 7');