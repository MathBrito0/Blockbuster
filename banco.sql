CREATE DATABASE IF NOT EXISTS blockbuster_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE blockbuster_db;



-- Tabela dos Usuários

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL                 --Guardar o hash do PHP
);


-- Tabela dos Filmes

CREATE TABLE filmes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    ano INT NOT NULL,
    sinopse TEXT NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    capa VARCHAR(500) NOT NULL
);



-- Tabela Associativa

CREATE TABLE locacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    filme_id INT NOT NULL,
    data_locacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (usuario_id) RFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (filme_id) RFERENCES filmes(id) ON DELETE CASCADE
);




-- Inserindo dados de filmes

INSERT INTO filmes (titulo, sinopse, categoria, capa_url) VALUES

('Akira', 'Um projeto militar secreto coloca Neo-Tóquio em perigo ao transformar um adolescente membro de uma gangue de motoqueiros em um psicopata psíquico furioso que só pode ser detido por seu melhor amigo.', 'Anime', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ8H_MgwChXa_jCj_xHCZRfYcbroj0XDZWL57AoRjdAA&s=10'),
('Ghost in The Shell', 'Uma policial ciborgue e seu parceiro caçam um hacker misterioso e poderoso.', 'Anime', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJLXDIdCI_Z63sLIPZIqJPlDaYI9eFv_BsAwSyEHECnv0dIF92JzAdu9s&s=10'),
('John Wick', 'John Wick é um ex-assassino de aluguel em luto por perder seu grande amor. Quando invadem sua casa, o roubam e matam seu cachorro, ele é forçado a voltar à ativa para se vingar.', 'Ação', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7FjYP8yzUXNOFjc2oFgj83TK7EvR6x9osKl6F--e7uw&s=10'),
('Matrix', 'Um hacker aprende com os misteriosos rebeldes sobre a verdadeira natureza de sua realidade e seu papel na guerra contra seus controladores.', 'Ficção Científica', 'https://m.media-amazon.com/images/M/MV5BNThiYTQzOTUtNmFjYy00OWEwLTg2NWUtMmM3NGE0YjFjOWRjXkEyXkFqcGc@._V1_QL75_UX380_CR0,4,380,562_.jpg');