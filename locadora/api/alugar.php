<?php

session_start();
header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 0);
require_once 'backend.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    http_response_code(405);
    echo json_encode(['erro' => 'Método não permitido']);

    exit;
}


if (!isset($_SESSION['usuario_id'])) {

    http_response_code(401);
    echo json_encode(['erro' => 'Faça login para alugar filmes']);

    exit;
}


$filme_id = trim($_POST['filme_id'] ?? '');


if (empty($filme_id) || !is_numeric($filme_id)) {

    http_response_code(400);
    echo json_encode(['erro' => 'Filme inválido']);

    exit;
}


$stmt = $pdo->prepare("SELECT id FROM filmes WHERE id = ?");
$stmt->execute([$filme_id]);

if (!$stmt->fetch()) {

    http_response_code(404);
    echo json_encode(['erro' => 'Filme não encontrado']);

    exit;
}


$stmt = $pdo->prepare("SELECT id FROM locacoes WHERE usuario_id = ? AND filme_id = ?");
$stmt->execute([$_SESSION['usuario_id'], $filme_id]);

if ($stmt->fetch()) {

    http_response_code(400);
    echo json_encode(['erro' => 'Você já alugou este filme']);

    exit;
}


$stmt = $pdo->prepare("INSERT INTO locacoes (usuario_id, filme_id) VALUES (?, ?)");

if ($stmt->execute([$_SESSION['usuario_id'], $filme_id])) {

    http_response_code(201);
    echo json_encode(['sucesso' => true, 'mensagem' => 'Filme alugado com sucesso']);

    exit;

} else {

    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao alugar o filme']);

    exit;
}
?>
