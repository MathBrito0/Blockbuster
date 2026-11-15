<?php

session_start();
header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 0);
require_once 'backend.php';
if (!isset($_SESSION['funcionario']) || $_SESSION['funcionario'] !== true) {
    
    http_response_code(403);
    echo json_encode(['erro' => 'Acesso restrito a funcionários']);
    exit;
}


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    http_response_code(405);
    echo json_encode(['erro' => 'Método não permitido']);

    exit;
}


if (!isset($_SESSION['usuario_id'])) {

    http_response_code(401);
    echo json_encode(['erro' => 'Faça login para cadastrar filmes']);

    exit;
}


$titulo = trim($_POST['titulo'] ?? '');
$diretor = trim($_POST['diretor'] ?? '');
$genero = trim($_POST['genero'] ?? '');
$categoria = trim($_POST['categoria'] ?? '');
$ano = trim($_POST['ano'] ?? '');
$classificacao = trim($_POST['classificacao'] ?? '');
$sinopse = trim($_POST['sinopse'] ?? '');


if (empty($titulo) || empty($diretor) || empty($genero) || empty($categoria) || empty($ano) || empty($classificacao) || empty($sinopse)) {

    http_response_code(400);
    echo json_encode(['erro' => 'Preencha todos os campos']);

    exit;
}


if (!in_array($categoria, ['Anime', 'Ação', 'Ficção Científica', 'Outros'])) {

    http_response_code(400);
    echo json_encode(['erro' => 'Categoria inválida']);

    exit;
}


if (!in_array($classificacao, ['L', '10', '12', '14', '16', '18'])) {

    http_response_code(400);
    echo json_encode(['erro' => 'Classificação inválida']);

    exit;
}


if (!is_numeric($ano)) {

    http_response_code(400);
    echo json_encode(['erro' => 'Ano inválido']);

    exit;
}


$stmt = $pdo->prepare("INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, categoria, classificacao, capa) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

if ($stmt->execute([$titulo, $diretor, $genero, (int) $ano, $sinopse, $categoria, $classificacao, ''])) {

    http_response_code(201);
    echo json_encode(['sucesso' => true, 'mensagem' => 'Filme cadastrado com sucesso']);

    exit;

} else {

    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao cadastrar o filme']);

    exit;
}
?>
