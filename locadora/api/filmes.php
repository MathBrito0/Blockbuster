<?php
session_start();
header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 0);
require_once 'backend.php';

if (!isset($_SESSION['usuario_id'])) {

    http_response_code(401);
    echo json_encode(['erro' => 'Faça login para ver o catálogo']);

    exit;
}

try {

    $stmt = $pdo->query("SELECT * FROM filmes ORDER BY id DESC");
    $filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($filmes as $i => $filme) {

        $stmt = $pdo->prepare("SELECT id FROM locacoes WHERE usuario_id = ? AND filme_id = ?");
        $stmt->execute([$_SESSION['usuario_id'], $filme['id']]);

        if ($stmt->fetch()) {
            $filmes[$i]['alugado'] = true;
        } else {
            $filmes[$i]['alugado'] = false;
        }
    }

    http_response_code(200);
    echo json_encode(['sucesso' => true, 'dados' => $filmes]);

    exit;

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao carregar o catálogo de filmes']);

    exit;
}
?>
