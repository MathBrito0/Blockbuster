<?php
header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 0);
require_once 'backend.php';

try {

    $stmt = $pdo->query("SELECT * FROM filmes ORDER BY id DESC");
    $filmes = $stmt->fetchALL(PDO::FETCH_ASSOC);

    http_response_code(200);
    echo json_encode(['sucesso' => true, 'dados' => $filmes]);

    exit;

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao carregar o catálogo de filmes']);

    exit;
}
?>