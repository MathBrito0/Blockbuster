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
    echo json_encode(['erro' => 'Faça login para devolver filmes']);

    exit;
}


$filme_id = trim($_POST['filme_id'] ?? '');


if (empty($filme_id) || !is_numeric($filme_id)) {

    http_response_code(400);
    echo json_encode(['erro' => 'Filme inválido']);

    exit;
}


$stmt = $pdo->prepare("DELETE FROM locacoes WHERE usuario_id = ? AND filme_id = ?");
$stmt->execute([$_SESSION['usuario_id'], $filme_id]);

if ($stmt->rowCount() == 0) {

    http_response_code(400);
    echo json_encode(['erro' => 'Você não alugou este filme']);

    exit;
}


http_response_code(200);
echo json_encode(['sucesso' => true, 'mensagem' => 'Filme devolvido com sucesso']);

exit;
?>
