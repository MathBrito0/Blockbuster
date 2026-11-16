<?php

session_start();
header('Content-Type: application/json; charset=utf-8');
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


try {
    $stmt = $pdo->prepare("DELETE FROM locacoes WHERE usuario_id = ?");
    $stmt->execute([$_SESSION['usuario_id']]);

    if ($stmt->rowCount() == 0) {
        http_response_code(400);
        echo json_encode(['erro' => 'Você não possui filmes alugados']);
        exit;
    }

    http_response_code(200);
    echo json_encode(['sucesso' => true, 'mensagem' => 'Todos os filmes foram devolvidos com sucesso']);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['erro' => 'Erro no banco: ' . $e->getMessage()]);

}
exit;
?>