CREATE DATABASE IF NOT EXISTS blockbuster_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE blockbuster_db;

-- Tabela dos usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL                
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



INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) VALUES
('Akira', 'Katsuhiro Otomo', 'Ficção Científica', 1988, 'Um projeto militar secreto coloca Neo-Tóquio em perigo ao transformar um adolescente membro de uma gangue de motoqueiros em um psicopata psíquico furioso que só pode ser detido por seu melhor amigo.', 'Anime', '16', ''),
('John Wick', 'Chad Stahelski', 'Ação', 2014, 'John Wick é um ex-assassino de aluguel em luto por perder seu grande amor. Quando invadem sua casa, o roubam e matam seu cachorro, ele é forçado a voltar à ativa para se vingar.', 'Ação', '16', ''),
('Matrix', 'Lana Wachowski, Lilly Wachowski', 'Ficção Científica', 1999, 'Um hacker aprende com os misteriosos rebeldes sobre a verdadeira natureza de sua realidade e seu papel na guerra contra seus controladores.', 'Ficção Científica', '14', ''),
('Toy Story', 'John Lasseter', 'Animação', 1995, 'Um boneco de caubói fica com ciúmes quando um novo boneco astronauta se torna o brinquedo favorito de seu dono, e os dois acabam perdidos longe de casa.', 'Outros', 'L', '');
