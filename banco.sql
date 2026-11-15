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

-- Tabela associativa das locações
CREATE TABLE IF NOT EXISTS locacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    filme_id INT NOT NULL,
    data_locacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (filme_id) REFERENCES filmes(id) ON DELETE CASCADE
);